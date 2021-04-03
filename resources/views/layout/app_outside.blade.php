<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Đăng ký/Đăng nhập</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="shreethemes@gmail.com" />
        <meta name="website" content="http://www.shreethemes.in" />
        <meta name="Version" content="v2.6" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('') }}images/favicon.ico">
        <!-- Bootstrap -->
        <link href="{{ asset('') }}css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ asset('') }}css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/css/line.css">
        <!-- Slider -->               
        <link rel="stylesheet" href="{{ asset('') }}css/owl.carousel.min.css"/> 
        <link rel="stylesheet" href="{{ asset('') }}css/owl.theme.default.min.css"/>  
        <link rel="stylesheet" href="{{ asset('') }}css/slick.css"/> 
        <link rel="stylesheet" href="{{ asset('') }}css/slick-theme.css"/>
        <!-- Main Css -->
        <link href="{{ asset('') }}css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{ asset('') }}css/colors/default.css" rel="stylesheet" id="color-opt">
    </head>

    <body>      
        @yield('content')
        @include('layout.notification')

        <!-- javascript -->
        <script src="{{ asset('') }}js/jquery-3.5.1.min.js"></script>
        <script src="{{ asset('') }}js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('') }}js/jquery.easing.min.js"></script>
        <script src="{{ asset('') }}js/scrollspy.min.js"></script>
        <!-- SLIDER -->
        <script src="{{ asset('') }}js/owl.carousel.min.js "></script>
        <script src="{{ asset('') }}js/owl.init.js "></script>
        <script src="{{ asset('') }}js/slick.min.js"></script>
        <script src="{{ asset('') }}js/slick.init.js"></script>
        <!-- Icons -->
        <script src="{{ asset('') }}js/feather.min.js"></script>
        <script src="https://unicons.iconscout.com/release/v3.0.3/script/monochrome/bundle.js"></script>
        <!-- Main Js -->
        <script src="{{ asset('') }}js/app.js"></script>
        <!-- Load Facebook SDK for JavaScript -->
        @yield('script')
    </body>
</html>