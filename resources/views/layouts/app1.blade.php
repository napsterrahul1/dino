<!DOCTYPE html>
<html class="loading" lang="{{ str_replace('_', '-', app()->getLocale()) }}"data-textdirection="ltr">
<head>
    <title>@yield('title','') | {{ env('APP_NAME')}}</title>
    @include('layouts/head')
</head>
<body class="horizontal-layout horizontal-menu  navbar-floating footer-static  " data-open="hover" data-menu="horizontal-menu" data-col="">
    {{-- @include('layouts/navBar')  --}}
 
    {{-- @include('layouts/message')  --}}
    @include('layouts/menu1') 

    <main class="">
        
        @yield('content')
    </main>

    @include('layouts/footer')

    @yield('js')

</body>
</html>


{{-- date
contact
aaddress

date of purchase
receipt number
seriel number


Need Support --}}


