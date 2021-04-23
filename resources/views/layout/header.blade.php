<!-- Navbar STart -->
        <header id="topnav" class="defaultscroll sticky">
            <div class="container">
                <!-- Logo container-->
                <div>
                    <a class="logo" href="{{ route('home') }}">
                        <img src="images/logo.png" height="50" alt="">
                    </a>
                </div>                 
                <ul class="buy-button list-inline mb-0">
                    <!-- <li class="list-inline-item mb-0">
                        <div class="dropdown">
                            <form action="{{ route('get.search.product') }}">
                            <button type="submit" class="btn btn-link text-decoration-none dropdown-toggle p-0 pr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="mdi mdi-magnify h4 text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 py-0" style="width: 300px;">
                                    <input type="text" id="text" name="search" class="form-control border bg-white" placeholder="Search..." id='s'>
                                </form>
                            </div>
                        </div>
                    </li> -->
                    <li class="list-inline-item mb-0 pr-1">
                        <div class="dropdown">
                            <button type="button" class="btn btn-icon btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-shopping-cart align-middle icons"></i></button>
                            <div class="dropdown-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 p-4" style="width: 300px;">
                                <div class="pb-4">
                                    @foreach(\Cart::content() as $product)
                                    <div class="media align-items-center mt-4">
                                        <img src="{{ asset(pare_url_file($product->options->avatar)) }}" class="shadow rounded" style="max-height: 64px;" alt="">
                                        <div class="media-body text-left ml-3">
                                            <h6 class="text-dark mb-0 text-cart">{{ $product->name }}</h6>
                                            <p class="text-muted mb-0">{{ $product->price }} X {{$product->qty}}</p>
                                        </div>
                                        <h6 class="text-dark mb-0">{{ $product->price*$product->qty }}</h6>
                                    </div>
                                    @endforeach
                                </div>

                                <div class="media align-items-center justify-content-between pt-4 border-top">
                                    <h6 class="text-dark mb-0">Tổng Tiền:</h6>
                                    <h6 class="text-dark mb-0">{{ Cart::subtotal(0,3) }}</h6>
                                </div>

                                <div class="mt-3 text-center">
                                    <a href="{{ route('get.list.cart') }}" class="btn btn-primary mr-2">Giỏ hàng</a>
                                    <a href="{{ route('get.form.pay') }}" class="btn btn-primary">Checkout</a>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="list-inline-item mb-0 pr-1">
                        <a href="#" class="btn btn-icon btn-primary" data-toggle="modal" data-target="#wishlist"><i class="uil uil-heart align-middle icons"></i></a>
                    </li>
                    <li class="list-inline-item mb-0">
                        <div class="dropdown dropdown-primary">
                            <button type="button" class="btn btn-icon btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="uil uil-user align-middle icons"></i></button>
                            @if(get_data_user('web'))                           
                            <div class="dropdown-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 py-3" style="width: 200px;">
                                <a class="dropdown-item text-dark" href="{{ route('get.user') }}"><i class="uil uil-user align-middle mr-1"></i> Tài khoản</a>
                                <!-- <a class="dropdown-item text-dark" href="#"><i class="uil uil-clipboard-notes align-middle mr-1"></i> Order History</a>
                                <a class="dropdown-item text-dark" href="#"><i class="uil uil-arrow-circle-down align-middle mr-1"></i> Download</a> -->
                                <div class="dropdown-divider my-3 border-top"></div>
                                <a class="dropdown-item text-dark" href="{{ route('get.logout') }}"><i class="uil uil-sign-out-alt align-middle mr-1"></i> Đăng xuất</a>
                            </div>
                            @else
                            <div class="dropdown-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 py-3" style="width: 200px;">
                                <a class="dropdown-item text-dark" href="{{ route('get.login') }}"><i class="uil uil-sign-in-alt align-middle mr-1"></i> Đăng nhập</a>
                                <a class="dropdown-item text-dark" href="{{ route('get.register') }}"><i class="uil uil-registered align-middle mr-1"></i> Đăng ký</a>
                            </div>
                            @endif
                        </div>
                    </li>
                </ul><!--end login button-->
                <!-- End Logo container-->
                <div class="menu-extras">
                    <div class="menu-item">
                        <!-- Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="lines">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        <!-- End mobile menu toggle-->
                    </div>
                </div>
        
                <div id="navigation">
                    <!-- Navigation Menu-->   
                    <ul class="navigation-menu">
                        <li><a href="{{ route('home') }}">Trang chủ</a></li>
                        <li class="has-submenu">
                            <a href="{{ route('get.list.product') }}">Sản phẩm</a><span class="menu-arrow"></span>
                            <ul class="submenu megamenu">
                                <li>
                                    <ul>   
                                        @if (isset($categories))
                                        @foreach($categories as $category)
                                            <li><a href="{{ route('get.product.category',$category->c_slug) }}">{{ $category->c_name }}</a></li>
                                        @endforeach
                                        @endif                              
                                    </ul>
                                </li>

                    
                            </ul>
                        </li>
        
                        <li class="has-submenu">
                            <a href="{{ route('get.list.article') }}">Tin tức</a><span class="menu-arrow"></span>
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('get.aboutUs') }}">Giới thiệu</a><span class="menu-arrow"></span>
                           
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('get.contact') }}">Liên hệ</a><span class="menu-arrow"></span>
                            
                        </li>
                    </ul><!--end navigation menu-->
                    <div class="buy-menu-btn d-none">
                        <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-primary">Buy Now</a>
                    </div><!--end login button-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End