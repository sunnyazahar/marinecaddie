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
        var quoteStep = quotePanel && quotePanel.querySelector('[data-quote-step="3"]');
        if (quoteStep) {
            quoteStep.appendChild(recaptchaWrap);
        }
        recaptchaWrap.hidden = step !== 3;
        if (step !== 3) clearRecaptchaError();
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

    var namePattern = /^[\p{L}\p{M}][\p{L}\p{M}\s.'-]{1,119}$/u;
    var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]{2,}$/;

    function clearFieldError(input) {
        if (!input) return;
        input.classList.remove('is-invalid');
        input.removeAttribute('aria-invalid');
        var wrap = input.closest('.mc-quote__field, label, .mc-recaptcha') || input.parentElement;
        if (!wrap) return;
        var error = wrap.querySelector(':scope > .mc-field-error');
        if (error) error.remove();
    }

    function showFieldError(input, message) {
        clearFieldError(input);
        if (!input) return;
        input.classList.add('is-invalid');
        input.setAttribute('aria-invalid', 'true');
        var wrap = input.closest('.mc-quote__field, label') || input.parentElement;
        var el = document.createElement('div');
        el.className = 'mc-field-error';
        el.setAttribute('role', 'alert');
        el.textContent = message;
        wrap.appendChild(el);
    }

    function clearRecaptchaError() {
        if (!recaptchaWrap) return;
        var error = recaptchaWrap.querySelector('.mc-field-error');
        if (error) error.remove();
    }

    function showRecaptchaError(message) {
        clearRecaptchaError();
        if (!recaptchaWrap) {
            showStatus(message, true);
            return;
        }
        var el = document.createElement('div');
        el.className = 'mc-field-error';
        el.setAttribute('role', 'alert');
        el.textContent = message;
        recaptchaWrap.appendChild(el);
        showStatus(message, true);
        recaptchaWrap.scrollIntoView({ block: 'nearest' });
    }

    function checkField(id, message) {
        var input = document.getElementById(id);
        if (!input) return null;
        if (message) {
            showFieldError(input, message);
            return input;
        }
        clearFieldError(input);
        return null;
    }

    function nameMessage(value) {
        if (!value) return 'Please enter your name.';
        if (value.length < 2) return 'Name must be at least 2 characters.';
        if (!namePattern.test(value)) return 'Please enter a valid name (letters only).';
        return '';
    }

    function emailMessage(value) {
        if (!value) return 'Please enter your email address.';
        if (!emailPattern.test(value)) return 'Please enter a valid email address.';
        return '';
    }

    function phoneMessage(value, required) {
        if (!value) return required ? 'Please enter your phone number.' : '';
        var digits = value.replace(/\D/g, '');
        if (!/^[0-9+\s().-]+$/.test(value) || digits.length < 7 || digits.length > 15) {
            return 'Please enter a valid contact number.';
        }
        return '';
    }

    function textMessage(value, emptyText, min) {
        if (!value) return emptyText;
        if (min && value.length < min) return emptyText;
        return '';
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

    function validateInfo(includeCaptcha) {
        var first = null;
        function mark(id, message) {
            var invalid = checkField(id, message);
            if (invalid && !first) first = invalid;
        }
        mark('info_name', nameMessage(fieldVal('info_name')));
        mark('info_email', emailMessage(fieldVal('info_email')));
        mark('info_phone', phoneMessage(fieldVal('info_phone'), true));
        var privacy = document.getElementById('info_privacy');
        if (privacy) {
            if (!privacy.checked) {
                showFieldError(privacy, 'Please agree to the privacy policy.');
                if (!first) first = privacy;
            } else {
                clearFieldError(privacy);
            }
        }
        if (first) return first;
        if (includeCaptcha && hasRecaptcha() && !getRecaptchaToken()) {
            showRecaptchaError('Please complete the reCAPTCHA verification.');
            return recaptchaWrap;
        }
        clearRecaptchaError();
        return null;
    }

    function validateStep(n, includeCaptcha) {
        var first = null;
        function mark(id, message) {
            var invalid = checkField(id, message);
            if (invalid && !first) first = invalid;
        }
        if (n === 1) {
            mark('q_name', nameMessage(fieldVal('q_name')));
            mark('q_company', textMessage(fieldVal('q_company'), 'Please enter your company.', 2));
            mark('q_email', emailMessage(fieldVal('q_email')));
            mark('q_phone', phoneMessage(fieldVal('q_phone'), true));
        }
        if (n === 2) {
            mark('q_service', textMessage(fieldVal('q_service'), 'Please select a service.'));
            mark('q_origin', textMessage(fieldVal('q_origin'), 'Please enter origin / port.', 2));
            mark('q_destination', textMessage(fieldVal('q_destination'), 'Please enter destination / port.', 2));
            mark('q_cargo', textMessage(fieldVal('q_cargo'), 'Please describe your cargo / commodity.', 10));
        }
        if (n === 3) {
            var privacy = document.getElementById('q_privacy');
            if (privacy) {
                if (!privacy.checked) {
                    showFieldError(privacy, 'Please agree to the privacy policy.');
                    if (!first) first = privacy;
                } else {
                    clearFieldError(privacy);
                }
            }
        }
        if (first) return first;
        if (includeCaptcha && n === 3 && hasRecaptcha() && !getRecaptchaToken()) {
            showRecaptchaError('Please complete the reCAPTCHA verification.');
            return recaptchaWrap;
        }
        if (n === 3) clearRecaptchaError();
        return null;
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

    form.addEventListener('input', function (e) {
        var input = e.target;
        if (!input || !input.id || !input.classList || !input.classList.contains('is-invalid')) return;
        if (mode() === 'quote') validateStep(step, false);
        else validateInfo(false);
    });

    if (nextBtn) {
        nextBtn.addEventListener('click', function () {
            clearStatus();
            clearRecaptchaError();
            var invalid = validateStep(step, false);
            if (invalid) {
                showStatus('Please correct the highlighted fields.', true);
                if (invalid.focus) invalid.focus();
                return;
            }
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
        e.stopImmediatePropagation();
        clearStatus();

        if (mode() === 'information') {
            var iErr = validateInfo(true);
            if (iErr) {
                if (iErr !== recaptchaWrap) showStatus('Please correct the highlighted fields.', true);
                if (iErr.focus) iErr.focus();
                return;
            }
        } else {
            for (var s = 1; s <= 3; s++) {
                var qErr = validateStep(s, s === 3);
                if (qErr) {
                    setStep(s);
                    if (qErr !== recaptchaWrap) showStatus('Please correct the highlighted fields.', true);
                    if (qErr.focus) qErr.focus();
                    return;
                }
            }
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

    function enhanceSelect(select) {
        if (!select || select.dataset.select2Ready) return;
        select.dataset.select2Ready = '1';
        select.classList.add('mc-select-native');

        var options = Array.prototype.filter.call(select.options, function (opt) {
            return opt.value !== '';
        }).map(function (opt) {
            return { value: opt.value, label: opt.text };
        }).sort(function (a, b) {
            return a.label.localeCompare(b.label, undefined, { sensitivity: 'base' });
        });

        var root = document.createElement('div');
        root.className = 'mc-select2';
        root.innerHTML = '<button type="button" class="mc-select2__control" aria-haspopup="listbox" aria-expanded="false"><span class="mc-select2__rendered"></span><span class="mc-select2__arrow" aria-hidden="true"></span></button><div class="mc-select2__dropdown" hidden><input type="search" class="mc-select2__search" autocomplete="off" placeholder="Search"><ul class="mc-select2__results" role="listbox"></ul></div>';
        select.insertAdjacentElement('afterend', root);

        var control = root.querySelector('.mc-select2__control');
        var rendered = root.querySelector('.mc-select2__rendered');
        var dropdown = root.querySelector('.mc-select2__dropdown');
        var search = root.querySelector('.mc-select2__search');
        var list = root.querySelector('.mc-select2__results');
        var placeholder = (select.querySelector('option[value=""]') || {}).text || 'Select';

        function paint() {
            var selected = options.filter(function (opt) { return opt.value === select.value; })[0];
            rendered.textContent = selected ? selected.label : placeholder;
            rendered.classList.toggle('is-placeholder', !selected);
        }

        function render(query) {
            var q = (query || '').toLowerCase();
            var matches = options.filter(function (opt) {
                return opt.label.toLowerCase().indexOf(q) !== -1;
            });
            list.innerHTML = '';
            if (!matches.length) {
                list.innerHTML = '<li class="mc-select2__empty">No matches</li>';
                return;
            }
            matches.forEach(function (opt) {
                var item = document.createElement('li');
                item.className = 'mc-select2__option' + (opt.value === select.value ? ' is-active' : '');
                item.setAttribute('role', 'option');
                item.textContent = opt.label;
                item.addEventListener('mousedown', function (e) {
                    e.preventDefault();
                    select.value = opt.value;
                    select.dispatchEvent(new Event('input', { bubbles: true }));
                    select.dispatchEvent(new Event('change', { bubbles: true }));
                    paint();
                    close();
                });
                list.appendChild(item);
            });
        }

        function place() {
            var rect = control.getBoundingClientRect();
            dropdown.style.left = rect.left + 'px';
            dropdown.style.width = rect.width + 'px';
            dropdown.style.top = (rect.bottom + 4) + 'px';
        }

        function open() {
            if (select.disabled) return;
            document.querySelectorAll('.mc-select2.is-open').forEach(function (openRoot) {
                if (openRoot !== root) {
                    openRoot.classList.remove('is-open');
                    var panel = openRoot.querySelector('.mc-select2__dropdown');
                    if (panel) panel.hidden = true;
                }
            });
            root.classList.add('is-open');
            dropdown.hidden = false;
            control.setAttribute('aria-expanded', 'true');
            search.value = '';
            render('');
            place();
            setTimeout(function () { search.focus(); }, 0);
        }

        function close() {
            root.classList.remove('is-open');
            dropdown.hidden = true;
            control.setAttribute('aria-expanded', 'false');
        }

        control.addEventListener('click', function () {
            if (root.classList.contains('is-open')) close();
            else open();
        });
        search.addEventListener('input', function () {
            render(search.value);
        });
        select.addEventListener('change', paint);
        select.addEventListener('focus', function () {
            control.focus();
        });
        document.addEventListener('mousedown', function (e) {
            if (!root.contains(e.target) && !dropdown.contains(e.target)) close();
        });
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape') close();
        });
        window.addEventListener('resize', function () {
            if (!dropdown.hidden) place();
        });
        var scroller = select.closest('.mc-quote__dialog');
        if (scroller) {
            scroller.addEventListener('scroll', function () {
                if (!dropdown.hidden) place();
            });
        }
        form.addEventListener('reset', function () {
            setTimeout(paint, 0);
        });
        paint();
    }

    ['q_service', 'q_urgency'].forEach(function (id) {
        enhanceSelect(document.getElementById(id));
    });

    // Deep-link: /contact?quote=1 or #get-quote
    if (window.location.hash === '#get-quote' || /[?&]quote=1(?:&|$)/.test(window.location.search)) {
        openModal(/[?&]mode=quote/.test(window.location.search) ? 'quote' : 'information');
    }

    syncMode();
})();
