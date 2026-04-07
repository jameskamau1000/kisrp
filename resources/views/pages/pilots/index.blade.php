@extends('layouts.app')

@section('title', 'Pilot sites')

@section('content')
    <div class="bg-primary text-white py-4">
        <div class="container">
            <h1 class="h2 mb-0">Pilot settlements</h1>
            <p class="mb-0 mt-2 opacity-90">Demonstration sites for scalable upgrading models.</p>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-4">
            @foreach ($pilots as $pilot)
                @php
                    $cardImage = $pilot['hero_image'] ?? null;
                    if (empty($cardImage) || ! file_exists(public_path($cardImage))) {
                        $firstGallery = collect($pilot['gallery'] ?? [])->first(function ($g) {
                            return ! empty($g['image']) && file_exists(public_path($g['image']));
                        });
                        $cardImage = $firstGallery['image'] ?? null;
                    }
                @endphp
                <div class="col-md-4">
                    <article class="card border-0 shadow-sm h-100 overflow-hidden">
                        @kisrpPublicAsset($cardImage)
                            <img class="card-img-top pilot-card-thumb" src="{{ asset($cardImage) }}" alt="{{ $pilot['settlement'] }}, {{ $pilot['county'] }}">
                        @else
                            <div class="county-hero-placeholder rounded-0"></div>
                        @endkisrpPublicAsset
                        <div class="card-body">
                            <h2 class="h5">{{ $pilot['settlement'] }}</h2>
                            <p class="small text-secondary mb-2">
                                {{ $pilot['county'] }} County
                                @if (! empty($pilot['area_name'] ?? null))
                                    · {{ $pilot['area_name'] }}
                                @endif
                            </p>
                            <p class="small text-muted">{{ \Illuminate\Support\Str::limit($pilot['summary'], 180) }}</p>
                            <a href="{{ route('pilots.show', $pilot['slug']) }}" class="btn btn-outline-primary btn-sm">View page</a>
                        </div>
                    </article>
                </div>
            @endforeach
        </div>
    </div>
@endsection
