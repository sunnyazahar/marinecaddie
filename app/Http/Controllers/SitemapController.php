<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $base = rtrim((string) (config('seo.url') ?: config('app.url')), '/');

        $entries = [
            ['path' => '/', 'sources' => [
                resource_path('views/pages/home.blade.php'),
                config_path('seo.php'),
                config_path('company.php'),
            ]],
            ['path' => '/about', 'sources' => [
                resource_path('views/pages/about.blade.php'),
            ]],
            ['path' => '/mission-vision', 'sources' => [
                resource_path('views/pages/mission-vision.blade.php'),
            ]],
            ['path' => '/services', 'sources' => [
                resource_path('views/pages/services.blade.php'),
                config_path('services_catalog.php'),
            ]],
        ];

        $serviceSources = [
            resource_path('views/pages/service-show.blade.php'),
            config_path('services_catalog.php'),
        ];

        foreach (array_keys(config('services_catalog', [])) as $slug) {
            $entries[] = [
                'path' => '/services/'.$slug,
                'sources' => $serviceSources,
            ];
        }

        $entries = array_merge($entries, [
            ['path' => '/how-we-work', 'sources' => [
                resource_path('views/pages/how-we-work.blade.php'),
            ]],
            ['path' => '/faq', 'sources' => [
                resource_path('views/pages/faq.blade.php'),
            ]],
            ['path' => '/contact', 'sources' => [
                resource_path('views/pages/contact.blade.php'),
            ]],
            ['path' => '/privacy-policy', 'sources' => [
                resource_path('views/pages/privacy-policy.blade.php'),
            ]],
            ['path' => '/terms', 'sources' => [
                resource_path('views/pages/terms.blade.php'),
            ]],
        ]);

        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

        foreach ($entries as $entry) {
            $loc = $entry['path'] === '/' ? $base : $base.$entry['path'];
            $lastmod = $this->lastmodFromSources($entry['sources']);

            $xml .= "  <url>\n";
            $xml .= '    <loc>'.htmlspecialchars($loc, ENT_XML1 | ENT_QUOTES, 'UTF-8')."</loc>\n";
            if ($lastmod !== null) {
                $xml .= '    <lastmod>'.$lastmod."</lastmod>\n";
            }
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=UTF-8')
            ->header('Cache-Control', 'public, max-age=3600');
    }

    /**
     * @param  list<string>  $sources
     */
    private function lastmodFromSources(array $sources): ?string
    {
        $latest = 0;

        foreach ($sources as $path) {
            if (! is_string($path) || $path === '' || ! is_file($path)) {
                continue;
            }

            $mtime = @filemtime($path);
            if (is_int($mtime) && $mtime > $latest) {
                $latest = $mtime;
            }
        }

        if ($latest === 0) {
            return null;
        }

        return gmdate('Y-m-d', $latest);
    }
}
