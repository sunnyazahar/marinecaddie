{{-- Primary SEO, Open Graph, Twitter, and JSON-LD --}}
@php
    $siteName = config('seo.site_name', config('app.name', 'MarineCaddie Shipping'));
    $separator = config('seo.title_separator', ' | ');
    $defaultTitle = config('seo.default_title');
    $pageTitle = trim($__env->yieldContent('title', ''));
    $fullTitle = trim($__env->yieldContent('meta_title', ''));
    if ($fullTitle === '') {
        $fullTitle = $pageTitle !== ''
            ? $pageTitle . $separator . $siteName
            : $defaultTitle . $separator . $siteName;
    }

    $description = trim($__env->yieldContent('meta_description', ''));
    if ($description === '') {
        $description = config('seo.default_description');
    }

    // Keywords are reference-only in config (array). Only output meta if a page
    // explicitly sets a string via @section('meta_keywords').
    $keywords = trim($__env->yieldContent('meta_keywords', ''));

    $robots = trim($__env->yieldContent('meta_robots', 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1'));
    $canonical = trim($__env->yieldContent('canonical', ''));
    if ($canonical === '') {
        $canonical = url()->current();
    }

    $ogType = trim($__env->yieldContent('og_type', 'website'));
    $ogImagePath = trim($__env->yieldContent('og_image', ''));
    $ogImage = $ogImagePath !== '' ? $ogImagePath : theme_asset(config('seo.og_image'));
    $ogImageAlt = trim($__env->yieldContent('og_image_alt', $siteName . ' — marine logistics & ship agency'));

    $org = config('seo.organization', []);
    $orgUrl = rtrim($org['url'] ?? config('seo.url') ?? config('app.url'), '/');
    $orgLogo = theme_asset($org['logo'] ?? 'assets/img/logos/logo.svg');
    $inLanguage = config('seo.language', 'en') === 'en' ? 'en-US' : config('seo.language', 'en');
    $schemaType = trim($__env->yieldContent('schema_type', 'WebPage'));
    $serviceName = trim($__env->yieldContent('service_name', $pageTitle));

    $orgNode = [
        '@type' => ['Organization', 'ProfessionalService'],
        '@id' => $orgUrl . '/#organization',
        'name' => $org['name'] ?? $siteName,
        'legalName' => $org['legal_name'] ?? ($org['name'] ?? $siteName),
        'url' => $orgUrl,
        'logo' => [
            '@type' => 'ImageObject',
            'url' => $orgLogo,
        ],
        'image' => $ogImage,
        'email' => $org['email'] ?? null,
        'telephone' => $org['telephone'] ?? null,
        'description' => $org['description'] ?? config('seo.default_description'),
        'areaServed' => $org['area_served'] ?? 'Worldwide',
        'knowsAbout' => $org['knows_about'] ?? [],
        'sameAs' => array_values(array_filter($org['same_as'] ?? [])),
        'priceRange' => '$$',
        'contactPoint' => [
            '@type' => 'ContactPoint',
            'telephone' => $org['telephone'] ?? null,
            'contactType' => 'customer service',
            'email' => $org['email'] ?? null,
            'availableLanguage' => ['English'],
            'areaServed' => $org['area_served'] ?? 'Worldwide',
        ],
    ];

    if (! empty($org['address']) && is_array($org['address'])) {
        $orgNode['address'] = array_filter([
            '@type' => 'PostalAddress',
            'streetAddress' => $org['address']['streetAddress'] ?? null,
            'addressLocality' => $org['address']['addressLocality'] ?? null,
            'addressRegion' => $org['address']['addressRegion'] ?? null,
            'postalCode' => $org['address']['postalCode'] ?? null,
            'addressCountry' => $org['address']['addressCountry'] ?? null,
        ], fn ($v) => $v !== null && $v !== '');
    }

    if (! empty($org['geo']['latitude']) && ! empty($org['geo']['longitude'])) {
        $orgNode['geo'] = [
            '@type' => 'GeoCoordinates',
            'latitude' => $org['geo']['latitude'],
            'longitude' => $org['geo']['longitude'],
        ];
    }

    $breadcrumbItems = [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => route('home')],
    ];
    if (! request()->routeIs('home')) {
        $position = 2;
        if (request()->is('services/*')) {
            $breadcrumbItems[] = [
                '@type' => 'ListItem',
                'position' => $position++,
                'name' => 'Services',
                'item' => route('services'),
            ];
        }
        $breadcrumbItems[] = [
            '@type' => 'ListItem',
            'position' => $position,
            'name' => $pageTitle !== '' ? $pageTitle : $fullTitle,
            'item' => $canonical,
        ];
    }
@endphp

<title>{{ $fullTitle }}</title>
<meta name="description" content="{{ $description }}">
@if($keywords !== '')
<meta name="keywords" content="{{ $keywords }}">
@endif
<meta name="author" content="{{ $siteName }}">
<meta name="robots" content="{{ $robots }}">
<meta name="googlebot" content="{{ $robots }}">
<meta name="theme-color" content="{{ config('seo.theme_color', '#042158') }}">
<meta name="format-detection" content="telephone=yes">
<meta name="referrer" content="strict-origin-when-cross-origin">

<link rel="canonical" href="{{ $canonical }}">
<link rel="alternate" hreflang="{{ config('seo.language', 'en') }}" href="{{ $canonical }}">
<link rel="alternate" hreflang="x-default" href="{{ $canonical }}">

{{-- Open Graph --}}
<meta property="og:locale" content="{{ config('seo.locale', 'en_US') }}">
<meta property="og:type" content="{{ $ogType }}">
<meta property="og:site_name" content="{{ $siteName }}">
<meta property="og:title" content="{{ $fullTitle }}">
<meta property="og:description" content="{{ $description }}">
<meta property="og:url" content="{{ $canonical }}">
<meta property="og:image" content="{{ $ogImage }}">
<meta property="og:image:alt" content="{{ $ogImageAlt }}">
<meta property="og:image:width" content="1200">
<meta property="og:image:height" content="630">

{{-- Twitter Card --}}
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="{{ config('seo.twitter_handle') }}">
<meta name="twitter:title" content="{{ $fullTitle }}">
<meta name="twitter:description" content="{{ $description }}">
<meta name="twitter:image" content="{{ $ogImage }}">
<meta name="twitter:image:alt" content="{{ $ogImageAlt }}">

{{-- Organization + WebSite JSON-LD (sitewide) --}}
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@graph' => array_values(array_filter([
        $orgNode,
        [
            '@type' => 'WebSite',
            '@id' => $orgUrl . '/#website',
            'url' => $orgUrl,
            'name' => $siteName,
            'alternateName' => 'MarineCaddie',
            'description' => config('seo.default_description'),
            'publisher' => ['@id' => $orgUrl . '/#organization'],
            'inLanguage' => $inLanguage,
        ],
        [
            '@type' => in_array($schemaType, ['Service', 'FAQPage', 'BlogPosting'], true) ? 'WebPage' : $schemaType,
            '@id' => $canonical . '#webpage',
            'url' => $canonical,
            'name' => $fullTitle,
            'description' => $description,
            'isPartOf' => ['@id' => $orgUrl . '/#website'],
            'about' => ['@id' => $orgUrl . '/#organization'],
            'breadcrumb' => ['@id' => $canonical . '#breadcrumb'],
            'inLanguage' => $inLanguage,
            'primaryImageOfPage' => [
                '@type' => 'ImageObject',
                'url' => $ogImage,
            ],
        ],
        [
            '@type' => 'BreadcrumbList',
            '@id' => $canonical . '#breadcrumb',
            'itemListElement' => $breadcrumbItems,
        ],
        $schemaType === 'Service' ? [
            '@type' => 'Service',
            '@id' => $canonical . '#service',
            'name' => $serviceName !== '' ? $serviceName : $pageTitle,
            'description' => $description,
            'url' => $canonical,
            'provider' => ['@id' => $orgUrl . '/#organization'],
            'areaServed' => $org['area_served'] ?? 'Worldwide',
            'serviceType' => 'Marine logistics',
        ] : null,
    ])),
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
</script>

@stack('structured_data')
