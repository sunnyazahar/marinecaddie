@php
    $privacyUrl = route('privacy-policy');
    $quoteServices = [
        'Ship Spares Logistics',
        'Onboard Delivery',
        'Ship Agency Support',
        'Vessel Husbandry',
        'Air Freight',
        'Ocean Freight',
        'Road Transportation',
        'Customs Clearance',
        'Project Cargo / OOG',
        'Other / Multi-service',
    ];
@endphp

<div class="mc-quote" id="mcQuoteModal" hidden aria-hidden="true">
    <div class="mc-quote__backdrop" tabindex="-1" aria-hidden="true"></div>
    <div class="mc-quote__dialog" role="dialog" aria-modal="true" aria-labelledby="mcQuoteTitle">
        <button type="button" class="mc-quote__close" data-quote-close aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>

        <h2 class="mc-quote__title visually-hidden" id="mcQuoteTitle">Get a quote or request information</h2>

        <form class="mc-quote__form" id="mcQuoteForm" action="{{ route('quote.store') }}" method="post" novalidate>
            @csrf
            <input type="hidden" name="quote_step" id="mcQuoteStepField" value="1">

            <div class="mc-quote__mode" role="radiogroup" aria-label="Request type">
                <label class="mc-quote__mode-item">
                    <input type="radio" name="request_type" value="information" checked>
                    <span class="mc-quote__mode-ui"></span>
                    <span class="mc-quote__mode-label">I require information</span>
                </label>
                <label class="mc-quote__mode-item">
                    <input type="radio" name="request_type" value="quote">
                    <span class="mc-quote__mode-ui"></span>
                    <span class="mc-quote__mode-label">I require a quote</span>
                </label>
            </div>

            {{-- Information (single step) --}}
            <div class="mc-quote__panel" data-mode-panel="information">
                <div class="mc-quote__grid">
                    <div class="mc-quote__field">
                        <label for="info_name">Name <span class="mc-quote__req">*</span></label>
                        <input id="info_name" name="name" type="text" autocomplete="name">
                    </div>
                    <div class="mc-quote__field">
                        <label for="info_company">Company</label>
                        <input id="info_company" name="company" type="text" autocomplete="organization">
                    </div>
                    <div class="mc-quote__field">
                        <label for="info_email">E-mail <span class="mc-quote__req">*</span></label>
                        <input id="info_email" name="email" type="email" autocomplete="email">
                    </div>
                    <div class="mc-quote__field">
                        <label for="info_phone">Phone number <span class="mc-quote__req">*</span></label>
                        <input id="info_phone" name="phone" type="tel" autocomplete="tel">
                    </div>
                    <div class="mc-quote__field mc-quote__field--full">
                        <label for="info_remarks">Remarks</label>
                        <textarea id="info_remarks" name="remarks" rows="5" placeholder="Anything you can add?"></textarea>
                    </div>
                </div>

                <div class="mc-quote__footer mc-quote__footer--info">
                    <div class="mc-quote__footer-copy">
                        <p class="mc-quote__promise">We will respond within one business day.</p>
                        <label class="mc-quote__consent">
                            <input type="checkbox" name="privacy" value="1" id="info_privacy">
                            <span>By clicking on this button, you agree with our <a href="{{ $privacyUrl }}" target="_blank" rel="noopener">privacy policy</a> that complies with the GDPR.</span>
                        </label>
                    </div>
                    <button type="submit" class="mc-quote__btn">Send</button>
                </div>
            </div>

            {{-- Quote (3 steps) --}}
            <div class="mc-quote__panel" data-mode-panel="quote" hidden>
                <p class="mc-quote__step-label" data-quote-step-label>Step 1 of 3 - Personal information</p>

                <div class="mc-quote__step" data-quote-step="1">
                    <div class="mc-quote__grid">
                        <div class="mc-quote__field">
                            <label for="q_name">Name <span class="mc-quote__req">*</span></label>
                            <input id="q_name" name="q_name" type="text" placeholder="Your name" autocomplete="name">
                        </div>
                        <div class="mc-quote__field">
                            <label for="q_company">Company <span class="mc-quote__req">*</span></label>
                            <input id="q_company" name="q_company" type="text" placeholder="Your company" autocomplete="organization">
                        </div>
                        <div class="mc-quote__field mc-quote__field--full">
                            <label for="q_address">Address</label>
                            <input id="q_address" name="q_address" type="text" placeholder="Your address" autocomplete="street-address">
                        </div>
                        <div class="mc-quote__field">
                            <label for="q_email">Email <span class="mc-quote__req">*</span></label>
                            <input id="q_email" name="q_email" type="email" placeholder="Your email" autocomplete="email">
                        </div>
                        <div class="mc-quote__field">
                            <label for="q_phone">Phone number <span class="mc-quote__req">*</span></label>
                            <input id="q_phone" name="q_phone" type="tel" placeholder="Your phone number" autocomplete="tel">
                        </div>
                    </div>
                </div>

                <div class="mc-quote__step" data-quote-step="2" hidden>
                    <div class="mc-quote__grid">
                        <div class="mc-quote__field mc-quote__field--full">
                            <label for="q_service">Service needed <span class="mc-quote__req">*</span></label>
                            <select id="q_service" name="q_service">
                                <option value="">Select a service</option>
                                @foreach($quoteServices as $svc)
                                    <option value="{{ $svc }}">{{ $svc }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mc-quote__field">
                            <label for="q_origin">Origin / Port <span class="mc-quote__req">*</span></label>
                            <input id="q_origin" name="q_origin" type="text" placeholder="e.g. Dubai, Singapore">
                        </div>
                        <div class="mc-quote__field">
                            <label for="q_destination">Destination / Port <span class="mc-quote__req">*</span></label>
                            <input id="q_destination" name="q_destination" type="text" placeholder="e.g. Rotterdam, Busan">
                        </div>
                        <div class="mc-quote__field">
                            <label for="q_vessel">Vessel name</label>
                            <input id="q_vessel" name="q_vessel" type="text" placeholder="Optional">
                        </div>
                        <div class="mc-quote__field">
                            <label for="q_urgency">Timing / urgency</label>
                            <select id="q_urgency" name="q_urgency">
                                <option value="">Select</option>
                                <option value="Standard">Standard</option>
                                <option value="Urgent">Urgent</option>
                                <option value="Time-critical / ASAP">Time-critical / ASAP</option>
                            </select>
                        </div>
                        <div class="mc-quote__field mc-quote__field--full">
                            <label for="q_cargo">Cargo / commodity details <span class="mc-quote__req">*</span></label>
                            <textarea id="q_cargo" name="q_cargo" rows="4" placeholder="Weight, dimensions, HS code, dangerous goods, etc."></textarea>
                        </div>
                    </div>
                </div>

                <div class="mc-quote__step" data-quote-step="3" hidden>
                    <div class="mc-quote__review" data-quote-review></div>
                    <div class="mc-quote__grid">
                        <div class="mc-quote__field mc-quote__field--full">
                            <label for="q_remarks">Additional remarks</label>
                            <textarea id="q_remarks" name="q_remarks" rows="4" placeholder="Anything else we should know?"></textarea>
                        </div>
                    </div>
                    <label class="mc-quote__consent mc-quote__consent--quote">
                        <input type="checkbox" name="q_privacy" value="1" id="q_privacy">
                        <span>By clicking on this button, you agree with our <a href="{{ $privacyUrl }}" target="_blank" rel="noopener">privacy policy</a> that complies with the GDPR.</span>
                    </label>
                </div>

                <div class="mc-quote__divider" aria-hidden="true"></div>

                <div class="mc-quote__footer mc-quote__footer--quote">
                    <button type="button" class="mc-quote__btn mc-quote__btn--ghost" data-quote-back hidden>Back</button>
                    <button type="button" class="mc-quote__btn" data-quote-next>Next</button>
                    <button type="submit" class="mc-quote__btn" data-quote-submit hidden>Send</button>
                </div>
            </div>

            <div class="mc-quote__recaptcha-wrap" data-quote-recaptcha>
                @include('partials.recaptcha', ['id' => 'mcQuoteRecaptcha'])
            </div>

            <div class="mc-quote__status" data-quote-status hidden role="status" aria-live="polite"></div>
        </form>
    </div>
</div>
