<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}"data-textdirection="ltr">
<head>
    <title> {{ env('APP_NAME')}} | @yield('title','')</title>
    @include('layouts/head')
    @yield('css')
    <style>
        .nav-link{
            font-size: 11px;
        }
    </style>
</head>
<body class="bg-theme login-banner mini-design">
  <div class="wrapper">
    @include('layouts/sidebar')
    @include('layouts/menu')
    @yield('content')
    @include('layouts/footer')
  </div>
    @yield('js')

    <script src="{{ url('/')}}/assets/js/app.js"></script>
</body>
</html>
