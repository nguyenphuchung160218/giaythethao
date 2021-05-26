

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Giày Thể Thao - ShoesShop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="ShoesShop Chuyên Các Loại Giày Thể Thao" />
        <meta name="keywords" content="ShoesShop, giay the thao, sneaker" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="shreethemes@gmail.com" />
        <meta name="website" content="http://www.shreethemes.in" />
        <meta name="Version" content="v1.0" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('') }}images/logo.png">
        <!-- Bootstrap -->
        <link href="{{ asset('') }}css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ asset('') }}css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/css/line.css">
        <!-- Slider -->   
        <link href="{{ asset('') }}css/flexslider.css" rel="stylesheet" type="text/css" />            
        <link rel="stylesheet" href="{{ asset('') }}css/owl.carousel.min.css"/> 
        <link rel="stylesheet" href="{{ asset('') }}css/owl.theme.default.min.css"/>  
        <link rel="stylesheet" href="{{ asset('') }}css/slick.css"/> 
        <link rel="stylesheet" href="{{ asset('') }}css/slick-theme.css"/>
        <!-- Main Css -->
        <link href="{{ asset('') }}css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{ asset('') }}css/colors/default.css" rel="stylesheet" id="color-opt">
        
    </head>

    <body>
        @include('layout.messenger')  
        @include('layout.header')       
        @yield('content')
        @include('layout.notification')      
        @include('layout.footer')
        <!-- Modal Content Start -->
        <div class="modal fade" id="productview" tabindex="-1" role="dialog" aria-labelledby="productview-title" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" id="productContent" role="document">
            </div>
        </div>
        <!-- Modal Content End -->
        
        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->
       
        <!-- javascript -->
        <script src="{{ asset('') }}js/jquery-3.5.1.min.js"></script>
        <script src="{{ asset('') }}js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('') }}js/jquery.easing.min.js"></script>
        <script src="{{ asset('') }}js/scrollspy.min.js"></script>
        <!--FLEX SLIDER-->
        <script src="{{ asset('') }}js/jquery.flexslider-min.js"></script>
        <script src="{{ asset('') }}js/flexslider.init.js"></script>
        <!-- Slider -->
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