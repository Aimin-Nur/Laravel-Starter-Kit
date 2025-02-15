<!DOCTYPE html>
<html lang="en">

<head>
    @include('layouts.partials/title-meta', ['title' => $title])
    @yield('css')
    @include('layouts.partials/head-css')
    <script src="https://cdn.jsdelivr.net/npm/gridjs@latest/dist/gridjs.umd.js"></script>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

    @if(session('success'))
        <meta name="session-success" content="{{ session('success') }}">
    @endif

    @if(session('error'))
        <meta name="session-error" content="{{ session('error') }}">
    @endif

</head>

<body>

    <div class="wrapper">

        @include('layouts.partials/topbar', ['title' => $title])
        @include('layouts.partials/main-nav')

        <div class="page-content">

            <div class="container-fluid">
                @yield('content')

            </div>

            @include('layouts.partials/footer')
            <script src="{{ mix('js/app.js') }}"></script>

        </div>

    </div>

    @include('layouts.partials/right-sidebar')
    @include('layouts.partials/footer-scripts')
    @vite(['resources/js/app.js', 'resources/js/layout.js'])
</body>

</html>

