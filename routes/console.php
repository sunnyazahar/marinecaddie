<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Http;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('indexnow:submit {--dry-run : Print payload without posting}', function () {
    $key = '509b3b93b4e049619ce65b70e55997c8';
    $host = 'www.marinecaddie.com';
    $keyLocation = "https://{$host}/{$key}.txt";
    $sitemapPath = public_path('sitemap.xml');

    if (! is_file($sitemapPath)) {
        $this->error('public/sitemap.xml not found.');

        return 1;
    }

    $xml = @simplexml_load_file($sitemapPath);
    if ($xml === false) {
        $this->error('Could not parse sitemap.xml.');

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

    if ($this->option('dry-run')) {
        $this->line(json_encode($payload, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES));

        return 0;
    }

    $response = Http::timeout(30)
        ->acceptJson()
        ->asJson()
        ->post('https://api.indexnow.org/indexnow', $payload);

    $status = $response->status();
    $this->line("IndexNow HTTP {$status}");

    if (in_array($status, [200, 202], true)) {
        $this->info('URLs submitted successfully.');

        return 0;
    }

    $this->error($response->body() ?: 'Submission failed.');

    return 1;
})->purpose('Submit sitemap URLs to IndexNow (Bing / IndexNow partners)');
