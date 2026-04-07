@extends('layouts.app')

@section('title', 'Approach')

@section('content')
    <div class="bg-primary text-white py-4">
        <div class="container">
            <h1 class="h2 mb-0">Programme approach</h1>
            <p class="mb-0 mt-2 opacity-90">A phased sequence so each stage builds the next.</p>
        </div>
    </div>
    <div class="container py-5">
        @if (! empty(config('kisrp.approach_intro')))
            <div class="row justify-content-center mb-4">
                <div class="col-lg-10">
                    @foreach (config('kisrp.approach_intro') as $introParagraph)
                        <div class="text-muted mb-3 kisrp-md">{!! \Illuminate\Support\Str::markdown($introParagraph) !!}</div>
                    @endforeach
                </div>
            </div>
        @endif
        <div class="accordion" id="phasesAccordion">
            @foreach ($phases as $index => $phase)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="heading{{ $index }}">
                        <button class="accordion-button {{ $index > 0 ? 'collapsed' : '' }}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index }}" aria-expanded="{{ $index === 0 ? 'true' : 'false' }}" aria-controls="collapse{{ $index }}">
                            <span class="me-2 text-primary fw-bold">{{ $index + 1 }}.</span> {{ $phase['title'] }}
                        </button>
                    </h2>
                    <div id="collapse{{ $index }}" class="accordion-collapse collapse {{ $index === 0 ? 'show' : '' }}" data-bs-parent="#phasesAccordion">
                        <div class="accordion-body text-muted kisrp-md">
                            @foreach ($phase['paragraphs'] ?? (isset($phase['body']) ? [$phase['body']] : []) as $paragraph)
                                @if ($paragraph !== '')
                                    <div class="mb-3">{!! \Illuminate\Support\Str::markdown($paragraph) !!}</div>
                                @endif
                            @endforeach
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
