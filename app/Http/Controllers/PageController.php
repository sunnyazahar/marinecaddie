<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home()
    {
        return view('pages.home');
    }

    public function homeAlt()
    {
        return view('pages.home-alt');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function missionVision()
    {
        return view('pages.mission-vision');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function serviceShow(string $slug)
    {
        $catalog = config('services_catalog', []);

        if (! isset($catalog[$slug])) {
            abort(404);
        }

        $service = $catalog[$slug];
        $service['slug'] = $slug;

        $siblings = collect($catalog)
            ->filter(fn (array $item) => ($item['category'] ?? '') === ($service['category'] ?? ''))
            ->map(function (array $item, string $itemSlug) {
                $item['slug'] = $itemSlug;

                return $item;
            })
            ->values()
            ->all();

        $related = [];
        foreach ($service['related'] ?? [] as $relatedSlug) {
            if (isset($catalog[$relatedSlug])) {
                $related[] = array_merge($catalog[$relatedSlug], ['slug' => $relatedSlug]);
            }
        }

        return view('pages.service-show', [
            'service' => $service,
            'siblings' => $siblings,
            'related' => $related,
            'catalog' => $catalog,
        ]);
    }

    public function howWeWork()
    {
        return view('pages.how-we-work');
    }

    public function faq()
    {
        return view('pages.faq');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function portfolioDetails()
    {
        return view('pages.portfolio-details');
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function blogDetails()
    {
        return view('pages.blog-details');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function privacyPolicy()
    {
        return view('pages.privacy-policy');
    }

    public function terms()
    {
        return view('pages.terms');
    }
}
