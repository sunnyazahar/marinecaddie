<?php

return [

    'legal_name' => 'MarineCaddie Shipping LLC',
    'brand' => 'MarineCaddie',
    'tagline' => 'Smart Caddies, Smarter Logistics!',
    'headline' => 'Your trusted maritime logistics caddies.',
    'motto' => 'Leave the Logistics to Us, Keep Your Fleet Moving.',

    'email' => 'ops@marinecaddie.com',
    'phone' => '+971 50 5643375',
    'phone_display' => '+971 50 5643375',
    'phone_tel' => '+971505643375',
    'website' => 'https://www.marinecaddie.com',

    'address' => [
        'line1' => 'Unit No. 204 – 224, Al Safi Building, Tower 1',
        'line2' => 'Deira, Dubai, United Arab Emirates',
        'short' => 'Deira, Dubai, UAE',
    ],

    'who_we_are' => 'We are a specialized marine logistics and freight forwarding company providing time-critical ship spare logistics, customs clearance, vessel husbandry, transportation, and end-to-end maritime support services across global ports.',

    'mission' => 'To provide reliable, innovative, and time-critical maritime logistics solutions that keep vessels operating efficiently while delivering exceptional customer service worldwide.',

    'vision' => 'To become the most trusted global maritime logistics partner, recognized for operational excellence, customer satisfaction, and innovative logistics solutions.',

    'presence' => 'Dubai (UAE) | India | China | Singapore | South Korea | Vietnam | Sri Lanka | UK | Italy | Africa | Netherlands | Germany | USA',

    'port_husbandry_regions' => 'India, Sri Lanka, Indonesia & Singapore',

    'services' => [
        'marine_logistics' => [
            'title' => 'Marine Logistics',
            'excerpt' => 'End-to-end vessel support—from ship spares and onboard delivery to agency, husbandry, crew, and port coordination.',
            'image' => 'assets/img/services/service-01.jpg',
            'route' => 'services.logistic-solution',
            'items' => [
                'Ship Spares Logistics',
                'Onboard Delivery',
                'Ship Agency Support',
                'Vessel Husbandry',
                'Crew Logistics',
                'Port Coordination',
            ],
        ],
        'freight_forwarding' => [
            'title' => 'Freight Forwarding',
            'excerpt' => 'Air, ocean, and road moves with express courier, hand carry, and multimodal options built for maritime urgency.',
            'image' => 'assets/img/services/service-03.jpg',
            'route' => 'services.ocean-freight',
            'items' => [
                'Air Freight',
                'Ocean Freight',
                'Road Transportation',
                'Express Courier',
                'Hand Carry',
                'Multimodal Transport',
            ],
        ],
        'customs_clearance' => [
            'title' => 'Customs Clearance',
            'excerpt' => 'TP/trans-shipment, import and export clearance, duty exemption support, and practical customs consulting.',
            'image' => 'assets/img/services/service-04.jpg',
            'route' => 'services.warehousing',
            'items' => [
                'TP Trans-shipment Clearance',
                'Import Clearance',
                'Export Clearance',
                'Duty Exemption',
                'Customs Consulting',
            ],
        ],
        'special_projects' => [
            'title' => 'Special Projects',
            'excerpt' => 'Complex and out-of-gauge moves—OOG, dangerous goods, heavy lift, break bulk, and project cargo handling.',
            'image' => 'assets/img/services/service-06.jpg',
            'route' => 'contact',
            'items' => [
                'OOG Cargo',
                'Dangerous Goods',
                'Heavy Lift',
                'Break Bulk',
                'Project Cargo',
            ],
        ],
    ],

    /*
    | Detail service pages (legacy freight URLs remapped to maritime offerings).
    */
    'service_pages' => [
        [
            'title' => 'Air Freight',
            'excerpt' => 'Time-critical air freight with express courier and hand-carry options.',
            'route' => 'services.air-freight',
            'image' => 'assets/img/services/service-01.jpg',
        ],
        [
            'title' => 'Road Transportation',
            'excerpt' => 'Port-to-warehouse and last-mile road moves for vessel delivery points.',
            'route' => 'services.road-freight',
            'image' => 'assets/img/services/service-02.jpg',
        ],
        [
            'title' => 'Ocean Freight',
            'excerpt' => 'FCL, LCL, and multimodal ocean lanes aligned to vessel schedules.',
            'route' => 'services.ocean-freight',
            'image' => 'assets/img/services/service-03.jpg',
        ],
        [
            'title' => 'Customs Clearance',
            'excerpt' => 'TP/trans-shipment, import/export clearance, and duty exemption support.',
            'route' => 'services.warehousing',
            'image' => 'assets/img/services/service-04.jpg',
        ],
        [
            'title' => 'Ship Spares Logistics',
            'excerpt' => '24/7 door-to-deck spare parts logistics with customs and last-mile support.',
            'route' => 'services.logistic-solution',
            'image' => 'assets/img/services/service-05.jpg',
        ],
        [
            'title' => 'Vessel Husbandry / Port Support',
            'excerpt' => 'Port agency and husbandry across India, Sri Lanka, Indonesia & Singapore.',
            'route' => 'services.rail-freight',
            'image' => 'assets/img/services/service-06.jpg',
        ],
    ],

    'port_husbandry' => [
        'Port Agency',
        'Crew Change / Sign-on, Sign-off',
        'Immigration',
        'Visa Assistance',
        'Launch Boat / Crew Boats',
        'Fresh Water Supply',
        'Bunkering Coordination',
        'Cash to Master',
        'Medical Assistance',
        'Ship Chandling',
        'Repairs Coordination',
        'Dry Dock Assistance',
    ],

    'ship_spare_logistics' => [
        '24/7 Operations',
        'Time Critical Shipments',
        'Hand Carry',
        'Door-to-Deck Delivery',
        'Customs Clearance',
        'Last Mile Delivery',
    ],

    'ship_spare_flow' => [
        ['label' => 'Supplier', 'icon' => 'supplier'],
        ['label' => 'Collection', 'icon' => 'collection'],
        ['label' => 'Hub/WH', 'icon' => 'hub-wh'],
        ['label' => 'Documentation', 'icon' => 'documentation'],
        ['label' => 'Customs', 'icon' => 'customs'],
        ['label' => 'Carrier', 'icon' => 'carrier'],
        ['label' => 'Hub/WH', 'icon' => 'hub-wh'],
        ['label' => 'Delivery', 'icon' => 'delivery'],
        ['label' => 'On Board', 'icon' => 'on-board'],
        ['label' => 'POD', 'icon' => 'pod'],
    ],

    'why_choose_us' => [
        [
            'title' => 'Responsive',
            'text' => '24/7 fast coordination and timely updates for any enquiry-related requirements.',
        ],
        [
            'title' => 'Global Reach',
            'text' => 'Support through a network spanning key maritime and commercial locations.',
        ],
        [
            'title' => 'Operational Focus',
            'text' => 'Experienced operations team with attention to documentation, routing, delivery, and local coordination.',
        ],
        [
            'title' => 'IT System',
            'text' => 'Online portal and app for easy stock management, reporting, shipment oversight, and tracking.',
        ],
        [
            'title' => 'Cost Effective Solutions',
            'text' => 'Delivering exceptional value through smart logistics planning, operational efficiency, and transparent pricing for every shipment and vessel call.',
        ],
        [
            'title' => 'Customer First',
            'text' => 'Solutions designed around vessel schedules, urgency, and practical constraints.',
        ],
    ],

];
