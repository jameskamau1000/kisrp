@extends('layouts.app')

@section('title', $pilot['settlement'])

@section('content')
    @php
        $gallerySlides = collect($pilot['gallery'] ?? [])->filter(function ($item) {
            return ! empty($item['image']) && file_exists(public_path($item['image']));
        })->values();
    @endphp

    <div class="bg-primary text-white py-4">
        <div class="container">
            <h1 class="h2 mb-0 text-white">{{ $pilot['settlement'] }}</h1>
            <p class="mb-0 mt-1 text-white opacity-90">
                {{ $pilot['county'] }} County pilot site
                @if (! empty($pilot['area_name'] ?? null))
                    — {{ $pilot['area_name'] }}
                @endif
            </p>
        </div>
    </div>

    @if ($gallerySlides->isNotEmpty())
        <div class="container py-4">
            @include('partials.photo-carousel', [
                'carouselId' => 'pilot-'.$pilot['slug'].'-gallery',
                'slides' => $gallerySlides,
                'ariaLabel' => 'Photos from '.$pilot['settlement'].', '.$pilot['county'].' County',
                'wrapperClass' => 'shadow rounded-3 hero-carousel--featured',
                'imgWidth' => 960,
                'imgHeight' => 540,
            ])
        </div>
    @else
        @kisrpPublicAsset($pilot['hero_image'] ?? null)
            <div class="container px-0 px-sm-3 py-3">
                <img class="w-100 rounded-3 shadow-sm object-fit-cover" style="max-height: 360px; object-fit: cover;" src="{{ asset($pilot['hero_image']) }}" alt="{{ $pilot['settlement'] }}, {{ $pilot['county'] }} County">
            </div>
        @endkisrpPublicAsset
    @endif

    <div class="container py-5 pt-md-0">
        <p class="lead">{{ $pilot['summary'] }}</p>

        @if (! empty($pilot['content_sections']))
            @foreach ($pilot['content_sections'] as $section)
                <h2 class="h4 mt-4 pt-2 text-primary">{{ $section['title'] }}</h2>
                @foreach ($section['paragraphs'] as $paragraph)
                    <div class="text-muted mb-3 kisrp-md">{!! \Illuminate\Support\Str::markdown($paragraph) !!}</div>
                @endforeach
            @endforeach
        @endif

        @if ($gallerySlides->isNotEmpty())
            <p class="text-muted small border-top pt-3 mt-4 mb-0">The gallery illustrates workshops, field coordination, and—where included—planning maps for {{ $pilot['settlement'] }}. Captions, map legends, and page copy should be finalised with your communications and county planning teams before wider publication.</p>
        @elseif (empty($pilot['content_sections']))
            <p class="text-muted">Additional county-specific narrative, photo galleries, and downloads can be added here as content is approved and imagery is supplied.</p>
        @endif

        <p class="mt-4 mb-0"><a href="{{ route('pilots.index') }}">&larr; All pilot sites</a></p>
    </div>
@endsection
