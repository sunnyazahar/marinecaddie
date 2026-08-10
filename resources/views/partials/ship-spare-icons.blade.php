{{-- PDF-matched cyan line icons for ship spare logistics flow --}}
@php
    $icon = $icon ?? 'supplier';
    $c = '#5AD4EA';
@endphp
@switch($icon)
    {{-- Warehouse + pallet jack with stacked boxes (Supplier / Hub-WH) --}}
    @case('supplier')
    @case('hub-wh')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 72" aria-hidden="true" focusable="false">
            <g fill="none" stroke="{{ $c }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                {{-- Building --}}
                <path d="M18 62V30L44 12l26 18v32"/>
                <path d="M28 62V38h32v24"/>
                <path d="M36 62V46h16v16"/>
                {{-- Pallet jack + 3 boxes --}}
                <rect x="58" y="42" width="14" height="8" rx="0.5"/>
                <rect x="60" y="34" width="12" height="8" rx="0.5"/>
                <rect x="62" y="26" width="10" height="8" rx="0.5"/>
                <path d="M56 50h22"/>
                <path d="M58 50v6M74 50v6"/>
                <path d="M72 50h8v-4"/>
                <circle cx="78" cy="46" r="1.5" fill="{{ $c }}" stroke="none"/>
            </g>
        </svg>
        @break

    {{-- Person with cap carrying box + delivery van --}}
    @case('collection')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 72" aria-hidden="true" focusable="false">
            <g fill="none" stroke="{{ $c }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                {{-- Cap + head --}}
                <path d="M10 16h16l-2 4H12z"/>
                <circle cx="18" cy="24" r="6"/>
                {{-- Torso / arms holding box --}}
                <path d="M18 30v12"/>
                <rect x="10" y="32" width="16" height="12" rx="1"/>
                <path d="M12 44l6 10 8-6"/>
                {{-- Van (rear + side) --}}
                <path d="M40 46h42v14H40z"/>
                <path d="M52 32h24v14"/>
                <path d="M76 38h10l6 8v14H82"/>
                <path d="M82 46h10"/>
                <circle cx="52" cy="60" r="5"/>
                <circle cx="80" cy="60" r="5"/>
                <path d="M58 38h12"/>
            </g>
        </svg>
        @break

    {{-- Checklist document + pen --}}
    @case('documentation')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72" aria-hidden="true" focusable="false">
            <g fill="none" stroke="{{ $c }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <rect x="12" y="8" width="34" height="48" rx="2"/>
                <path d="M20 22h18"/>
                <path d="M20 32h18"/>
                <path d="M20 42h14"/>
                <path d="M18 22l3 3 6-6"/>
                <path d="M18 32l3 3 6-6"/>
                <path d="M18 42l3 3 6-6"/>
                {{-- Pen --}}
                <path d="M40 44l18 18"/>
                <path d="M52 56l8 2-2 8"/>
                <path d="M40 44l4 1 1 4"/>
            </g>
        </svg>
        @break

    {{-- Customs officer (peaked cap) + clipboard --}}
    @case('customs')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 72" aria-hidden="true" focusable="false">
            <g fill="none" stroke="{{ $c }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                {{-- Officer with peaked cap --}}
                <path d="M10 18h24l-3 5H13z"/>
                <path d="M14 18V14h16v4"/>
                <circle cx="22" cy="28" r="7"/>
                <path d="M22 35v8"/>
                <path d="M12 52c0-8 4-12 10-12s10 4 10 12"/>
                <path d="M16 44h12"/>
                {{-- Clipboard / checklist --}}
                <rect x="48" y="12" width="28" height="42" rx="2"/>
                <path d="M56 10h12v6H56z"/>
                <path d="M54 26h16"/>
                <path d="M54 34h16"/>
                <path d="M54 42h12"/>
                <path d="M54 26l2.5 2.5L62 23"/>
                <path d="M54 34l2.5 2.5L62 31"/>
            </g>
        </svg>
        @break

    {{-- Airplane above + gantry crane / container ship --}}
    @case('carrier')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 88" aria-hidden="true" focusable="false">
            <g fill="none" stroke="{{ $c }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                {{-- Airplane --}}
                <path d="M16 26l40-12 8 4-28 10 2 10-12-2-4 8-8-4z"/>
                <path d="M44 20l8 14"/>
                {{-- Gantry crane --}}
                <path d="M10 78V42"/>
                <path d="M10 42h36"/>
                <path d="M18 42v-8h12v8"/>
                <path d="M24 34v-6"/>
                <path d="M20 28h8"/>
                {{-- Ship + containers --}}
                <path d="M42 68h38l4 10H40z"/>
                <rect x="48" y="52" width="8" height="16"/>
                <rect x="58" y="46" width="8" height="22"/>
                <rect x="68" y="54" width="8" height="14"/>
                <path d="M8 78h72"/>
            </g>
        </svg>
        @break

    {{-- Delivery truck side view --}}
    @case('delivery')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 64" aria-hidden="true" focusable="false">
            <g fill="none" stroke="{{ $c }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 40h48V16H6z"/>
                <path d="M54 26h18l12 10v4H54z"/>
                <path d="M72 26v14"/>
                <circle cx="22" cy="46" r="7"/>
                <circle cx="70" cy="46" r="7"/>
                <path d="M14 24h20"/>
                <path d="M14 30h14"/>
                <path d="M78 30h8v6"/>
            </g>
        </svg>
        @break

    {{-- Loaded container ship --}}
    @case('on-board')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 64" aria-hidden="true" focusable="false">
            <g fill="none" stroke="{{ $c }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <path d="M6 44h76l8 12H4z"/>
                {{-- Stacked containers --}}
                <rect x="14" y="28" width="12" height="16"/>
                <rect x="28" y="20" width="12" height="24"/>
                <rect x="42" y="24" width="12" height="20"/>
                <rect x="56" y="18" width="12" height="26"/>
                <rect x="70" y="26" width="10" height="18"/>
                {{-- Bridge/superstructure --}}
                <path d="M78 44V32h10v6"/>
                <path d="M84 32v-6h6v6"/>
            </g>
        </svg>
        @break

    {{-- Document stack + verified check badge --}}
    @case('pod')
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 72" aria-hidden="true" focusable="false">
            <g fill="none" stroke="{{ $c }}" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                {{-- Stacked pages --}}
                <path d="M20 14h24l10 10v34H20z"/>
                <path d="M44 14v10h10"/>
                <path d="M16 18h4v40h24"/>
                <path d="M12 22h4v40h24"/>
                {{-- Text lines --}}
                <path d="M28 32h18"/>
                <path d="M28 40h18"/>
                <path d="M28 48h12"/>
                {{-- Check badge --}}
                <circle cx="48" cy="52" r="12"/>
                <path d="M42 52l4 4 8-8"/>
            </g>
        </svg>
        @break

    @default
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" aria-hidden="true" focusable="false">
            <circle cx="32" cy="32" r="18" fill="none" stroke="{{ $c }}" stroke-width="2"/>
        </svg>
@endswitch
