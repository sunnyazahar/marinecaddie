(function () {
    var modal = document.getElementById('mcQuoteModal');
    if (!modal) return;

    var form = document.getElementById('mcQuoteForm');
    var infoPanel = modal.querySelector('[data-mode-panel="information"]');
    var quotePanel = modal.querySelector('[data-mode-panel="quote"]');
    var stepLabel = modal.querySelector('[data-quote-step-label]');
    var statusEl = modal.querySelector('[data-quote-status]');
    var reviewEl = modal.querySelector('[data-quote-review]');
    var backBtn = modal.querySelector('[data-quote-back]');
    var nextBtn = modal.querySelector('[data-quote-next]');
    var submitBtn = modal.querySelector('[data-quote-submit]');
    var stepField = document.getElementById('mcQuoteStepField');
    var recaptchaWrap = modal.querySelector('[data-quote-recaptcha]');
    var openers = document.querySelectorAll('[data-open-quote]');
    var lastFocus = null;
    var step = 1;
    var stepTitles = {
        1: 'Step 1 of 3 - Personal information',
        2: 'Step 2 of 3 - Shipment details',
        3: 'Step 3 of 3 - Review & send',
    };

    function hasRecaptcha() {
        return !!(recaptchaWrap && recaptchaWrap.querySelector('.g-recaptcha'));
    }

    function recaptchaApi() {
        if (typeof grecaptcha === 'undefined') return null;
        if (grecaptcha.enterprise && typeof grecaptcha.enterprise.getResponse === 'function') {
            return grecaptcha.enterprise;
        }
        return grecaptcha;
    }

    function getRecaptchaToken() {
        if (!hasRecaptcha()) return '';
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

    function resetRecaptcha() {
        if (!hasRecaptcha()) return;
        var api = recaptchaApi();
        if (api && typeof api.reset === 'function') {
            try { api.reset(); } catch (err) { /* ignore */ }
        }
    }

    function syncRecaptchaVisibility() {
        if (!recaptchaWrap || !hasRecaptcha()) return;
        if (mode() === 'information') {
            var infoCopy = infoPanel && infoPanel.querySelector('.mc-quote__footer-copy');
            if (infoCopy) {
                infoCopy.appendChild(recaptchaWrap);
            }
            recaptchaWrap.hidden = false;
            return;
        }
        var quoteFooter = quotePanel && quotePanel.querySelector('.mc-quote__footer--quote');
        if (quoteFooter && quoteFooter.parentNode) {
            quoteFooter.parentNode.insertBefore(recaptchaWrap, quoteFooter);
        }
        recaptchaWrap.hidden = step !== 3;
    }

    function mode() {
        var checked = form.querySelector('input[name="request_type"]:checked');
        return checked ? checked.value : 'information';
    }

    function setPanelInputsDisabled(panel, disabled) {
        if (!panel) return;
        panel.querySelectorAll('input, select, textarea, button').forEach(function (el) {
            if (el.name === 'request_type') return;
            if (el.hasAttribute('data-quote-close')) return;
            // Keep mode radios always enabled — they live outside panels
            el.disabled = !!disabled;
        });
    }

    function showStatus(msg, isError) {
        if (!statusEl) return;
        statusEl.hidden = false;
        statusEl.textContent = msg;
        statusEl.classList.toggle('is-error', !!isError);
        statusEl.classList.toggle('is-ok', !isError);
    }

    function clearStatus() {
        if (!statusEl) return;
        statusEl.hidden = true;
        statusEl.textContent = '';
        statusEl.classList.remove('is-error', 'is-ok');
    }

    function syncMode() {
        var isQuote = mode() === 'quote';
        if (infoPanel) {
            infoPanel.hidden = isQuote;
            setPanelInputsDisabled(infoPanel, isQuote);
        }
        if (quotePanel) {
            quotePanel.hidden = !isQuote;
            setPanelInputsDisabled(quotePanel, !isQuote);
        }
        if (isQuote) {
            setStep(1);
        }
        syncRecaptchaVisibility();
        clearStatus();
    }

    function setStep(n) {
        step = n;
        if (stepField) stepField.value = String(step);
        if (stepLabel) stepLabel.textContent = stepTitles[step] || '';
        modal.querySelectorAll('[data-quote-step]').forEach(function (el) {
            var s = Number(el.getAttribute('data-quote-step'));
            el.hidden = s !== step;
            el.querySelectorAll('input, select, textarea').forEach(function (input) {
                // Only disable fields on hidden steps when quote mode is active
                if (mode() === 'quote') {
                    input.disabled = s !== step && s !== 3 ? false : false;
                }
            });
            // Enable all quote step fields for submission on final send; only hide visuals
            if (mode() === 'quote') {
                el.querySelectorAll('input, select, textarea').forEach(function (input) {
                    input.disabled = false;
                });
            }
        });
        if (backBtn) backBtn.hidden = step === 1;
        if (nextBtn) nextBtn.hidden = step === 3;
        if (submitBtn) submitBtn.hidden = step !== 3;
        if (step === 3) fillReview();
        // On steps 1-2, disable step-3 privacy so information validation doesn't clash — privacy only required on send
        var qPrivacy = document.getElementById('q_privacy');
        if (qPrivacy) qPrivacy.disabled = step !== 3;
        syncRecaptchaVisibility();
    }

    function fieldVal(id) {
        var el = document.getElementById(id);
        return el ? (el.value || '').trim() : '';
    }

    function fillReview() {
        if (!reviewEl) return;
        var rows = [
            ['Name', fieldVal('q_name')],
            ['Company', fieldVal('q_company')],
            ['Address', fieldVal('q_address')],
            ['Email', fieldVal('q_email')],
            ['Phone', fieldVal('q_phone')],
            ['Service', fieldVal('q_service')],
            ['Origin', fieldVal('q_origin')],
            ['Destination', fieldVal('q_destination')],
            ['Vessel', fieldVal('q_vessel')],
            ['Urgency', fieldVal('q_urgency')],
            ['Cargo', fieldVal('q_cargo')],
        ];
        reviewEl.innerHTML = rows.map(function (r) {
            return '<div class="mc-quote__review-row"><span>' + escapeHtml(r[0]) + '</span><strong>' + escapeHtml(r[1] || '—') + '</strong></div>';
        }).join('');
    }

    function escapeHtml(s) {
        return String(s)
            .replace(/&/g, '&amp;')
            .replace(/</g, '&lt;')
            .replace(/>/g, '&gt;')
            .replace(/"/g, '&quot;');
    }

    function validateInfo() {
        var name = fieldVal('info_name');
        var email = fieldVal('info_email');
        var phone = fieldVal('info_phone');
        var privacy = document.getElementById('info_privacy');
        if (!name) return 'Please enter your name.';
        if (!email || !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) return 'Please enter a valid email.';
        if (!phone) return 'Please enter your phone number.';
        if (!privacy || !privacy.checked) return 'Please agree to the privacy policy.';
        if (hasRecaptcha() && !getRecaptchaToken()) return 'Please complete the reCAPTCHA.';
        return '';
    }

    function validateStep(n) {
        if (n === 1) {
            if (!fieldVal('q_name')) return 'Please enter your name.';
            if (!fieldVal('q_company')) return 'Please enter your company.';
            if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(fieldVal('q_email'))) return 'Please enter a valid email.';
            if (!fieldVal('q_phone')) return 'Please enter your phone number.';
        }
        if (n === 2) {
            if (!fieldVal('q_service')) return 'Please select a service.';
            if (!fieldVal('q_origin')) return 'Please enter origin / port.';
            if (!fieldVal('q_destination')) return 'Please enter destination / port.';
            if (!fieldVal('q_cargo')) return 'Please describe your cargo / commodity.';
        }
        if (n === 3) {
            var p = document.getElementById('q_privacy');
            if (!p || !p.checked) return 'Please agree to the privacy policy.';
            if (hasRecaptcha() && !getRecaptchaToken()) return 'Please complete the reCAPTCHA.';
        }
        return '';
    }

    function openModal(preferredMode) {
        if (typeof window.mcLoadRecaptcha === 'function') {
            window.mcLoadRecaptcha();
        }
        lastFocus = document.activeElement;
        modal.hidden = false;
        modal.setAttribute('aria-hidden', 'false');
        document.documentElement.classList.add('mc-quote-open');
        if (preferredMode === 'quote' || preferredMode === 'information') {
            var radio = form.querySelector('input[name="request_type"][value="' + preferredMode + '"]');
            if (radio) radio.checked = true;
        }
        syncMode();
        clearStatus();
        setTimeout(function () {
            var first = modal.querySelector('input[name="request_type"]:checked') || modal.querySelector('input, button');
            if (first) first.focus();
        }, 30);
    }

    function closeModal() {
        modal.hidden = true;
        modal.setAttribute('aria-hidden', 'true');
        document.documentElement.classList.remove('mc-quote-open');
        clearStatus();
        if (lastFocus && lastFocus.focus) lastFocus.focus();
    }

    openers.forEach(function (btn) {
        btn.addEventListener('click', function (e) {
            e.preventDefault();
            openModal(btn.getAttribute('data-open-quote') || 'information');
        });
    });

    // Close only via explicit close control — not backdrop / outside click
    modal.querySelectorAll('[data-quote-close]').forEach(function (el) {
        el.addEventListener('click', function (e) {
            e.preventDefault();
            e.stopPropagation();
            closeModal();
        });
    });

    document.addEventListener('keydown', function (e) {
        if (e.key === 'Escape' && !modal.hidden) closeModal();
    });

    form.querySelectorAll('input[name="request_type"]').forEach(function (radio) {
        radio.addEventListener('change', syncMode);
    });

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            var err = validateStep(step);
            if (err) {
                showStatus(err, true);
                return;
            }
            clearStatus();
            setStep(Math.min(3, step + 1));
        });
    }

    if (backBtn) {
        backBtn.addEventListener('click', function () {
            clearStatus();
            setStep(Math.max(1, step - 1));
        });
    }

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        clearStatus();

        if (mode() === 'information') {
            var iErr = validateInfo();
            if (iErr) {
                showStatus(iErr, true);
                return;
            }
        } else {
            // Ensure all quote steps filled
            for (var s = 1; s <= 3; s++) {
                var qErr = validateStep(s);
                if (qErr) {
                    setStep(s);
                    showStatus(qErr, true);
                    return;
                }
            }
            // Re-enable all quote fields for payload
            setStep(3);
        }

        var fd = new FormData(form);
        var captchaToken = getRecaptchaToken();
        if (captchaToken) {
            fd.set('g-recaptcha-response', captchaToken);
        }
        // Strip disabled / irrelevant fields already handled by disabled attrs
        var btn = mode() === 'information'
            ? form.querySelector('[data-mode-panel="information"] button[type="submit"]')
            : submitBtn;
        if (btn) btn.disabled = true;

        fetch(form.action, {
            method: 'POST',
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'Accept': 'application/json',
                'X-CSRF-TOKEN': (form.querySelector('input[name="_token"]') || {}).value || '',
            },
            body: fd,
        })
            .then(function (res) {
                return res.json().then(function (data) {
                    return { ok: res.ok, status: res.status, data: data };
                }).catch(function () {
                    return { ok: res.ok, status: res.status, data: {} };
                });
            })
            .then(function (result) {
                if (btn) btn.disabled = false;
                if (result.ok && result.data && result.data.ok) {
                    showStatus(result.data.message || 'Thank you. We will respond within one business day.', false);
                    form.reset();
                    resetRecaptcha();
                    // restore default mode radio after reset
                    var infoRadio = form.querySelector('input[name="request_type"][value="information"]');
                    if (infoRadio) infoRadio.checked = true;
                    syncMode();
                    setTimeout(closeModal, 1800);
                    return;
                }
                resetRecaptcha();
                if (result.data && result.data.errors) {
                    var first = Object.values(result.data.errors)[0];
                    showStatus(Array.isArray(first) ? first[0] : String(first), true);
                    return;
                }
                showStatus('Something went wrong. Please try again or email ops@marinecaddie.com.', true);
            })
            .catch(function () {
                if (btn) btn.disabled = false;
                resetRecaptcha();
                showStatus('Network error. Please try again.', true);
            });
    });

    // Deep-link: /contact?quote=1 or #get-quote
    if (window.location.hash === '#get-quote' || /[?&]quote=1(?:&|$)/.test(window.location.search)) {
        openModal(/[?&]mode=quote/.test(window.location.search) ? 'quote' : 'information');
    }

    syncMode();
})();
