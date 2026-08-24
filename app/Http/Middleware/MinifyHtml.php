<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Minify HTML whitespace without touching <script> / <style> (Page Speed's
 * CollapseWhitespace + // comment stripping breaks inline JS when newlines collapse).
 */
class MinifyHtml
{
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);

        if (! config('laravel-page-speed.enable', true)) {
            return $response;
        }

        if (! $response instanceof Response) {
            return $response;
        }

        $contentType = (string) $response->headers->get('Content-Type', '');
        if ($contentType !== '' && ! str_contains($contentType, 'text/html')) {
            return $response;
        }

        $buffer = $response->getContent();
        if (! is_string($buffer) || $buffer === '') {
            return $response;
        }

        if (stripos($buffer, '<html') === false && stripos($buffer, '<!DOCTYPE') === false) {
            return $response;
        }

        foreach (config('laravel-page-speed.skip', []) as $pattern) {
            if ($request->is($pattern)) {
                return $response;
            }
        }

        $response->setContent($this->minify($buffer));

        return $response;
    }

    protected function minify(string $buffer): string
    {
        $preserved = [];
        $index = 0;

        $buffer = preg_replace_callback(
            '/<(script|style|pre|textarea|code)(\b[^>]*)?>.*?<\/\1>/is',
            function (array $matches) use (&$preserved, &$index): string {
                $key = "___MC_PRESERVE_{$index}___";
                $preserved[$key] = $matches[0];
                $index++;

                return $key;
            },
            $buffer
        ) ?? $buffer;

        $buffer = preg_replace('/<!--(?!\[if\s).*?-->/s', '', $buffer) ?? $buffer;
        $buffer = preg_replace("/[ \t]+/", ' ', $buffer) ?? $buffer;
        $buffer = preg_replace("/\r?\n+/", "\n", $buffer) ?? $buffer;
        $buffer = preg_replace("/>\n</", '><', $buffer) ?? $buffer;
        $buffer = preg_replace("/\n+/", '', $buffer) ?? $buffer;
        $buffer = preg_replace('/> </', '><', $buffer) ?? $buffer;

        return strtr($buffer, $preserved);
    }
}
