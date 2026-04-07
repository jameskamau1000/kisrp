@php
    $slides = collect($slides ?? [])->filter(function ($item) {
        return ! empty($item['image']) && file_exists(public_path($item['image']));
    })->values();
    $carouselId = $carouselId ?? 'kisrpCarousel';
    $ariaLabel = $ariaLabel ?? 'Photo gallery';
    $wrapperClass = $wrapperClass ?? 'shadow rounded-3';
    $imgWidth = $imgWidth ?? 960;
    $imgHeight = $imgHeight ?? 260;
@endphp
@if ($slides->isNotEmpty())
    <div
        id="{{ $carouselId }}"
        class="carousel slide hero-carousel {{ $wrapperClass }}"
        data-bs-ride="carousel"
        data-bs-interval="{{ $interval ?? 6000 }}"
        data-bs-pause="hover"
        aria-label="{{ $ariaLabel }}"
    >
        @if ($slides->count() > 1)
            <div class="carousel-indicators hero-carousel__indicators">
                @foreach ($slides as $i => $_)
                    <button
                        type="button"
                        data-bs-target="#{{ $carouselId }}"
                        data-bs-slide-to="{{ $i }}"
                        class="@if ($i === 0) active @endif"
                        @if ($i === 0) aria-current="true" @endif
                        aria-label="Slide {{ $i + 1 }}"
                    ></button>
                @endforeach
            </div>
        @endif
        <div class="carousel-inner overflow-hidden {{ $innerClass ?? 'rounded-3' }}">
            @foreach ($slides as $i => $item)
                <div class="carousel-item @if ($i === 0) active @endif">
                    <img
                        src="{{ asset($item['image']) }}"
                        alt="{{ $item['alt'] ?? '' }}"
                        class="d-block w-100 hero-carousel__img {{ $imgClass ?? '' }}"
                        @if ($i > 0) loading="lazy" @endif
                        width="{{ $imgWidth }}"
                        height="{{ $imgHeight }}"
                    >
                    @if (! empty($item['caption']))
                        <div class="carousel-caption hero-carousel__caption text-start">
                            <p class="small mb-0">{{ $item['caption'] }}</p>
                        </div>
                    @endif
                </div>
            @endforeach
        </div>
        @if ($slides->count() > 1)
            <button class="carousel-control-prev hero-carousel__control" type="button" data-bs-target="#{{ $carouselId }}" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous slide</span>
            </button>
            <button class="carousel-control-next hero-carousel__control" type="button" data-bs-target="#{{ $carouselId }}" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next slide</span>
            </button>
        @endif
    </div>
@endif
