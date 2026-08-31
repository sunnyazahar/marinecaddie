<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('indexnow:submit {--dry-run : Print payload without posting}', function () {
    $key = '509b3b93b4e049619ce65b70e55997c8';
    $host = parse_url((string) config('seo.url', 'https://www.marinecaddie.com'), PHP_URL_HOST) ?: 'www.marinecaddie.com';
    $keyLocation = "https://{$host}/{$key}.txt";

    $controller = app(\App\Http\Controllers\SitemapController::class);
    $response = $controller->index();
    $xml = @simplexml_load_string($response->getContent());
    if ($xml === false) {
        $this->error('Could not parse dynamic sitemap.xml.');

        return 1;
    }

    $urls = [];
    foreach ($xml->url as $entry) {
        $loc = trim((string) $entry->loc);
        if ($loc !== '') {
            $urls[] = $loc;
        }
    }

    $urls = array_values(array_unique($urls));
    if ($urls === []) {
        $this->error('No URLs found in sitemap.');

        return 1;
    }

    $payload = [
        'host' => $host,
        'key' => $key,
        'keyLocation' => $keyLocation,
        'urlList' => $urls,
    ];

    $this->info('Key location: '.$keyLocation);
    $this->info('URLs: '.count($urls));

    $keyResponse = Http::timeout(20)
        ->withHeaders(['User-Agent' => 'Mozilla/5.0 (compatible; bingbot/2.0)'])
        ->get($keyLocation);
    $keyBody = trim($keyResponse->body());
    if (! $keyResponse->successful() || $keyBody !== $key) {
        $this->error("IndexNow key file check failed (HTTP {$keyResponse->status()}).");
        $this->line('Expected plain-text key at: '.$keyLocation);
        if ($keyBody !== '' && strlen($keyBody) < 500) {
            $this->line('Got: '.$keyBody);
        }

        return 1;
    }

    if ($keyResponse->header('Set-Cookie') || stripos((string) $keyResponse->header('X-Powered-By'), 'php') !== false) {
        $this->error('Key file is being served by PHP (session cookies detected).');
        $this->line('IndexNow requires a static .txt file at the site root.');
        $this->line('Ensure 509b3b93b4e049619ce65b70e55997c8.txt exists in public_html (and public/ on project-root hosts).');

        return 1;
    }

    $this->info('Key file verified (static).');

    if ($this->option('dry-run')) {
        $this->line(json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

        return 0;
    }

    $endpoints = [
        'Yandex' => 'https://yandex.com/indexnow',
        'IndexNow.org' => 'https://api.indexnow.org/indexnow',
        'Bing' => 'https://www.bing.com/indexnow',
    ];

    $accepted = [];
    $bingForbidden = false;

    foreach ($endpoints as $label => $endpoint) {
        $response = Http::timeout(30)
            ->acceptJson()
            ->asJson()
            ->post($endpoint, $payload);

        $status = $response->status();
        $this->line("{$label} ({$endpoint}) → HTTP {$status}");

        if (in_array($status, [200, 202], true)) {
            $accepted[] = $label;
            continue;
        }

        $body = (string) $response->body();
        if ($label === 'Bing' && $status === 403 && str_contains($body, 'UserForbiddedToAccessSite')) {
            $bingForbidden = true;
        } elseif ($body !== '') {
            $this->line($body);
        }
    }

    if ($accepted !== []) {
        $this->info('URLs submitted successfully to: '.implode(', ', $accepted).'.');
    }

    if ($bingForbidden) {
        $this->newLine();
        $this->warn('Bing returned UserForbiddedToAccessSite — your key file is fine, but Bing has not linked this domain to your key yet.');
        $this->line('Fix (pick one):');
        $this->line('  1. Verify https://www.marinecaddie.com in Bing Webmaster Tools: https://www.bing.com/webmasters');
        $this->line('     (Import from Google Search Console is fastest.)');
        $this->line('  2. After verification, open Bing WMT → IndexNow — it should recognize your key file.');
        $this->line('  3. Or wait 1–7 days for Bingbot to crawl the key file organically.');
    }

    return $accepted !== [] ? 0 : 1;
})->purpose('Submit sitemap URLs to IndexNow (Bing / Yandex / IndexNow partners)');
