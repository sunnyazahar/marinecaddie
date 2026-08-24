{{-- Google reCAPTCHA v2 checkbox (Classic or Enterprise) --}}
@if(recaptcha_should_load())
<div class="mc-recaptcha" @if(!empty($id)) id="{{ $id }}" @endif>
    <div class="g-recaptcha" data-sitekey="{{ config('services.recaptcha.site_key') }}" data-action="submit"></div>
    <noscript>
        <p class="mc-recaptcha__noscript mb-0">Please enable JavaScript to complete the reCAPTCHA.</p>
    </noscript>
</div>
@endif
