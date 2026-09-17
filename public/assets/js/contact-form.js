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

    function clearRecaptchaError(form) {
        var box = form.querySelector('.mc-recaptcha');
        if (!box) return;
        var error = box.querySelector('.mc-field-error');
        if (error) error.remove();
    }

    function showRecaptchaError(form, message) {
        var box = form.querySelector('.mc-recaptcha');
        clearRecaptchaError(form);
        if (!box) {
            showStatus(form, message, true);
            return;
        }
        var el = document.createElement('div');
        el.className = 'mc-field-error';
        el.setAttribute('role', 'alert');
        el.textContent = message;
        box.appendChild(el);
        showStatus(form, message, true);
        box.scrollIntoView({ block: 'center', behavior: 'smooth' });
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

    function fieldMessage(name, value) {
        var text = (value || '').replace(/^\s+|\s+$/g, '');
        if (name === 'name') {
            if (!text) return 'Please enter your name.';
            if (text.length < 2) return 'Name must be at least 2 characters.';
            if (text.length > 120) return 'Name must be 120 characters or fewer.';
            if (!/^[\p{L}\p{M}][\p{L}\p{M}\s.'-]{1,119}$/u.test(text)) return 'Please enter a valid name (letters only).';
            return '';
        }
        if (name === 'email') {
            if (!text) return 'Please enter your email address.';
            if (text.length > 160 || !/^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/.test(text)) return 'Please enter a valid email address.';
            return '';
        }
        if (name === 'subject') {
            if (!text) return 'Please enter a subject.';
            if (text.length < 3) return 'Subject must be at least 3 characters.';
            if (text.length > 200) return 'Subject must be 200 characters or fewer.';
            return '';
        }
        if (name === 'phone') {
            if (!text) return '';
            var digits = text.replace(/\D/g, '');
            if (!/^[0-9+\s().-]+$/.test(text) || digits.length < 7 || digits.length > 15) {
                return 'Please enter a valid contact number.';
            }
            return '';
        }
        if (name === 'message' || name === 'reply') {
            if (!text) return name === 'reply' ? 'Please enter your reply.' : 'Please enter a message.';
            if (text.length < 10) return (name === 'reply' ? 'Reply' : 'Message') + ' must be at least 10 characters.';
            if (text.length > 4000) return (name === 'reply' ? 'Reply' : 'Message') + ' must be 4000 characters or fewer.';
            return '';
        }
        return '';
    }

    function clearFieldError(input) {
        input.classList.remove('is-invalid');
        input.removeAttribute('aria-invalid');
        if (input.getAttribute('aria-describedby') && input.getAttribute('aria-describedby').indexOf('-error') !== -1) {
            input.removeAttribute('aria-describedby');
        }
        var next = input.nextElementSibling;
        if (next && next.classList.contains('mc-field-error')) next.remove();
    }

    function showFieldError(input, message) {
        clearFieldError(input);
        input.classList.add('is-invalid');
        input.setAttribute('aria-invalid', 'true');
        var id = (input.id || input.name || 'field') + '-error';
        var el = document.createElement('div');
        el.className = 'mc-field-error';
        el.id = id;
        el.setAttribute('role', 'alert');
        el.textContent = message;
        input.insertAdjacentElement('afterend', el);
        input.setAttribute('aria-describedby', id);
    }

    function clearFormErrors(form) {
        form.querySelectorAll('.form-control').forEach(clearFieldError);
    }

    function validateForm(form) {
        var firstInvalid = null;
        ['name', 'email', 'subject', 'phone', 'message', 'reply'].forEach(function (name) {
            var input = form.querySelector('[name="' + name + '"]');
            if (!input) return;
            var message = fieldMessage(name, input.value);
            if (message) {
                showFieldError(input, message);
                if (!firstInvalid) firstInvalid = input;
            } else {
                clearFieldError(input);
            }
        });
        return firstInvalid;
    }

    function applyServerErrors(form, errors) {
        var firstInvalid = null;
        Object.keys(errors).forEach(function (name) {
            var input = form.querySelector('[name="' + name + '"]');
            if (!input) return;
            var messages = errors[name];
            var message = Array.isArray(messages) ? messages[0] : String(messages);
            showFieldError(input, message);
            if (!firstInvalid) firstInvalid = input;
        });
        return firstInvalid;
    }

    function getCsrfToken() {
        var meta = document.querySelector('meta[name="csrf-token"]');
        return meta ? meta.getAttribute('content') : '';
    }

    document.querySelectorAll('form.mc-contact-form').forEach(function (form) {
        form.addEventListener('input', function (e) {
            var input = e.target;
            if (!input || !input.name || !input.classList || !input.classList.contains('form-control')) return;
            if (!input.classList.contains('is-invalid')) return;
            var message = fieldMessage(input.name, input.value);
            if (message) showFieldError(input, message);
            else clearFieldError(input);
        });

        form.addEventListener('submit', function (e) {
            e.preventDefault();
            e.stopImmediatePropagation();
            clearStatus(form);
            clearRecaptchaError(form);

            var firstInvalid = validateForm(form);
            if (firstInvalid) {
                showStatus(form, 'Please correct the highlighted fields.', true);
                firstInvalid.focus();
                return;
            }

            if (form.querySelector('.g-recaptcha') && !getRecaptchaToken(form)) {
                showRecaptchaError(form, 'Please complete the reCAPTCHA verification.');
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
                        clearFormErrors(form);
                        showStatus(form, result.data.message || 'Thank you. Your message has been sent.', false);
                        form.reset();
                        resetRecaptcha(form);
                        return;
                    }

                    resetRecaptcha(form);

                    if (result.data && result.data.errors) {
                        var errors = result.data.errors;
                        var fieldErrors = {};
                        var captchaError = '';
                        Object.keys(errors).forEach(function (name) {
                            var messages = errors[name];
                            var message = Array.isArray(messages) ? messages[0] : String(messages);
                            if (name === 'g-recaptcha-response') captchaError = message;
                            else fieldErrors[name] = errors[name];
                        });
                        if (Object.keys(fieldErrors).length) {
                            var invalid = applyServerErrors(form, fieldErrors);
                            showStatus(form, 'Please correct the highlighted fields.', true);
                            if (invalid) invalid.focus();
                            return;
                        }
                        if (captchaError) {
                            showRecaptchaError(form, captchaError);
                            return;
                        }
                    }

                    showStatus(form, 'Something went wrong. Please try again or email us directly.', true);
                })
                .catch(function () {
                    if (submitBtn) submitBtn.disabled = false;
                    resetRecaptcha(form);
                    showStatus(form, 'Network error. Please check your connection and try again.', true);
                });
        }, true);
    });
})();
