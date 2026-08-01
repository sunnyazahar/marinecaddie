<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        if ($this->app->runningInConsole()) {
            return;
        }

        $requestHost = rtrim(request()->getSchemeAndHttpHost(), '/');
        $appUrl = (string) config('app.url');
        $assetUrl = (string) config('app.asset_url');

        $isLiveRequest = $requestHost !== '' && ! str_contains($requestHost, 'localhost');
        $hasLocalhostConfig = str_contains($appUrl, 'localhost') || str_contains($assetUrl, 'localhost');

        // Hostinger / production: never emit localhost asset URLs (phones cannot load them).
        if ($isLiveRequest && $hasLocalhostConfig) {
            URL::forceRootUrl($requestHost);
            URL::forceScheme('https');
            // Document root is /public on Hostinger, so assets are at domain root.
            config(['app.url' => $requestHost]);
            config(['app.asset_url' => $requestHost]);

            return;
        }

        if ($appUrl !== '') {
            URL::forceRootUrl($appUrl);
        }
    }
}
