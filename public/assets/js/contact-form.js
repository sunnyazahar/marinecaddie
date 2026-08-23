(function () {
    function recaptchaApi() {
        if (typeof grecaptcha === 'undefined') return null;
        if (grecaptcha.enterprise && typeof grecaptcha.enterprise.getResponse === 'function') {
            return grecaptcha.enterprise;
        }
        return grecaptcha;
    }

    function getRecaptchaToken(form) {
        var widget = form.querySelector('.g-recaptcha');
        if (!widget) return '';
        var api = recaptchaApi();
        if (api && typeof api.getResponse === 'function') {
            try {
                return api.getResponse() || '';
            } catch (err) {
                return '';
            }
        }
        var field = form.querySelector('[name="g-recaptcha-response"]');
        return field ? (field.value || '') : '';
    }

    function resetRecaptcha(form) {
        var widget = form.querySelector('.g-recaptcha');
        if (!widget) return;
        var api = recaptchaApi();
        if (api && typeof api.reset === 'function') {
            try { api.reset(); } catch (err) { /* ignore */ }
        }
    }

    function showStatus(form, message, isError) {
        var el = form.querySelector('.mc-contact-form__status');
        if (!el) return;
        el.hidden = false;
        el.textContent = message;
        el.classList.toggle('is-error', !!isError);
        el.classList.toggle('is-ok', !isError);
    }

    function clearStatus(form) {
        var el = form.querySelector('.mc-contact-form__status');
        if (!el) return;
        el.hidden = true;
        el.textContent = '';
        el.classList.remove('is-error', 'is-ok');
    }

    function getCsrfToken() {
        var meta = document.querySelector('meta[name="csrf-token"]');
        return meta ? meta.getAttribute('content') : '';
    }

    document.querySelectorAll('form.mc-contact-form').forEach(function (form) {
        form.addEventListener('submit', function (e) {
            e.preventDefault();
            clearStatus(form);

            if (form.querySelector('.g-recaptcha') && !getRecaptchaToken(form)) {
                showStatus(form, 'Please complete the reCAPTCHA verification.', true);
                return;
            }

            var submitBtn = form.querySelector('[type="submit"]');
            if (submitBtn) submitBtn.disabled = true;

            var fd = new FormData(form);
            var captchaToken = getRecaptchaToken(form);
            if (captchaToken) {
                fd.set('g-recaptcha-response', captchaToken);
            }

            fetch(form.action, {
                method: 'POST',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                    'Accept': 'application/json',
                    'X-CSRF-TOKEN': getCsrfToken(),
                },
                body: fd,
            })
                .then(function (res) {
                    return res.json().then(function (data) {
                        return { ok: res.ok, data: data };
                    }).catch(function () {
                        return { ok: res.ok, data: {} };
                    });
                })
                .then(function (result) {
                    if (submitBtn) submitBtn.disabled = false;

                    if (result.ok && result.data && result.data.ok) {
                        showStatus(form, result.data.message || 'Thank you. Your message has been sent.', false);
                        form.reset();
                        resetRecaptcha(form);
                        return;
                    }

                    resetRecaptcha(form);

                    if (result.data && result.data.errors) {
                        var first = Object.values(result.data.errors)[0];
                        showStatus(form, Array.isArray(first) ? first[0] : String(first), true);
                        return;
                    }

                    showStatus(form, 'Something went wrong. Please try again or email us directly.', true);
                })
                .catch(function () {
                    if (submitBtn) submitBtn.disabled = false;
                    resetRecaptcha(form);
                    showStatus(form, 'Network error. Please check your connection and try again.', true);
                });
        });
    });
})();
