<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Site Identity
    |--------------------------------------------------------------------------
    |
    | default_title: used when a page has no @section('meta_title').
    | Brand is appended automatically as: "{title} | {site_name}"
    |
    */

    'site_name' => 'MarineCaddie Shipping LLC',

    'default_title' => 'Marine Logistics & Ship Spares',

    'title_separator' => ' | ',

    /*
    |--------------------------------------------------------------------------
    | Homepage SERP (best final copy)
    |--------------------------------------------------------------------------
    |
    | Title ~55 chars · Description ~150–155 chars · one clear brand + benefit.
    |
    */

    'home_title' => 'Ship Spare Logistics & Marine Agency | MarineCaddie',

    'home_description' => 'MarineCaddie delivers time-critical ship spare logistics, port agency, vessel husbandry, freight & customs from Dubai—door-to-deck delivery worldwide.',

    /*
    | Fallback meta description for pages without their own @section.
    */
    'default_description' => 'MarineCaddie delivers time-critical ship spare logistics, port agency, vessel husbandry, freight & customs from Dubai—door-to-deck delivery worldwide.',

    /*
    |--------------------------------------------------------------------------
    | Keywords (editors only — not output as <meta name="keywords">)
    |--------------------------------------------------------------------------
    */

    'default_keywords' => [
        'marine logistics',
        'maritime logistics',
        'ship spare logistics',
        'ship agency',
        'port agency',
        'vessel husbandry',
        'port husbandry',
        'freight forwarding',
        'customs clearance',
        'door-to-deck delivery',
        'onboard delivery',
        'marine logistics Dubai',
        'ship spare logistics worldwide',
    ],

    /*
    |--------------------------------------------------------------------------
    | Social & Branding
    |--------------------------------------------------------------------------
    */

    'twitter_handle' => '@MarineCaddie',

    'og_image' => 'assets/img/banner/slide-01.webp',

    'og_image_width' => 1920,

    'og_image_height' => 1000,

    'theme_color' => '#042158',

    'url' => 'https://www.marinecaddie.com',

    'locale' => 'en_US',

    'language' => 'en',

    /*
    |--------------------------------------------------------------------------
    | Organization (JSON-LD)
    |--------------------------------------------------------------------------
    */

    'organization' => [

        'name' => 'MarineCaddie Shipping LLC',

        'legal_name' => 'MarineCaddie Shipping LLC',

        'url' => 'https://www.marinecaddie.com',

        'logo' => 'assets/img/logos/logo.svg',

        'email' => 'ops@marinecaddie.com',

        'telephone' => '+971-50-5643375',

        'description' => 'MarineCaddie Shipping LLC is a Dubai-based marine logistics partner for time-critical ship spare logistics, ship & port agency, vessel husbandry, freight forwarding, customs clearance, and door-to-deck delivery worldwide.',

        'same_as' => [
            'https://www.linkedin.com/company/marine/',
        ],

        'area_served' => 'Worldwide',

        'address' => [
            'streetAddress' => 'Unit No. 204 – 224, Al Safi Building, Tower 1',
            'addressLocality' => 'Deira',
            'addressRegion' => 'Dubai',
            'addressCountry' => 'AE',
            'postalCode' => '',
        ],

        'geo' => [
            'latitude' => 25.2727936,
            'longitude' => 55.3053340,
        ],

        'knows_about' => [
            'Marine logistics',
            'Maritime logistics',
            'Ship spare logistics',
            'Ship agency',
            'Port agency',
            'Vessel husbandry',
            'Port husbandry',
            'Customs clearance',
            'Freight forwarding',
            'Crew logistics',
            'Door-to-deck delivery',
            'Onboard delivery',
            'Special projects',
        ],
    ],

];
