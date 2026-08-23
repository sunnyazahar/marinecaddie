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

if (! function_exists('theme_webp')) {
    /**
     * Prefer a sibling .webp when it exists on disk (for <picture> / CSS).
     * Falls back to the original path.
     */
    function theme_webp(string $path): string
    {
        $path = ltrim(str_replace('\\', '/', $path), '/');
        $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));

        if (! in_array($ext, ['jpg', 'jpeg', 'png'], true)) {
            return theme_asset($path);
        }

        $webpRel = preg_replace('/\.(jpe?g|png)$/i', '.webp', $path) ?: $path;
        $webpAbs = public_path($webpRel);

        if (is_file($webpAbs)) {
            return theme_asset($webpRel);
        }

        return theme_asset($path);
    }
}

if (! function_exists('theme_image_sources')) {
    /**
     * Build src + optional WebP URL for a public asset path.
     *
     * @return array{src: string, webp: ?string}
     */
    function theme_image_sources(string $path): array
    {
        $path = ltrim(str_replace('\\', '/', $path), '/');
        $src = theme_asset($path);
        $ext = strtolower(pathinfo($path, PATHINFO_EXTENSION));

        if (! in_array($ext, ['jpg', 'jpeg', 'png'], true)) {
            return ['src' => $src, 'webp' => null];
        }

        $webpRel = preg_replace('/\.(jpe?g|png)$/i', '.webp', $path) ?: $path;
        $webp = is_file(public_path($webpRel)) ? theme_asset($webpRel) : null;

        return ['src' => $src, 'webp' => $webp];
    }
}

if (! function_exists('recaptcha_enabled')) {
    /** Whether Google reCAPTCHA site key is configured. */
    function recaptcha_enabled(): bool
    {
        return filled(config('services.recaptcha.site_key'));
    }
}

if (! function_exists('recaptcha_use_enterprise')) {
    /** Enterprise CreateAssessment (recommended by Google Cloud console). */
    function recaptcha_use_enterprise(): bool
    {
        return filled(config('services.recaptcha.project_id'))
            && filled(config('services.recaptcha.api_key'));
    }
}

if (! function_exists('recaptcha_verification_configured')) {
    function recaptcha_verification_configured(): bool
    {
        return recaptcha_use_enterprise()
            || filled(config('services.recaptcha.secret_key'));
    }
}

if (! function_exists('recaptcha_request_rules')) {
    /** Server-side rules — never nullable when verification is configured. */
    function recaptcha_request_rules(): array
    {
        if (! recaptcha_verification_configured()) {
            return [];
        }

        return [
            'g-recaptcha-response' => ['required', 'string', new \App\Rules\Recaptcha],
        ];
    }
}

if (! function_exists('recaptcha_client_ip')) {
    /** Client IP for assessments (proxy-aware). */
    function recaptcha_client_ip(?\Illuminate\Http\Request $request = null): ?string
    {
        $request = $request ?? request();

        if (! $request) {
            return null;
        }

        $forwarded = $request->header('X-Forwarded-For');
        if (filled($forwarded)) {
            $first = trim(explode(',', (string) $forwarded)[0]);

            return $first !== '' ? $first : $request->ip();
        }

        return $request->ip();
    }
}

if (! function_exists('recaptcha_verify_enterprise')) {
    /**
     * reCAPTCHA Enterprise — CreateAssessment API.
     *
     * @see https://cloud.google.com/recaptcha-enterprise/docs/create-assessment
     */
    function recaptcha_verify_enterprise(?string $token, ?string $ip = null, ?string $userAgent = null): bool
    {
        $projectId = (string) config('services.recaptcha.project_id', '');
        $apiKey = (string) config('services.recaptcha.api_key', '');
        $siteKey = (string) config('services.recaptcha.site_key', '');

        if ($projectId === '' || $apiKey === '' || $siteKey === '') {
            return true;
        }

        if (! filled($token)) {
            return false;
        }

        $url = 'https://recaptchaenterprise.googleapis.com/v1/projects/'
            .rawurlencode($projectId)
            .'/assessments?key='.rawurlencode($apiKey);

        try {
            $response = \Illuminate\Support\Facades\Http::timeout(10)
                ->acceptJson()
                ->post($url, [
                    'event' => array_filter([
                        'token' => $token,
                        'siteKey' => $siteKey,
                        'userAgent' => $userAgent,
                        'userIpAddress' => $ip,
                    ], fn ($v) => filled($v)),
                ]);

            if (! $response->successful()) {
                \Illuminate\Support\Facades\Log::warning('reCAPTCHA Enterprise assessment HTTP error', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                return false;
            }

            $data = $response->json();
            $valid = (bool) data_get($data, 'tokenProperties.valid', false);

            if (! $valid) {
                \Illuminate\Support\Facades\Log::info('reCAPTCHA Enterprise token invalid', [
                    'reason' => data_get($data, 'tokenProperties.invalidReason'),
                ]);

                return false;
            }

            $score = data_get($data, 'riskAnalysis.score');
            if ($score !== null) {
                $minScore = (float) config('services.recaptcha.min_score', 0.5);

                return (float) $score >= $minScore;
            }

            return true;
        } catch (\Throwable $e) {
            \Illuminate\Support\Facades\Log::warning('reCAPTCHA Enterprise assessment failed: '.$e->getMessage());

            return false;
        }
    }
}

if (! function_exists('recaptcha_verify')) {
    /**
     * Verify reCAPTCHA token (Enterprise assessment or classic siteverify).
     */
    function recaptcha_verify(?string $token, ?string $ip = null, ?string $userAgent = null): bool
    {
        if (! recaptcha_verification_configured()) {
            return true;
        }

        if (recaptcha_use_enterprise()) {
            return recaptcha_verify_enterprise($token, $ip, $userAgent);
        }

        $secret = (string) config('services.recaptcha.secret_key', '');

        if ($secret === '') {
            return true;
        }

        if (! filled($token)) {
            return false;
        }

        try {
            $response = \Illuminate\Support\Facades\Http::asForm()
                ->timeout(8)
                ->post('https://www.google.com/recaptcha/api/siteverify', array_filter([
                    'secret' => $secret,
                    'response' => $token,
                    'remoteip' => $ip,
                ]));

            return (bool) data_get($response->json(), 'success', false);
        } catch (\Throwable $e) {
            \Illuminate\Support\Facades\Log::warning('reCAPTCHA verify failed: '.$e->getMessage());

            return false;
        }
    }
}

if (! function_exists('send_form_notification')) {
    /**
     * Send a structured HTML notification for website form submissions.
     *
     * @param  array<int, array{label: string, value: string}>  $fields
     */
    function send_form_notification(
        string $subject,
        array $fields,
        string $replyToEmail,
        ?string $replyToName = null,
        ?string $sourcePage = null,
    ): void {
        $to = config('company.form_notify_email', config('company.email'));
        $source = $sourcePage ?: 'MarineCaddie website';
        $submittedAt = now()->utc()->format('d M Y, H:i');

        $payload = [];
        foreach ($fields as $field) {
            $payload[] = [
                'label' => $field['label'] ?? 'Field',
                'value' => (string) ($field['value'] ?? ''),
            ];
        }

        \Illuminate\Support\Facades\Log::channel('single')->info('Form submission', [
            'subject' => $subject,
            'source' => $source,
            'reply_to' => $replyToEmail,
            'fields' => $payload,
        ]);

        try {
            \Illuminate\Support\Facades\Mail::to($to)->send(
                new \App\Mail\FormSubmissionMail(
                    formTitle: $subject,
                    fields: $payload,
                    sourcePage: $source,
                    submittedAt: $submittedAt,
                    replyToEmail: $replyToEmail,
                    replyToName: $replyToName,
                )
            );
        } catch (\Throwable $e) {
            \Illuminate\Support\Facades\Log::warning('Form mail failed: '.$e->getMessage(), [
                'subject' => $subject,
                'source' => $source,
            ]);
        }
    }
}
