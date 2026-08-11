<footer class="mc-footer">
    <div class="container">
        <div class="mc-footer__grid">
            <div class="mc-footer__brand-col">
                <a href="{{ route('home') }}" class="mc-footer__logo-link">
                    <img
                        src="{{ theme_asset('assets/img/logos/logo.svg') }}?v=footerorig1"
                        class="mc-footer__logo"
                        alt="MarineCaddie"
                        title="MarineCaddie"
                    >
                </a>
                <p class="mc-footer__about">Specialized marine logistics and freight forwarding—ship spares, customs clearance, vessel husbandry, and port support worldwide. From port-to-port to door-to-deck, we keep vessels moving on schedule.</p>
            </div>

            <div class="mc-footer__col">
                <h3 class="mc-footer__heading">Main Links</h3>
                <ul class="mc-footer__links">
                    <li><a href="{{ route('about') }}">About Us</a></li>
                    <li><a href="{{ route('mission-vision') }}">Mission &amp; Vision</a></li>
                    <li><a href="{{ route('how-we-work') }}">How We Work</a></li>
                    <li><a href="{{ route('contact') }}">Contact Us</a></li>
                    <li><a href="{{ route('faq') }}">FAQ</a></li>
                </ul>
            </div>

            <div class="mc-footer__col">
                <h3 class="mc-footer__heading">Our Services</h3>
                <ul class="mc-footer__links">
                    <li><a href="{{ route('services.show', 'ocean-freight') }}">Ocean Freight</a></li>
                    <li><a href="{{ route('services.show', 'air-freight') }}">Air Freight</a></li>
                    <li><a href="{{ route('services.show', 'road-transportation') }}">Road Freight</a></li>
                    <li><a href="{{ route('services.show', 'import-clearance') }}">Customs Clearance</a></li>
                </ul>
            </div>

            <div class="mc-footer__col">
                <h3 class="mc-footer__heading mc-footer__heading--ghost" aria-hidden="true">&nbsp;</h3>
                <ul class="mc-footer__links">
                    <li><a href="{{ route('services.show', 'ship-spares-logistics') }}">Ship Spares Logistics</a></li>
                    <li><a href="{{ route('services.show', 'vessel-husbandry') }}">Vessel Husbandry</a></li>
                </ul>
                <div class="mc-footer__follow">
                    <span class="mc-footer__follow-label">Follow Us On:</span>
                    <a href="{{ route('home') }}#" class="mc-footer__social-link" aria-label="LinkedIn">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="mc-footer__bar">
        <div class="container">
            <p class="mb-0">Copyright © <span class="current-year">2026</span> {{ config('company.legal_name') }}. All Rights Reserved.</p>
        </div>
    </div>
</footer>
