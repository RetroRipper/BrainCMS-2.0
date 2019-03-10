<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    <title>{{ config('hotel.hotel_name') }} - @yield('title')</title>

    @include('partials._stylesheets')

    @yield('stylesheets')

</head>
<body>
@include('partials._navibar')
<div class="container">
    @yield('content')
</div>

<footer>
    @include('partials._footer')
</footer>

@include('partials._scripts')


@yield('scripts')

</body>
</html>
