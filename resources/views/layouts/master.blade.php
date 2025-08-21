<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ env('APP_NAME') }}</title>

  {{-- Bootstrap Files --}}
  @vite('resources/css/app.css')
  @vite('resources/js/app.js')
  {{-- Own styles --}}
  <link rel="stylesheet" href="assets/css/global.css">
  <link rel="stylesheet" href="assets/css/banner.css">
  <link rel="stylesheet" href="assets/css/sidebar.css">
  <link rel="stylesheet" href="assets/css/about-me.css">

  {{-- AOS - Animate on scroll library --}}
  <link rel="stylesheet" href="{{ asset('assets/css/AOS.css') }}">

  @if (Route::is('home'))
    <style>
      body {
        overflow: hidden;
      }
    </style>
  @endif

</head>

<body>
  {{-- Navbar (Top-Bar) --}}
  @include('partials.navbar')

  {{-- Main BG --}}
  <div class="img-wrapper">
    <img src="{{ asset('assets/images/Main-BG-edited.png') }}" alt="Main BG" class="">
  </div>

  {{-- Sidebar (NavBar) --}}
  @include('partials.sidebar')

  {{-- Main Content --}}
  <main>
    @yield('content')
  </main>

  {{-- AOS - Animate on scroll library --}}
  <script src="{{ asset('assets/js/AOS.js') }}"></script>
  <script>
    AOS.init({
      offset: 0,
      delay: 150,
      duration: 1000,
      easing: 'ease-in-out',
      once: false,
      mirror: false,
    });
  </script>

</body>

</html>
