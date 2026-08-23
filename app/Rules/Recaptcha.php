<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Recaptcha implements ValidationRule
{
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        if (! recaptcha_verification_configured()) {
            return;
        }

        if (! filled($value)) {
            $fail('Please complete the reCAPTCHA verification.');

            return;
        }

        $token = is_string($value) ? $value : null;
        $ip = recaptcha_client_ip();
        $userAgent = request()->userAgent();

        if (! recaptcha_verify($token, $ip, $userAgent)) {
            $fail('Please complete the reCAPTCHA verification.');
        }
    }
}
