<!doctype html>
<html lang="en">

<head>
    <title>Staionery | @yield('title') </title>

    @include('frontend.layouts.header')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
    integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body style="overflow-x: hidden" class="@yield('body-class')">


    @include('frontend.layouts.nav')

    @yield('page')

    @include('frontend.layouts.footer')


</body>

</html>
