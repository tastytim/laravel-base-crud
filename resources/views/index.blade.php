<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials/head')
<body>
    @include('partials/nav')
    @yield('content')
</body>
</html>
