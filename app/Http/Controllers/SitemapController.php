<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $lastmod = gmdate('Y-m-d\TH:i:s\Z');
        $base = rtrim((string) (config('seo.url') ?: config('app.url')), '/');

        $entries = [
            ['path' => '/', 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['path' => '/about', 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['path' => '/mission-vision', 'priority' => '0.85', 'changefreq' => 'monthly'],
            ['path' => '/services', 'priority' => '0.9', 'changefreq' => 'weekly'],
        ];

        foreach (array_keys(config('services_catalog', [])) as $slug) {
            $entries[] = [
                'path' => '/services/'.$slug,
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ];
        }

        $entries = array_merge($entries, [
            ['path' => '/how-we-work', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['path' => '/faq', 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['path' => '/contact', 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['path' => '/privacy-policy', 'priority' => '0.3', 'changefreq' => 'yearly'],
            ['path' => '/terms', 'priority' => '0.3', 'changefreq' => 'yearly'],
        ]);

        $xml = '<?xml version="1.0" encoding="UTF-8"?>'."\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">'."\n";

        foreach ($entries as $entry) {
            $loc = $entry['path'] === '/' ? $base : $base.$entry['path'];
            $xml .= "  <url>\n";
            $xml .= '    <loc>'.htmlspecialchars($loc, ENT_XML1 | ENT_QUOTES, 'UTF-8')."</loc>\n";
            $xml .= '    <lastmod>'.$lastmod."</lastmod>\n";
            $xml .= '    <changefreq>'.$entry['changefreq']."</changefreq>\n";
            $xml .= '    <priority>'.$entry['priority']."</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200)
            ->header('Content-Type', 'application/xml; charset=UTF-8')
            ->header('Cache-Control', 'public, max-age=3600');
    }
}
