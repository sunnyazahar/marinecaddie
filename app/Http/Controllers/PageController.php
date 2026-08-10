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

    public function airFreight()
    {
        return view('pages.air-freight');
    }

    public function roadFreight()
    {
        return view('pages.road-freight');
    }

    public function oceanFreight()
    {
        return view('pages.ocean-freight');
    }

    public function warehousing()
    {
        return view('pages.warehousing');
    }

    public function logisticSolution()
    {
        return view('pages.logistic-solution');
    }

    public function railFreight()
    {
        return view('pages.rail-freight');
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
