@extends('layouts.app')

@section('title', 'About')

@section('content')
    <div class="bg-primary text-white py-4">
        <div class="container">
            <h1 class="h2 mb-0">About {{ $programme['acronym'] }}</h1>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-8">
                <p class="lead">{{ $programme['tagline'] }}</p>
                <p>The <strong>{{ $programme['full_name'] }}</strong> ({{ $programme['acronym'] }}) is a government-led initiative to support the transformation of informal settlements into more inclusive, safer, and more sustainable neighbourhoods.</p>
                <p>Programme design typically combines community participation, tenure security, planned development, and investment in essential infrastructure and services. Details on this site are illustrative until replaced with formally approved programme copy.</p>
                <h2 class="h4 mt-4">What this site is for</h2>
                <ul>
                    <li>Public orientation to the programme’s purpose and approach</li>
                    <li>Transparency on pilot locations and partner institutions</li>
                    <li>A channel for general enquiries (not for personal case management)</li>
                </ul>
            </div>
            <div class="col-lg-4">
                <div class="card border-0 shadow-sm bg-light">
                    <div class="card-body">
                        <h2 class="h6 text-primary">Next steps</h2>
                        <p class="small text-muted mb-3">Replace placeholder text with approved communications. Add county and site photography under <code class="small">public/images/</code>.</p>
                        <a class="btn btn-primary btn-sm" href="{{ route('contact') }}">Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
