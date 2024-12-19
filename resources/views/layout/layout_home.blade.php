<!DOCTYPE html>
<html lang="en">
<head>
    <!-- meta tag -->
    <meta charset="UTF-0" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="IE=7" />
    <meta name="author" content="Kelompok Semoga Lulus" />
    <meta
      name="description"
      content="@yield('description')"
    />
    {{-- Find delicious meals near you fast. Explore local restaurants and get the best menu recommendations for any occasion. --}}
    <meta name="keywords" content="Food Finder, Find Food, Food Find" />
    <!-- title -->
    <title>@yield('title')</title>

    <!-- link style & favicon -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    @stack('styles')
    <link
      rel="shortcut icon"
      href="{{ asset('assets/img/icon/favicon.ico') }}"
      type="image/x-icon"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"
    />
    <link
      rel="stylesheet"
      href="{{ asset('node_modules/bootstrap/dist/css/bootstrap.min.css') }}"
    />

    <!-- script -->
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
    <!-- konten -->
    <div class="container">
        @yield('content')
    </div>

    <!-- script -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/app.js') }}" type="text/javascript"></script>
    @stack('script')
</body>
</html>
