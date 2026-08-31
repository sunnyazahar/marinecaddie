<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ForceCanonicalHost
{
    public function handle(Request $request, Closure $next): Response
    {
        $host = $request->getHost();

        if ($host === '' || in_array($host, ['localhost', '127.0.0.1'], true)) {
            return $next($request);
        }

        $canonicalHost = parse_url((string) config('seo.url', ''), PHP_URL_HOST);

        if (is_string($canonicalHost) && $canonicalHost !== '' && strcasecmp($host, $canonicalHost) !== 0) {
            return redirect()->to(
                'https://' . $canonicalHost . $request->getRequestUri(),
                301
            );
        }

        return $next($request);
    }
}
