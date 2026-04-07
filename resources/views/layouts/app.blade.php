<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{ $metaDescription ?? config('kisrp.programme.full_name') . ' — ' . config('kisrp.programme.tagline') }}">

    <title>@yield('title', config('kisrp.programme.acronym')) — {{ config('kisrp.programme.full_name') }}</title>

    @vite(['resources/css/app.scss', 'resources/js/app.js'])
</head>
<body class="d-flex flex-column min-vh-100 bg-light">
    @include('partials.nav')

    <main id="main-content" class="flex-grow-1">
        @yield('content')
    </main>

    @include('partials.footer')

    @stack('scripts')
</body>
</html>
