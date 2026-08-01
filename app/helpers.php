<?php

if (! function_exists('theme_asset')) {
    /**
     * Asset URL that never points at localhost on a live host.
     * Hostinger (public = docroot): https://domain/assets/...
     * Local XAMPP: uses Laravel asset() / ASSET_URL.
     */
    function theme_asset(string $path): string
    {
        $path = ltrim(str_replace('\\', '/', $path), '/');

        if (! app()->runningInConsole()) {
            $host = request()->getHost();

            if ($host !== '' && ! in_array($host, ['localhost', '127.0.0.1'], true)) {
                return rtrim(request()->getSchemeAndHttpHost(), '/') . '/' . $path;
            }
        }

        return asset($path);
    }
}
