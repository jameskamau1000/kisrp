@extends('layouts.app')

@section('title', 'Planning maps')

@section('content')
    <div class="bg-primary text-white py-4">
        <div class="container">
            <h1 class="h2 mb-2 text-white">{{ $gis['intro']['title'] }}</h1>
            <p class="lead text-white opacity-90 mb-0">{{ $gis['intro']['lead'] }}</p>
        </div>
    </div>

    <div class="container py-4">
        <p class="text-muted small border-start border-primary border-3 ps-3 mb-4">{{ $gis['intro']['note'] }}</p>

        <nav aria-label="On this page" class="card border-0 shadow-sm mb-5">
            <div class="card-body py-3">
                <h2 class="h6 text-primary mb-2">Jump to a pilot site</h2>
                <ul class="nav flex-column flex-sm-row flex-wrap gap-sm-3 mb-0 small">
                    @foreach ($gis['sites'] as $site)
                        <li>
                            <a href="#{{ $site['anchor'] }}">{{ $site['settlement'] }}, {{ $site['county'] }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </nav>

        @foreach ($gis['sites'] as $site)
            <section id="{{ $site['anchor'] }}" class="gis-site-section mb-5 pb-4 border-bottom">
                <div class="d-flex flex-wrap justify-content-between align-items-start gap-2 mb-3">
                    <div>
                        <h2 class="h3 mb-1">{{ $site['settlement'] }}</h2>
                        <p class="text-secondary mb-0">{{ $site['county'] }} County</p>
                        <p class="text-muted mt-2 mb-0">{{ $site['intro'] }}</p>
                    </div>
                    @isset($site['pilot_slug'])
                        <a class="btn btn-sm btn-outline-primary" href="{{ route('pilots.show', $site['pilot_slug']) }}">Pilot page</a>
                    @endisset
                </div>

                @foreach ($site['maps'] as $map)
                    @continue(empty($map['image']) || ! file_exists(public_path($map['image'])))
                    <article class="card border-0 shadow-sm mb-4 overflow-hidden">
                        <div class="card-header bg-white border-bottom py-3">
                            <h3 class="h5 mb-0 text-primary">{{ $map['title'] }}</h3>
                        </div>
                        <figure class="mb-0 bg-light p-2 p-md-3 text-center">
                            <img
                                src="{{ asset($map['image']) }}"
                                alt="{{ $map['alt'] }}"
                                class="gis-map-img img-fluid rounded border"
                                loading="{{ $loop->parent->first && $loop->first ? 'eager' : 'lazy' }}"
                                width="1200"
                                height="800"
                            >
                        </figure>
                        <div class="card-body">
                            <h4 class="h6 text-uppercase text-muted small mb-3">What this map shows</h4>
                            <div class="gis-map-explainers">
                                @foreach ($map['explainers'] as $paragraph)
                                    <div @class(['mb-3' => ! $loop->last])>
                                        {!! \Illuminate\Support\Str::markdown($paragraph) !!}
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </article>
                @endforeach
            </section>
        @endforeach
    </div>
@endsection
