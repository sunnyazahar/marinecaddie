{{-- Responsive WebP with JPEG/PNG fallback. Usage:
     @include('partials.responsive-img', [
         'path' => 'assets/img/banner/slide-01.jpg',
         'alt' => '...',
         'class' => 'rounded',
         'lazy' => true,          // default true
         'priority' => false,     // LCP: fetchpriority=high, no lazy
         'width' => null,
         'height' => null,
     ])
--}}
@php
    $path = $path ?? '';
    $alt = $alt ?? '';
    $title = $title ?? $alt;
    $class = $class ?? '';
    $lazy = $lazy ?? true;
    $priority = $priority ?? false;
    $width = $width ?? null;
    $height = $height ?? null;
    $sources = theme_image_sources($path);
    $loading = $priority ? 'eager' : ($lazy ? 'lazy' : 'eager');
    $fetchpriority = $priority ? 'high' : null;
    $decoding = $priority ? 'sync' : 'async';
@endphp
@if($sources['webp'])
<picture>
    <source srcset="{{ $sources['webp'] }}" type="image/webp">
    <img
        src="{{ $sources['src'] }}"
        alt="{{ $alt }}"
        @if($title !== '') title="{{ $title }}" @endif
        @if($class !== '') class="{{ $class }}" @endif
        loading="{{ $loading }}"
        decoding="{{ $decoding }}"
        @if($fetchpriority) fetchpriority="{{ $fetchpriority }}" @endif
        @if($width) width="{{ $width }}" @endif
        @if($height) height="{{ $height }}" @endif
    >
</picture>
@else
<img
    src="{{ $sources['src'] }}"
    alt="{{ $alt }}"
    @if($title !== '') title="{{ $title }}" @endif
    @if($class !== '') class="{{ $class }}" @endif
    loading="{{ $loading }}"
    decoding="{{ $decoding }}"
    @if($fetchpriority) fetchpriority="{{ $fetchpriority }}" @endif
    @if($width) width="{{ $width }}" @endif
    @if($height) height="{{ $height }}" @endif
>
@endif
