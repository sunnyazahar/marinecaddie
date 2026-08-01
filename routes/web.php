<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\RobotsController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/robots.txt', [RobotsController::class, 'index'])->name('robots');
Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/home-alt', [PageController::class, 'homeAlt'])->name('home.alt');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/services/air-freight', [PageController::class, 'airFreight'])->name('services.air-freight');
Route::get('/services/road-freight', [PageController::class, 'roadFreight'])->name('services.road-freight');
Route::get('/services/ocean-freight', [PageController::class, 'oceanFreight'])->name('services.ocean-freight');
Route::get('/services/warehousing', [PageController::class, 'warehousing'])->name('services.warehousing');
Route::get('/services/logistic-solution', [PageController::class, 'logisticSolution'])->name('services.logistic-solution');
Route::get('/services/rail-freight', [PageController::class, 'railFreight'])->name('services.rail-freight');
Route::get('/how-we-work', [PageController::class, 'howWeWork'])->name('how-we-work');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/portfolio/details', [PageController::class, 'portfolioDetails'])->name('portfolio.details');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/details', [PageController::class, 'blogDetails'])->name('blog.details');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms', [PageController::class, 'terms'])->name('terms');
