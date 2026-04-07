@extends('layouts.app')

@section('title', 'Contact')

@section('content')
    <div class="bg-primary text-white py-4">
        <div class="container">
            <h1 class="h2 mb-0">Contact</h1>
            <p class="mb-0 mt-2 opacity-90">We welcome questions about the programme and how to engage.</p>
        </div>
    </div>
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <p class="lead text-body-secondary">Use this form to reach the programme team with <strong>general enquiries</strong> about KISRP—for example partnerships, media, or how the programme works at national or county level.</p>

                <div class="card border-0 shadow-sm mb-4">
                    <div class="card-body">
                        <h2 class="h6 text-primary mb-3">Programme contact details</h2>
                        <ul class="list-unstyled mb-0 small">
                            <li class="mb-2">
                                <span class="d-block small text-muted text-uppercase fw-semibold mb-1">Phone</span>
                                <a class="link-body-emphasis text-decoration-none" href="tel:{{ preg_replace('/\s+/', '', $contact['phone']) }}">{{ $contact['phone'] }}</a>
                            </li>
                            <li class="mb-2">
                                <span class="d-block small text-muted text-uppercase fw-semibold mb-1">Email</span>
                                <a class="link-body-emphasis text-decoration-none" href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a>
                            </li>
                            <li class="mb-0">
                                <span class="d-block small text-muted text-uppercase fw-semibold mb-1">Website</span>
                                <a class="link-body-emphasis text-decoration-none" href="{{ $contact['website_url'] }}" rel="noopener noreferrer" target="_blank">{{ $contact['website_display'] }}</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <p class="text-muted">Please allow reasonable time for a response, especially during busy implementation periods.</p>
                <p class="small text-muted border-start border-3 border-primary ps-3 mb-0">For <strong>personal information</strong> about your household, plot, or grievance, please use the channels established in your settlement (community structures, county offices, or programme help desks where they exist). This website cannot process individual case records.</p>
            </div>
            <div class="col-lg-6">
                @if (session('status'))
                    <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul class="mb-0 small">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="post" action="{{ route('contact.store') }}" class="card border-0 shadow-sm">
                    @csrf
                    <div class="card-body">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required maxlength="120">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        </div>
                        <div class="mb-3">
                            <label for="organization" class="form-label">Organization <span class="text-muted">(optional)</span></label>
                            <input type="text" class="form-control" id="organization" name="organization" value="{{ old('organization') }}" maxlength="200">
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" id="message" name="message" rows="5" required maxlength="5000">{{ old('message') }}</textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Send message</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
