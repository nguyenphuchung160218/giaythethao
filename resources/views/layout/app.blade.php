

<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>Giày Thể Thao - ShoesShop</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="shreethemes@gmail.com" />
        <meta name="website" content="http://www.shreethemes.in" />
        <meta name="Version" content="v2.6" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('') }}images/logo.png">
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
        @include('layout.messenger')  
        @include('layout.header')       
        @yield('content')
        @include('layout.notification')
        @include('layout.footer')

        <!-- @if(isset($viewProduct))
       
        <div class="modal fade" id="productview" tabindex="-1" role="dialog" aria-labelledby="productview-title" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content rounded shadow border-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="productview-title">{{ $viewProduct->pro_name }} </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="container-fluid px-0">
                            <div class="row">
                                <div class="col-lg-5">
                                    <div class="slider slider-for">
                                        
                                        <div><img src="{{ asset(pare_url_file($viewProduct->pro_avatar)) }}" class="img-fluid rounded" alt=""></div>
                    
                                    </div>
                                    <div class="slider slider-nav">
                                        
                                        <div><img src="{{ asset(pare_url_file($viewProduct->pro_avatar)) }}" class="img-fluid" alt=""></div>
                                      
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-7 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                    <h4 class="title">{{ $viewProduct->pro_name }}</h4>
                                    <h5 class="text-muted">{{ number_format($viewProduct->pro_price,0,',','.') }} <del class="text-danger ml-2">$25.00</del> </h5>
                                    <ul class="list-unstyled text-warning h5">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                    
                                    <h5 class="mt-4">Tổng Quát :</h5>
                                    <p class="text-muted">{{ $viewProduct->pro_title_seo }}</p>

                                    <div class="row mt-4 pt-2">
                                        <div class="col-12">
                                            <div class="d-flex align-items-center">
                                                <h6 class="mb-0">Your Size:</h6>
                                                <ul class="list-unstyled mb-0 ml-3">
                                                    <li class="list-inline-item"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">S</a></li>
                                                    <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">M</a></li>
                                                    <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">L</a></li>
                                                    <li class="list-inline-item ml-1"><a href="javascript:void(0)" class="btn btn-icon btn-soft-primary">XL</a></li>
                                                </ul>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12 mt-4">
                                            <div class="d-flex shop-list align-items-center">
                                                <h6 class="mb-0">Số Lượng:</h6>
                                                <div class="ml-3">
                                                    <input type="button" value="-" class="minus btn btn-icon btn-soft-primary font-weight-bold">
                                                    <input type="text" step="1" min="1" name="quantity" value="1" title="Qty" class="btn btn-icon btn-soft-primary font-weight-bold">
                                                    <input type="button" value="+" class="plus btn btn-icon btn-soft-primary font-weight-bold">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                    </div><!--end row-->

                                    <div class="mt-4 pt-2">
                                        <a href="{{ route('add.cart',$viewProduct->id) }}" class="btn btn-primary">Mua Ngay</a>
                                        <a href="{{ route('add.cart',$viewProduct->id) }}" class="btn btn-soft-primary ml-2">Thêm Vào Giỏ</a>
                                    </div>
                                </div><!--end col-->
                            </div><!--end row-->
                        </div><!--end container-->
                    </div>
                </div>
            </div> -->
        <!-- </div>

        @endif -->

        <!-- Product View Start -->
        @include('layout.viewproduct')
        <!-- Product View End -->
        <!-- Wishlist Popup Start -->
        <div class="modal fade" id="wishlist" tabindex="-1" role="dialog" aria-labelledby="wishlist-title" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content rounded shadow-lg border-0 overflow-hidden">
                    <div class="modal-body py-5">
                        <div class="text-center">
                            <div class="icon d-flex align-items-center justify-content-center bg-soft-danger rounded-circle mx-auto" style="height: 95px; width:95px;">
                                <h1 class="mb-0"><i class="uil uil-heart-break align-middle"></i></h1>
                            </div>
                            <div class="mt-4">
                                <h4>Your wishlist is empty.</h4>
                                <p class="text-muted">Create your first wishlist request...</p>
                                <div class="mt-4">
                                    <a href="javascript:void(0)" class="btn btn-outline-primary">+ Create new wishlist</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Wishlist Popup End -->

        <!-- Back to top -->
        <a href="#" class="btn btn-icon btn-primary back-to-top"><i data-feather="arrow-up" class="icons"></i></a>
        <!-- Back to top -->

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