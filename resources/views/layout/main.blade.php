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
        <div class="container-fluid bg-secondary m-0 p-0">
            @include('layout.header')
            <div class="d-flex vh-100">
                <div class="bg-dark sidebar" id="sidebar" data-bs-theme="dark">
                    <nav class="nav-logo navbar border-bottom mb-2">
                        <a class="btn btn-secondary w-100 text-center"><span>{{ __('DVS') }}</span><i
                                class="fa-solid fa-dragon logo-icon text-primary"></i></a>
                    </nav>
                    @include('layout.sidebar')
                </div>
                <div class="flex-grow-1 vh-100 position-relative">
                    <div class="content position-absolute">
                        <div class="content-rim container-fluid h-100 p-1">
                            <div class="container-fluid h-100 overflow-y-scroll bg-dark rounded p-0" data-bs-theme="dark">
                                @yield('content')
                            </div>
                        </div>
                    </div>
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
