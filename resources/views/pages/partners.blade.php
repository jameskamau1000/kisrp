@extends('layouts.app')

@section('title', 'Partners')

@section('content')
    <div class="bg-primary text-white py-4">
        <div class="container">
            <h1 class="h2 mb-0">Partners &amp; stewardship</h1>
            <p class="mb-0 mt-2 opacity-90">National government, counties, and development cooperation.</p>
        </div>
    </div>
    <div class="container py-5">
        @php $branding = config('kisrp.branding'); @endphp

        <div class="row g-4 mb-5">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm h-100">
                    <div class="card-body text-center py-4">
                        <h2 class="h5 mb-3">Kenya &amp; Italy partnership</h2>
                        @kisrpPublicAsset($branding['partnership_strip'] ?? null)
                            <img class="img-fluid partner-logo mx-auto d-block" src="{{ asset($branding['partnership_strip']) }}" alt="Government of Kenya and Italian Agency for Development Cooperation">
                        @else
                            <p class="text-muted small mb-0">Add <code>kenya-italy-partnership.png</code> to <code>public/images/branding/</code> or set paths in <code>config/kisrp.php</code>.</p>
                        @endkisrpPublicAsset
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-3 h-100">
                    <div class="col-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body d-flex align-items-center justify-content-center py-4">
                                @kisrpPublicAsset($branding['government_kenya'] ?? null)
                                    <img class="img-fluid partner-logo" src="{{ asset($branding['government_kenya']) }}" alt="Republic of Kenya">
                                @else
                                    <span class="small text-muted text-center">GoK seal — add image</span>
                                @endkisrpPublicAsset
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="card border-0 shadow-sm h-100">
                            <div class="card-body d-flex align-items-center justify-content-center py-4">
                                @kisrpPublicAsset($branding['aics'] ?? null)
                                    <img class="img-fluid partner-logo" src="{{ asset($branding['aics']) }}" alt="AICS">
                                @else
                                    <span class="small text-muted text-center">AICS logo — add image</span>
                                @endkisrpPublicAsset
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @php $funding = config('kisrp.partners_funding'); @endphp
        @if (! empty($funding['paragraphs'] ?? null))
            <section class="mb-5 pt-4 border-top" aria-labelledby="partners-funding-heading">
                <div class="kisrp-partners-funding ps-3 ps-md-4">
                    <h2 id="partners-funding-heading" class="h3 text-dark fw-bold mb-2">{{ $funding['title'] ?? 'Programme Funding' }}</h2>
                    @if (! empty($funding['kicker'] ?? null))
                        <p class="kisrp-partners-funding__kicker fw-semibold mb-3">{{ $funding['kicker'] }}</p>
                    @endif
                    <div class="text-muted kisrp-md">
                        @foreach ($funding['paragraphs'] as $paragraph)
                            <div class="mb-3">{!! \Illuminate\Support\Str::markdown($paragraph) !!}</div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        <h2 class="h4 mb-3">County governments</h2>
        <div class="row g-4">
            @foreach ($county_seals as $county)
                <div class="col-md-4">
                    <div class="card border-0 shadow-sm h-100">
                        <div class="card-body text-center py-4">
                            @kisrpPublicAsset($county['image'] ?? null)
                                <img class="partner-logo mx-auto d-block mb-2" src="{{ asset($county['image']) }}" alt="{{ $county['name'] }}">
                            @else
                                <div class="county-hero-placeholder d-flex align-items-center justify-content-center mb-2">
                                    <span class="small text-muted px-2">County seal — {{ $county['name'] }}</span>
                                </div>
                            @endkisrpPublicAsset
                            <p class="fw-semibold mb-0">{{ $county['name'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
