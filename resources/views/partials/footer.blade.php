@php
    $branding = config('kisrp.branding');
    $counties = config('kisrp.county_seals');
@endphp

<footer class="bg-white border-top mt-auto py-4">
    <div class="container">
        <div class="row g-4 align-items-center justify-content-center text-center text-lg-start">
            <div class="col-lg-4">
                <p class="fw-semibold text-primary mb-1">{{ config('kisrp.programme.acronym') }}</p>
                <p class="small text-muted mb-0">{{ config('kisrp.programme.full_name') }}</p>
            </div>
            <div class="col-lg-8">
                <p class="small text-muted mb-3">Implemented in partnership with national government, county governments, and development partners.</p>
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-end gap-3 gap-lg-4">
                    @kisrpPublicAsset($branding['partnership_strip'] ?? null)
                        <img class="footer-partner-logo" src="{{ asset($branding['partnership_strip']) }}" alt="Government of Kenya and Italian Agency for Development Cooperation">
                    @else
                        @kisrpPublicAsset($branding['government_kenya'] ?? null)
                            <img class="footer-partner-logo" src="{{ asset($branding['government_kenya']) }}" alt="Coat of arms of the Republic of Kenya">
                        @endkisrpPublicAsset
                        @kisrpPublicAsset($branding['aics'] ?? null)
                            <img class="footer-partner-logo" src="{{ asset($branding['aics']) }}" alt="Italian Agency for Development Cooperation">
                        @endkisrpPublicAsset
                    @endkisrpPublicAsset
                    @foreach ($counties as $county)
                        @kisrpPublicAsset($county['image'] ?? null)
                            <img class="footer-partner-logo" src="{{ asset($county['image']) }}" alt="{{ $county['name'] }} seal">
                        @endkisrpPublicAsset
                    @endforeach
                </div>
            </div>
        </div>
        <hr class="my-3">
        <p class="small text-muted text-center mb-0">&copy; {{ date('Y') }} {{ config('kisrp.programme.acronym') }}. Official content is subject to programme communications approval.</p>
    </div>
</footer>
