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
                    <li class="list-inline-item mb-0">
                        <div class="dropdown">
                            <button type="button" class="btn btn-link text-decoration-none dropdown-toggle p-0 pr-2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="mdi mdi-magnify h4 text-muted"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-right bg-white shadow rounded border-0 mt-3 py-0" style="width: 300px;">
                                <form>
                                    <input type="text" id="text" name="name" class="form-control border bg-white" placeholder="Search...">
                                </form>
                            </div>
                        </div>
                    </li>
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

                                <!-- <li>
                                    <ul>
                                        <li><a href="index-developer.html">Developer <span class="badge badge-pill badge-danger">New</span></a></li>
                                        <li><a href="index-seo-agency.html">SEO Agency <span class="badge badge-pill badge-danger">New</span></a></li>
                                        <li><a href="index-construction.html">Construction <span class="badge badge-pill badge-danger">New</span></a></li>
                                        <li><a href="index-real-estate.html">Real Estate <span class="badge badge-pill badge-danger">New</span></a></li>
                                        <li><a href="index-hospital.html">Hospital <span class="badge badge-pill badge-danger">New</span></a></li>
                                        <li><a href="index-integration.html">Integration <span class="badge badge-pill badge-danger">New</span></a></li>
                                        <li><a href="index-landing-four.html">Landing Four <span class="badge badge-pill badge-danger">New</span></a></li>
                                        <li><a href="index-task-management.html">Task Management </a></li>
                                        <li><a href="index-email-inbox.html">Email Inbox </a></li>
                                        <li><a href="index-landing-one.html">Landing One </a></li>
                                        <li><a href="index-landing-two.html">Landing Two </a></li>
                                        <li><a href="index-landing-three.html">Landing Three </a></li>
                                        <li><a href="index-travel.html">Travel </a></li>
                                        <li><a href="index-blog.html">Blog </a></li>
                                        <li><a href="forums.html">Forums </a></li>
                                        <li><a href="index-personal.html">Personal</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <ul>
                                        <li><a href="index-shop.html">Shop</a></li>
                                        <li><a href="index-insurance.html">Insurance</a></li>
                                        <li><a href="index-coworking.html">Coworking</a></li>
                                        <li><a href="index-course.html">Course</a></li>
                                        <li><a href="index-online-learning.html">Online Learning</a></li>
                                        <li><a href="index-event.html">Event</a></li>
                                        <li><a href="index-single-product.html">Product</a></li>
                                        <li><a href="index-portfolio.html">Portfolio</a></li>
                                        <li><a href="index-job.html">Job</a></li>
                                        <li><a href="index-social-marketing.html">Social Media</a></li>
                                        <li><a href="index-digital-agency.html">Digital Agency</a></li>
                                        <li><a href="index-car-riding.html">Car Ride</a></li>
                                        <li><a href="index-customer.html">Customer</a></li>
                                        <li><a href="index-software.html">Software</a></li>
                                        <li><a href="index-ebook.html">E-Book</a></li>
                                        <li><a href="index-onepage.html">Saas <span class="badge badge-pill badge-warning ml-2">Onepage</span></a></li>
                                    </ul>
                                </li> -->   
                            </ul>
                        </li>
        
                        <li class="has-submenu">
                            <a href="{{ route('get.list.article') }}">Tin tức</a><span class="menu-arrow"></span>
                            <!-- <ul class="submenu">
                                <li class="has-submenu"><a href="javascript:void(0)"> Company </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-aboutus.html"> About Us</a></li>
                                        <li><a href="page-aboutus-two.html"> About Us Two </a></li>
                                        <li><a href="page-services.html">Services</a></li>
                                        <li><a href="page-history.html">History </a></li>
                                        <li><a href="page-team.html"> Team</a></li>
                                        <li><a href="page-pricing.html">Pricing</a></li>
                                    </ul> 
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Account </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="account-profile.html">Profile</a></li>
                                        <li><a href="account-members.html">Members </a></li>
                                        <li><a href="account-works.html">Works </a></li>
                                        <li><a href="account-messages.html">Messages </a></li>
                                        <li><a href="account-payments.html">Payments </a></li>
                                        <li><a href="account-setting.html">Setting</a></li>
                                        <li><a href="page-invoice.html">Invoice</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Shop <span class="badge badge-pill badge-success">Added</span></a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="shop-grids.html">Product Grids</a></li>
                                        <li><a href="shop-lists.html">Product List <span class="badge badge-pill badge-danger">New</span></a></li>
                                        <li><a href="shop-product-detail.html">Product Details</a></li>
                                        <li><a href="shop-cart.html">Shop Cart</a></li>
                                        <li><a href="shop-checkouts.html">Checkouts</a></li>
                                        <li><a href="shop-myaccount.html">My Account</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Help center </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="helpcenter-overview.html">Helpcenter</a></li>
                                        <li><a href="helpcenter-faqs.html">Faqs</a></li>
                                        <li><a href="helpcenter-guides.html">Guides</a></li>
                                        <li><a href="helpcenter-support-request.html">Support Call</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Forums </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="forums.html">Overview </a></li>
                                        <li><a href="forums-topic.html">Forum Topic </a></li>
                                        <li><a href="forums-comments.html">Forum Comments </a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Email Template</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="email-confirmation.html">Confirmation</a></li>
                                        <li><a href="email-password-reset.html">Reset Password</a></li>
                                        <li><a href="email-alert.html">Alert</a></li>
                                        <li><a href="email-invoice.html">Invoice</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)">Careers <span class="badge badge-pill badge-success">Added</span></a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-jobs.html">Jobs</a></li>
                                        <li><a href="page-jobs-sidebar.html">Jobs - Sidebar</a></li>
                                        <li><a href="page-job-detail.html">Job Detail</a></li>
                                        <li><a href="page-job-apply.html">Job Apply</a></li>
                                        <li><a href="page-job-company-list.html">Company Listing <span class="badge badge-pill badge-danger">New</span></a></li>
                                        <li><a href="page-job-company.html">Company Detail</a></li>
                                        <li><a href="page-job-candidate-list.html">Candidate Listing <span class="badge badge-pill badge-danger">New</span></a></li>
                                        <li><a href="page-job-candidate.html">Candidate Detail</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Blog </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-blog-grid.html">Blog Grid</a></li>
                                        <li><a href="page-blog-sidebar.html">Blog with Sidebar</a></li>
                                        <li><a href="page-blog-list.html">Blog Listing</a></li>
                                        <li><a href="page-blog-list-sidebar.html">Blog List & Sidebar</a></li>
                                        <li><a href="page-blog-detail.html">Blog Detail</a></li>
                                        <li><a href="page-blog-detail-two.html">Blog Detail 2 </a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Case Study </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-cases.html">All Cases </a></li>
                                        <li><a href="page-case-detail.html">Case Detail </a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Portfolio</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-portfolio-modern.html">Portfolio Modern</a></li>
                                        <li><a href="page-portfolio-classic.html">Portfolio Classic</a></li>
                                        <li><a href="page-portfolio-grid.html">Portfolio Grid</a></li>
                                        <li><a href="page-portfolio-masonry.html">Portfolio Masonry</a></li>
                                        <li><a href="page-portfolio-detail.html">Portfolio Detail</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Auth Pages</a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="auth-login.html">Login</a></li>
                                        <li><a href="auth-cover-login.html">Login Cover</a></li>
                                        <li><a href="auth-login-three.html">Login Simple</a></li>
                                        <li><a href="auth-signup.html">Signup</a></li>
                                        <li><a href="auth-cover-signup.html">Signup Cover</a></li>
                                        <li><a href="auth-signup-three.html">Signup Simple</a></li>
                                        <li><a href="auth-re-password.html">Reset Password</a></li>
                                        <li><a href="auth-cover-re-password.html">Reset Password Cover</a></li>
                                        <li><a href="auth-re-password-three.html">Reset Password Simple</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Utility </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-terms.html">Terms of Services</a></li>
                                        <li><a href="page-privacy.html">Privacy Policy</a></li>
                                    </ul>  
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Special <span class="badge badge-pill badge-success">Added</span></a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-comingsoon.html">Coming Soon</a></li>
                                        <li><a href="page-comingsoon2.html">Coming Soon Two</a></li>
                                        <li><a href="page-maintenance.html">Maintenance</a></li>
                                        <li><a href="page-error.html">Error</a></li>
                                        <li><a href="page-thankyou.html">Thank you <span class="badge badge-pill badge-danger">New</span></a></li>
                                    </ul>
                                </li>
                                <li class="has-submenu"><a href="javascript:void(0)"> Contact </a><span class="submenu-arrow"></span>
                                    <ul class="submenu">
                                        <li><a href="page-contact-detail.html">Contact Detail</a></li>
                                        <li><a href="page-contact-one.html">Contact One</a></li>
                                        <li><a href="page-contact-two.html">Contact Two</a></li>
                                        <li><a href="page-contact-three.html">Contact Three</a></li>
                                    </ul>  
                                </li>
                            </ul> -->
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('get.aboutUs') }}">Giới thiệu</a><span class="menu-arrow"></span>
                            <!-- <ul class="submenu">
                                <li><a href="documentation.html">Documentation</a></li>
                                <li><a href="changelog.html">Changelog</a></li>
                                <li><a href="components.html">Components</a></li>
                                <li><a href="widget.html">Widget</a></li>
                            </ul> -->
                        </li>
                        <li class="has-submenu">
                            <a href="{{ route('get.contact') }}">Liên hệ</a><span class="menu-arrow"></span>
                            <!-- <ul class="submenu">
                                <li><a href="documentation.html">Documentation</a></li>
                                <li><a href="changelog.html">Changelog</a></li>
                                <li><a href="components.html">Components</a></li>
                                <li><a href="widget.html">Widget</a></li>
                            </ul> -->
                        </li>
                    </ul><!--end navigation menu-->
                    <div class="buy-menu-btn d-none">
                        <a href="https://1.envato.market/4n73n" target="_blank" class="btn btn-primary">Buy Now</a>
                    </div><!--end login button-->
                </div><!--end navigation-->
            </div><!--end container-->
        </header><!--end header-->
        <!-- Navbar End