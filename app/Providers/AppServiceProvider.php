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

        $host = request()->getHost();

        // Live host (Hostinger): always use the real domain for assets — never localhost.
        if ($host !== '' && ! in_array($host, ['localhost', '127.0.0.1'], true)) {
            $origin = rtrim(request()->getSchemeAndHttpHost(), '/');

            config([
                'app.url' => $origin,
                'app.asset_url' => $origin,
            ]);

            URL::forceRootUrl($origin);
            URL::forceScheme(request()->isSecure() ? 'https' : request()->getScheme());
            URL::useAssetOrigin($origin);

            return;
        }

        // Local XAMPP
        if ($root = config('app.url')) {
            URL::forceRootUrl($root);
        }

        if ($assetRoot = config('app.asset_url')) {
            URL::useAssetOrigin($assetRoot);
        }
    }
}
