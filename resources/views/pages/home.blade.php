@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <section class="bg-primary text-white py-5 hero-min-h d-flex align-items-center">
        <div class="container">
            <div class="row align-items-center g-4 g-lg-5">
                <div class="col-lg-7">
                    <h1 class="display-5 fw-bold text-white">{{ config('kisrp.programme.full_name') }}</h1>
                    <p class="lead text-white opacity-90 mb-4">{{ config('kisrp.programme.tagline') }}</p>
                    <a class="btn btn-light btn-lg me-2 mb-2" href="{{ route('about') }}">About the programme</a>
                    <a class="btn btn-outline-light btn-lg mb-2" href="{{ route('pilots.index') }}">Pilot sites</a>
                </div>
                <div class="col-lg-5">
                    @php
                        $heroSlides = collect(config('kisrp.hero_thumbnails'))->filter(function ($thumb) {
                            return ! empty($thumb['image']) && file_exists(public_path($thumb['image']));
                        })->values();
                    @endphp
                    @if ($heroSlides->isNotEmpty())
                        @include('partials.photo-carousel', [
                            'carouselId' => 'kisrpHeroCarousel',
                            'slides' => $heroSlides,
                            'ariaLabel' => 'Programme photos',
                        ])
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="h3 mb-4">Focus areas</h2>
            <div class="row g-4">
                @foreach (array_slice($pillars, 0, 4) as $pillar)
                    <div class="col-md-6 col-lg-3">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            @if (! empty($pillar['image']) && file_exists(public_path($pillar['image'])))
                                <img
                                    src="{{ asset($pillar['image']) }}"
                                    alt="{{ $pillar['image_alt'] ?? $pillar['title'] }}"
                                    class="focus-area-card__img w-100"
                                    loading="lazy"
                                    width="400"
                                    height="225"
                                >
                            @endif
                            <div class="card-body">
                                <h3 class="h6 text-primary">{{ $pillar['title'] }}</h3>
                                <p class="small text-muted mb-0">{{ $pillar['body'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5 bg-light border-top border-bottom">
        <div class="container">
            <div class="d-flex flex-wrap justify-content-between align-items-center gap-3 mb-4">
                <h2 class="h3 mb-0">Phased approach</h2>
                <a class="btn btn-sm btn-outline-primary" href="{{ route('approach') }}">View full approach</a>
            </div>
            <div class="phase-timeline" role="list">
                @foreach ($phases as $index => $phase)
                    <div class="phase-timeline__step d-flex gap-3 gap-md-4" role="listitem">
                        <div class="phase-timeline__track text-center flex-shrink-0">
                            <span class="phase-timeline__badge">{{ $index + 1 }}</span>
                        </div>
                        <div class="phase-timeline__content flex-grow-1 pb-4 @if ($loop->last) pb-0 @endif">
                            <h3 class="h6 text-dark mb-2">{{ $phase['title'] }}</h3>
                            <p class="text-muted small mb-0">{{ $phase['summary'] ?? $phase['body'] ?? '' }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <h2 class="h3 mb-2">Pilot settlements</h2>
            <p class="text-muted mb-4">Each card shows a <strong>planning map</strong> for the pilot area. <a href="{{ route('maps') }}">View all maps and explainers</a>.</p>
            <div class="row g-4">
                @foreach ($pilots as $pilot)
                    @php
                        $mapImage = $pilot['planning_map_image'] ?? null;
                        $mapAlt = $pilot['planning_map_alt'] ?? ($pilot['settlement'].' planning map, '.$pilot['county'].' County');
                    @endphp
                    <div class="col-md-4">
                        <div class="card h-100 border-0 shadow-sm overflow-hidden">
                            @if ($mapImage && file_exists(public_path($mapImage)))
                                <div class="pilot-home-map-wrap bg-light border-bottom">
                                    <img
                                        src="{{ asset($mapImage) }}"
                                        alt="{{ $mapAlt }}"
                                        class="pilot-home-map"
                                        loading="lazy"
                                        width="400"
                                        height="225"
                                    >
                                </div>
                            @endif
                            <div class="card-body">
                                <h3 class="h5">{{ $pilot['settlement'] }}</h3>
                                <p class="small text-secondary mb-2">
                                    {{ $pilot['county'] }} County
                                    @if (! empty($pilot['area_name'] ?? null))
                                        · {{ $pilot['area_name'] }}
                                    @endif
                                </p>
                                <p class="small text-muted">{{ \Illuminate\Support\Str::limit($pilot['summary'], 140) }}</p>
                                <a href="{{ route('pilots.show', $pilot['slug']) }}" class="stretched-link text-decoration-none">Read more</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
