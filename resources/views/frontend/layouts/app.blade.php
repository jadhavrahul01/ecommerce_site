<!doctype html>
<html lang="en">

<head>
    <title>Staionery | @yield('title') </title>

    @include('frontend.layouts.header')

</head>

<body style="overflow-x: hidden" class="@yield('body-class')">


    @include('frontend.layouts.nav')

    @yield('page')

    @include('frontend.layouts.footer')


</body>

</html>
