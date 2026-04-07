@php
    $logo = config('kisrp.branding.logo');
    $hasLogo = $logo && file_exists(public_path($logo));
@endphp

<header>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-kisrp shadow-sm" aria-label="Primary">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center gap-2 fw-semibold" href="{{ route('home') }}">
                @if ($hasLogo)
                    <img src="{{ asset($logo) }}" alt="{{ config('kisrp.programme.acronym') }} logo" class="navbar-brand-logo">
                @endif
                <span class="d-none d-sm-inline">{{ config('kisrp.programme.acronym') }}</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#kisrpNav" aria-controls="kisrpNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="kisrpNav">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link @if(request()->routeIs('home')) active @endif" href="{{ route('home') }}">Home</a></li>
                    <li class="nav-item"><a class="nav-link @if(request()->routeIs('about')) active @endif" href="{{ route('about') }}">About</a></li>
                    <li class="nav-item"><a class="nav-link @if(request()->routeIs('approach')) active @endif" href="{{ route('approach') }}">Approach</a></li>
                    <li class="nav-item"><a class="nav-link @if(request()->routeIs('activities')) active @endif" href="{{ route('activities') }}">Activities</a></li>
                    <li class="nav-item"><a class="nav-link @if(request()->routeIs('pilots.*')) active @endif" href="{{ route('pilots.index') }}">Pilot sites</a></li>
                    <li class="nav-item"><a class="nav-link @if(request()->routeIs('maps')) active @endif" href="{{ route('maps') }}">Planning maps</a></li>
                    <li class="nav-item"><a class="nav-link @if(request()->routeIs('partners')) active @endif" href="{{ route('partners') }}">Partners</a></li>
                    <li class="nav-item"><a class="nav-link @if(request()->routeIs('updates')) active @endif" href="{{ route('updates') }}">Updates</a></li>
                    <li class="nav-item"><a class="nav-link @if(request()->routeIs('contact*')) active @endif" href="{{ route('contact') }}">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
</header>
