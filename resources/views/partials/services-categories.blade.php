@php
    $variant = $variant ?? 'page';
    $services = config('company.services', []);
@endphp
<div class="services-categories services-categories--{{ $variant }}">
    <div class="row g-4">
        @foreach($services as $key => $service)
            @php
                $index = $loop->iteration;
                $delay = 100 + (($loop->index % 4) * 80);
                $href = !empty($service['slug'])
                    ? route('services.show', $service['slug'])
                    : route('services');
            @endphp
            <div class="col-md-6 wow fadeInUp" data-wow-delay="{{ $delay }}ms" id="service-{{ $key }}">
                <article class="services-category">
                    <div class="services-category__media">
                        @include('partials.responsive-img', [
                            'path' => $service['image'] ?? 'assets/img/services/service-01.jpg',
                            'alt' => $service['title'],
                            'title' => $service['title'],
                            'lazy' => true,
                        ])
                        <span class="services-category__num">{{ str_pad($index, 2, '0', STR_PAD_LEFT) }}</span>
                    </div>
                    <div class="services-category__body">
                        <h3 class="services-category__title">
                            <a href="{{ $href }}">{{ $service['title'] }}</a>
                        </h3>
                        <p class="services-category__excerpt">{{ $service['excerpt'] ?? '' }}</p>
                        @if(!empty($service['items']))
                            <ul class="services-category__list">
                                @foreach($service['items'] as $item)
                                    @php
                                        $itemLabel = is_array($item) ? ($item['label'] ?? '') : $item;
                                        $itemSlug = is_array($item) ? ($item['slug'] ?? null) : null;
                                    @endphp
                                    <li>
                                        @if($itemSlug)
                                            <a href="{{ route('services.show', $itemSlug) }}">{{ $itemLabel }}</a>
                                        @else
                                            {{ $itemLabel }}
                                        @endif
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                        <a href="{{ $href }}" class="services-category__link">
                            Explore {{ $service['title'] }}
                            <i class="ti-arrow-top-right" aria-hidden="true"></i>
                        </a>
                    </div>
                </article>
            </div>
        @endforeach
    </div>
</div>
