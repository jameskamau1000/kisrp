@extends('layouts.app')

@section('title', 'Activities')

@section('content')
    <div class="bg-primary text-white py-4">
        <div class="container">
            <h1 class="h2 mb-0">Key activity areas</h1>
        </div>
    </div>
    <div class="container py-5">
        <div class="row g-4">
            @foreach ($pillars as $pillar)
                <div class="col-md-6">
                    <div class="card h-100 border-0 shadow-sm">
                        <div class="card-body">
                            <h2 class="h5 text-primary">{{ $pillar['title'] }}</h2>
                            <p class="text-muted mb-0">{{ $pillar['body'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
