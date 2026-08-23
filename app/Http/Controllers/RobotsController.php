<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class RobotsController extends Controller
{
    public function index(): Response
    {
        $base = rtrim((string) (config('seo.url') ?: config('seo.organization.url') ?: config('app.url')), '/');
        $sitemap = $base.'/sitemap.xml';

        $content = implode("\n", [
            'User-agent: *',
            'Allow: /',
            '',
            '# Thin / alternate templates — keep crawl budget on primary pages',
            'Disallow: /home-alt',
            'Disallow: /blog/details',
            'Disallow: /portfolio/details',
            '',
            'Sitemap: '.$sitemap,
            '',
        ]);

        return response($content, 200)->header('Content-Type', 'text/plain; charset=UTF-8');
    }
}
