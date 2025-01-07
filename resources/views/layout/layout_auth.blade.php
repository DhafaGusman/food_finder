<!-- layout_auth.blade.php -->
<!DOCTYPE html>
<html lang="en" dir="ltr">
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
    <meta name="keywords" content="Login Food Finder" />

    <!-- title -->
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
    <link rel="stylesheet" href="@yield('style')" />
  </head>
  <body>
    <!-- konten -->
    <div class="container">
      @yield('content')
    </div>

    <!-- script -->
    <script src="@yield('script')" type="text/javascript"></script>
  </body>
</html>
