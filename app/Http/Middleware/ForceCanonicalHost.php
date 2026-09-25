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

        if (! is_string($canonicalHost) || $canonicalHost === '') {
            return $next($request);
        }

        $hostMismatch = strcasecmp($host, $canonicalHost) !== 0;
        $insecure = ! $request->secure();

        if (! $hostMismatch && ! $insecure) {
            return $next($request);
        }

        $uri = $request->getRequestUri();

        // Never leak internal /public/… paths into Location headers
        if (str_starts_with($uri, '/public/') || $uri === '/public') {
            $uri = substr($uri, strlen('/public')) ?: '/';
        }

        // One hop: always https://www… (Hostinger may still 301 HTTP→HTTPS first at edge)
        return redirect()->to('https://'.$canonicalHost.$uri, 301);
    }
}
