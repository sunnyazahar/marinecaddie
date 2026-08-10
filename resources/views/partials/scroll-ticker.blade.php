@php
    $phrases = $phrases ?? [
        'Ship Spare Logistics',
        'Vessel Husbandry',
        'Customs Clearance',
        'Air Ocean Road',
        'Door to Deck',
        '24/7 Operations',
        'Global Port Network',
        'Smart Caddies',
    ];
@endphp
@foreach($phrases as $phrase)
<div class="scroll-item scroll-text display-5 text-uppercase font-weight-800 me-5" data-text="{{ $phrase }}">{{ $phrase }}</div>
<div class="scroll-item with-img me-5" aria-hidden="true">
    <span class="scroll-sep">✱</span>
</div>
@endforeach
