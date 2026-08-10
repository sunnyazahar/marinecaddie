<footer class="mc-footer">
    <div class="mc-footer__glow" aria-hidden="true"></div>
    <div class="container position-relative">
        <div class="mc-footer__brand-row">
            <div class="mc-footer__brand">
                <a href="{{ route('home') }}" class="mc-footer__logo-link">
                    <img
                        src="{{ theme_asset('assets/img/logos/footer-light-logo.svg') }}?v=footerlight2"
                        class="mc-footer__logo"
                        alt="MarineCaddie"
                        title="MarineCaddie"
                    >
                </a>
                <p class="mc-footer__tagline">{{ config('company.tagline') }}</p>
            </div>
            <div class="mc-footer__closer">
                <p class="mc-footer__motto">{{ config('company.motto') }}</p>
                <a href="{{ route('contact') }}" class="butn-style01 mc-footer__cta">Contact Us</a>
            </div>
        </div>

        <div class="mc-footer__contact">
            <a href="tel:{{ config('company.phone_tel') }}" class="mc-footer__contact-item">
                <span class="mc-footer__contact-label">Phone</span>
                <span class="mc-footer__contact-value">{{ config('company.phone_display') }}</span>
            </a>
            <a href="mailto:{{ config('company.email') }}" class="mc-footer__contact-item">
                <span class="mc-footer__contact-label">Email</span>
                <span class="mc-footer__contact-value">{{ config('company.email') }}</span>
            </a>
            <div class="mc-footer__contact-item">
                <span class="mc-footer__contact-label">Office</span>
                <span class="mc-footer__contact-value">{{ config('company.address.short') }}</span>
            </div>
        </div>

        <div class="row mc-footer__columns gy-4">
            <div class="col-lg-4">
                <p class="mc-footer__about">Specialized marine logistics and freight forwarding—ship spares, customs clearance, vessel husbandry, and port support worldwide.</p>
                <p class="mc-footer__presence">{{ config('company.presence') }}</p>
                <div class="mc-footer__social">
                    <a href="{{ route('home') }}#" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
                    <a href="{{ route('home') }}#" aria-label="X"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="{{ route('home') }}#" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
                    <a href="{{ route('home') }}#" aria-label="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <h3 class="mc-footer__heading">Services</h3>
                <ul class="mc-footer__links">
                    <li><a href="{{ route('services') }}">Marine Logistics</a></li>
                    <li><a href="{{ route('services.logistic-solution') }}">Ship Spares</a></li>
                    <li><a href="{{ route('services.ocean-freight') }}">Ocean Freight</a></li>
                    <li><a href="{{ route('services.air-freight') }}">Air Freight</a></li>
                    <li><a href="{{ route('services.warehousing') }}">Customs Clearance</a></li>
                    <li><a href="{{ route('services.rail-freight') }}">Vessel Husbandry</a></li>
                </ul>
            </div>
            <div class="col-6 col-md-4 col-lg-3">
                <h3 class="mc-footer__heading">Company</h3>
                <ul class="mc-footer__links">
                    <li><a href="{{ route('about') }}">About</a></li>
                    <li><a href="{{ route('mission-vision') }}">Mission &amp; Vision</a></li>
                    <li><a href="{{ route('how-we-work') }}">How We Work</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                    <li><a href="{{ route('contact') }}">Contact</a></li>
                    <li><a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ route('terms') }}">Terms</a></li>
                </ul>
            </div>
            <div class="col-md-4 col-lg-3">
                <h3 class="mc-footer__heading">Visit</h3>
                <p class="mc-footer__address">{{ config('company.address.line1') }}<br>{{ config('company.address.line2') }}</p>
                <a href="{{ config('company.website') }}" class="mc-footer__web" target="_blank" rel="noopener">www.marinecaddie.com</a>
            </div>
        </div>
    </div>

    <div class="mc-footer__bar">
        <div class="container">
            <p class="mb-0">© <span class="current-year">2026</span> {{ config('company.legal_name') }}. All rights reserved.</p>
        </div>
    </div>
</footer>
