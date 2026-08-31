<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;
use Symfony\Component\HttpFoundation\Response;

class FixAssetUrls
{
    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->getHost();

        if ($host !== '' && ! in_array($host, ['localhost', '127.0.0.1'], true)) {
            $origin = rtrim((string) config('seo.url', $request->getSchemeAndHttpHost()), '/');
            if ($origin === '') {
                $origin = rtrim($request->getSchemeAndHttpHost(), '/');
            }

            config([
                'app.url' => $origin,
                'app.asset_url' => $origin,
            ]);

            URL::forceRootUrl($origin);
            URL::forceScheme('https');
            URL::useAssetOrigin($origin);
        }

        return $next($request);
    }
}
