@php
    $name = $name ?? '';
    $size = $size ?? 'sm';

    $pngMap = [
        'marine_logistics' => 'vessel-husbandry.png',
        'freight_forwarding' => 'ocean-freight.png',
        'customs_clearance' => 'customs.png',
        'special_projects' => 'ship-spares.png',
        'Marine Logistics' => 'vessel-husbandry.png',
        'Freight Forwarding' => 'ocean-freight.png',
        'Customs Clearance' => 'customs.png',
        'Special Projects' => 'ship-spares.png',
        'Ship Spares Logistics' => 'ship-spares.png',
        'Onboard Delivery' => 'vessel-husbandry.png',
        'Ship Agency Support' => 'ocean-freight.png',
        'Vessel Husbandry' => 'vessel-husbandry.png',
        'Air Freight' => 'air-freight.png',
        'Ocean Freight' => 'ocean-freight.png',
        'Road Transportation' => 'road-freight.png',
        'Express Courier' => 'air-freight.png',
        'Hand Carry' => 'air-freight.png',
        'Multimodal Transport' => 'road-freight.png',
        'TP Trans-shipment Clearance' => 'customs.png',
        'Import Clearance' => 'customs.png',
        'Export Clearance' => 'customs.png',
        'Duty Exemption' => 'customs.png',
        'Customs Consulting' => 'customs.png',
        'Port Coordination' => 'warehouse.png',
    ];

    $svgMap = [
        'Crew Logistics' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="3"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a3 3 0 0 1 0 5.74"/></svg>',
        'OOG Cargo' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="8" width="18" height="10" rx="1"/><path d="M7 8V6a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2"/><path d="M3 13h18"/><path d="M8 18v2"/><path d="M16 18v2"/></svg>',
        'Dangerous Goods' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M10.3 3.9 1.8 18a2 2 0 0 0 1.7 3h17a2 2 0 0 0 1.7-3L13.7 3.9a2 2 0 0 0-3.4 0z"/><path d="M12 9v4"/><path d="M12 17h.01"/></svg>',
        'Heavy Lift' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M12 3v10"/><path d="m8 7 4-4 4 4"/><rect x="4" y="13" width="16" height="6" rx="1"/><path d="M8 19v2"/><path d="M16 19v2"/></svg>',
        'Break Bulk' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M21 8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16Z"/><path d="m3.3 7 8.7 5 8.7-5"/><path d="M12 22V12"/></svg>',
        'Project Cargo' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><path d="M2 20h20"/><path d="M5 20V10l7-5 7 5v10"/><path d="M9 20v-5h6v5"/></svg>',
    ];

    $png = $pngMap[$name] ?? null;
    $svg = $svgMap[$name] ?? '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="9"/><path d="M8 12h8"/><path d="M12 8v8"/></svg>';
@endphp
<span class="nav-mega-ico nav-mega-ico--{{ $size }}" aria-hidden="true">
    @if($png)
        <img src="{{ theme_asset('assets/img/nav-icons/' . $png) }}" alt="">
    @else
        {!! $svg !!}
    @endif
</span>
