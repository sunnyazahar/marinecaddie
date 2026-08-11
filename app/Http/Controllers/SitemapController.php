<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $lastmod = now()->toAtomString();

        $urls = [
            ['loc' => route('home'), 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => route('about'), 'priority' => '0.9', 'changefreq' => 'monthly'],
            ['loc' => route('mission-vision'), 'priority' => '0.85', 'changefreq' => 'monthly'],
            ['loc' => route('services'), 'priority' => '0.9', 'changefreq' => 'weekly'],
        ];

        foreach (array_keys(config('services_catalog', [])) as $slug) {
            $urls[] = [
                'loc' => route('services.show', $slug),
                'priority' => '0.8',
                'changefreq' => 'monthly',
            ];
        }

        $urls = array_merge($urls, [
            ['loc' => route('how-we-work'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => route('faq'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => route('portfolio'), 'priority' => '0.7', 'changefreq' => 'monthly'],
            ['loc' => route('blog'), 'priority' => '0.6', 'changefreq' => 'weekly'],
            ['loc' => route('contact'), 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => route('privacy-policy'), 'priority' => '0.3', 'changefreq' => 'yearly'],
            ['loc' => route('terms'), 'priority' => '0.3', 'changefreq' => 'yearly'],
        ]);

        $xml = '<?xml version="1.0" encoding="UTF-8"?>' . "\n";
        $xml .= '<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">' . "\n";

        foreach ($urls as $url) {
            $xml .= "  <url>\n";
            $xml .= '    <loc>' . e($url['loc']) . "</loc>\n";
            $xml .= '    <lastmod>' . $lastmod . "</lastmod>\n";
            $xml .= '    <changefreq>' . $url['changefreq'] . "</changefreq>\n";
            $xml .= '    <priority>' . $url['priority'] . "</priority>\n";
            $xml .= "  </url>\n";
        }

        $xml .= '</urlset>';

        return response($xml, 200)->header('Content-Type', 'application/xml; charset=UTF-8');
    }
}
