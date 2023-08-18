<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>dvs-mechanical</title>
    <link rel="stylesheet" href="{{ asset('fontawesome-free-6.4.0-web/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/main.app.css') }}">

</head>

<body>
    @if (Route::currentRouteName() === 'login' || Route::currentRouteName() === 'register')
        @yield('content')
    @else
        <div class="container-fluid border">
            <div class="d-flex" style="min-height: 99vh">
                <div class="border me-1 rounded-end" id="sidebar">
                    <nav class="navbar bg-body-tertiary">
                        <a class="btn btn-outline-success w-100 text-center"><span>{{ __('DVS') }}</span><i
                                class="fa-solid fa-dragon"></i></a>
                    </nav>
                    <hr class="mt-0 mb-2">
                    @include('layout.sidebar')
                </div>
                <div class="flex-grow-1 border rounded">
                    @include('layout.header')
                    @yield('content')
                </div>
            </div>
        </div>
    @endif
    <script src="{{ asset('fontawesome-free-6.4.0-web/js/all.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-3.7.0.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>

</body>

</html>
