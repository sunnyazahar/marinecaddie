<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\RobotsController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/robots.txt', [RobotsController::class, 'index'])->name('robots');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');
Route::get('/favicon.ico', function () {
    $path = public_path('favicon.ico');
    if (! is_file($path)) {
        $path = public_path('assets/img/logos/favicon-48.ico');
    }

    return response()->file($path, [
        'Content-Type' => 'image/x-icon',
        'Cache-Control' => 'public, max-age=31536000, immutable',
    ]);
});

Route::get('/favicon-48x48.png', function () {
    $path = public_path('favicon-48x48.png');
    if (! is_file($path)) {
        $path = public_path('assets/img/logos/favicon-48x48.png');
    }

    return response()->file($path, [
        'Content-Type' => 'image/png',
        'Cache-Control' => 'public, max-age=31536000, immutable',
    ]);
});

Route::get('/favicon-96x96.png', function () {
    $path = public_path('favicon-96x96.png');
    if (! is_file($path)) {
        $path = public_path('assets/img/logos/favicon-96x96.png');
    }

    return response()->file($path, [
        'Content-Type' => 'image/png',
        'Cache-Control' => 'public, max-age=31536000, immutable',
    ]);
});

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home-alt', [PageController::class, 'homeAlt'])->name('home.alt');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/mission-vision', [PageController::class, 'missionVision'])->name('mission-vision');
Route::get('/services', [PageController::class, 'services'])->name('services');

Route::redirect('/services/logistic-solution', '/services/ship-spares-logistics', 301);
Route::redirect('/services/rail-freight', '/services/vessel-husbandry', 301);
Route::redirect('/services/warehousing', '/services/import-clearance', 301);
Route::redirect('/services/road-freight', '/services/road-transportation', 301);

Route::get('/services/{slug}', [PageController::class, 'serviceShow'])
    ->name('services.show')
    ->where('slug', '[a-z0-9\-]+');

Route::get('/how-we-work', [PageController::class, 'howWeWork'])->name('how-we-work');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/details', [PageController::class, 'portfolioDetails'])->name('portfolio.details');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/details', [PageController::class, 'blogDetails'])->name('blog.details');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
Route::post('/quote', [QuoteController::class, 'store'])->name('quote.store');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
