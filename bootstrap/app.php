<?php

use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;
use Illuminate\Http\Request;

return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__.'/../routes/web.php',
        commands: __DIR__.'/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware): void {
        $middleware->append(\App\Http\Middleware\FixAssetUrls::class);

        // HTML minify / page-speed (SEO-safe whitespace + comment stripping)
        $middleware->appendToGroup('web', [
            \VinkiusLabs\LaravelPageSpeed\Middleware\RemoveComments::class,
            \VinkiusLabs\LaravelPageSpeed\Middleware\CollapseWhitespace::class,
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions): void {
        $exceptions->shouldRenderJsonWhen(
            fn (Request $request) => $request->is('api/*'),
        );
    })->create();
