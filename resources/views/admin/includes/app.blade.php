<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="_token"  content="{{ csrf_token() }}">
    <!-- ===============================================-->
    <!--    Document Title-->
    <!-- ===============================================-->
    <title>Stationery | @yield('title') </title>

    <!-- ===============================================-->
    <!--    Favicons-->
    <!-- ===============================================-->
    <link rel="apple-touch-icon" href="{{ asset('frontend/img/logo.png')}}">
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/img/logo.png')}}" width="132"
        height="72" alt="logo">

    <meta name="theme-color" content="#ffffff">
    <script src="{{ asset('admin-assets/js/config.js') }}"></script>
    <script src="{{ asset('admin-assets/vendors/simplebar/simplebar.min.js') }}"></script>


     <!-- BEGIN: Theme CSS-->



    <!-- ===============================================-->
    <!--    Stylesheets-->


    <!-- ===============================================-->
    <link href="{{ asset('admin-assets/vendors/leaflet/leaflet.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendors/leaflet.markercluster/MarkerCluster.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendors/leaflet.markercluster/MarkerCluster.Default.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/vendors/flatpickr/flatpickr.min.css') }}" rel="stylesheet">
    <link rel="preconnect" href="https:/fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,500,600,700%7cPoppins:300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">
    <link href="{{ asset('admin-assets/vendors/simplebar/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin-assets/css/theme-rtl.min.css') }}" rel="stylesheet" id="style-rtl">
    <link href="{{ asset('admin-assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
    <link href="{{ asset('admin-assets/css/user-rtl.min.css') }}" rel="stylesheet" id="user-style-rtl">
    <link href="{{ asset('admin-assets/css/user.min.css') }}" rel="stylesheet" id="user-style-default">
    <script>
        var isRTL = JSON.parse(localStorage.getItem('isRTL'));
        if (isRTL) {
            var linkDefault = document.getElementById('style-default');
            var userLinkDefault = document.getElementById('user-style-default');
            linkDefault.setAttribute('disabled', true);
            userLinkDefault.setAttribute('disabled', true);
            document.querySelector('html').setAttribute('dir', 'rtl');
        } else {
            var linkRTL = document.getElementById('style-rtl');
            var userLinkRTL = document.getElementById('user-style-rtl');
            linkRTL.setAttribute('disabled', true);
            userLinkRTL.setAttribute('disabled', true);
        }
    </script>
</head>

<body>

    <main class="main" id="top">
        <div class="container" data-layout="container">
          <script>
            var isFluid = JSON.parse(localStorage.getItem('isFluid'));
            if (isFluid) {
              var container = document.querySelector('[data-layout]');
              container.classList.remove('container');
              container.classList.add('container-fluid');
            }
          </script>


@include('admin.includes.sidenav')

<div class="content">

    @include('admin.includes.topnav')



    @yield('content')

</div>
</main>
<!-- ===============================================-->
<!-- BEGIN: Vendor JS-->
<script src="{{ asset('admin-assets/vendors/js/vendors.min.js') }}"></script>
<!-- BEGIN Vendor JS-->

@include('admin.includes.footer')
@yield('scripts')
</body>

</html>
