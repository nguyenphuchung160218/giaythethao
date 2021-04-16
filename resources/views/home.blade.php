@extends('layout.app')
@section('content')
<!-- Features Start -->
        @include('layout.slider')
        <div class="container-fluid mt-5 pt-2">
            <div class="row">
                <div class="col-md-4">
                    <div class="py-5 rounded shadow" style="background: url('images/shop/fea1.jpg') top center;">
                        <div class="p-4">
                            <h3>Giày Thể Thao <br> Nữ</h3>
                            <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Shop Now</a>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="py-5 rounded shadow" style="background: url('images/shop/fea2.jpg') top center;">
                        <div class="p-4">
                            <h3>Giày Thể Thao <br> Nam</h3>
                            <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Shop Now</a>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="py-5 rounded shadow" style="background: url('images/shop/fea3.jpg') top center;">
                        <div class="p-4">
                            <h3>Giày Thể Thao <br> Nam/Nữ</h3>
                            <a href="javascript:void(0)" class="btn btn-sm btn-soft-primary mt-2">Shop Now</a>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </div><!--end container-->
        <!-- Features End -->

        <!-- Start -->
        <section class="section">
            <!-- Start Recent -->
            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-12">
                        <h5 class="mb-0">Related Products</h5>
                    </div><!--end col-->

                    <div class="col-12 mt-4">
                        <div id="client-four" class="owl-carousel owl-theme">
                            @foreach($products as $product)
                            <div class="card shop-list border-0 position-relative m-2">
                                <div class="ribbon ribbon-left ribbon-danger overflow-hidden"><span class="text-center d-block shadow small h6">Hot</span></div>
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="{{ route('get.detail.product',$product->pro_slug) }}"><img src="{{ asset(pare_url_file($product->pro_avatar)) }}" class="img-fluid" alt=""></a>
                                    <a href="{{ route('get.detail.product',$product->pro_slug) }}" class="overlay-work">
                                        <img src="{{ asset(pare_url_file($product->pro_avatar)) }}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2 list-inline-item"><a href="{{ route('get.view.product',[$product->pro_slug,$product->id]) }}" data-toggle="modal" data-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                        <li class="mt-2"><a href="{{ route('add.cart',$product->id) }}" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                    </ul>
                                </div>
                                <div class="card-body content pt-4 p-2">
                                    <a href="{{ route('get.detail.product',$product->pro_slug) }}" class="text-dark product-name h6">{{ $product->pro_name }}</a>
                                    <div class="d-flex justify-content-between mt-1">
                                        @if($product->pro_sale==0)
                                        <h6 class="text-muted small font-italic mb-0 mt-1">{{ number_format($product->pro_price,0,',','.') }} <span class="price">₫</span></h6>
                                        @else                                        
                                        <h6 class="text-muted small font-italic mb-0 mt-1">{{ number_format($product->pro_price*(100-$product->pro_sale)/100,0,',','.') }} <span class="price">₫</span> <del class="text-danger ml-2">{{ number_format($product->pro_price,0,',','.') }} <span class="price">₫</span></del> </h6>
                                        @endif                                      
                                    </div>
                                    <ul class="list-unstyled text-warning mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            @endforeach                          
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <!-- End Recent -->

            <!-- Start Categories -->
            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-12">
                        <h5 class="mb-0">Top Categories</h5>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    @foreach($categories as $category)
                    <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                        <div class="card explore-feature border-0 rounded text-center bg-white">
                            <div class="card-body">
                                <div class="icon rounded-circle shadow-lg d-inline-block h2">
                                    <i class="uil uil-user-md"></i>
                                </div>
                                <div class="content mt-3">
                                    <h6 class="mb-0"><a href="{{ route('get.product.category',$category->c_slug) }}" class="title text-dark">{{ $category->c_name }}</a></h6>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                    @endforeach                 
                </div><!--end row-->
            </div><!--end container-->
            <!-- Start Categories -->

            <!-- Start Popular -->
            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-12">
                        <h5 class="mb-0">Popular Products</h5>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 position-relative">
                            <div class="ribbon ribbon-left ribbon-primary overflow-hidden"><span class="text-center d-block shadow small h6">Popular</span></div>
                            <div class="shop-image position-relative overflow-hidden rounded shadow">
                                <a href="shop-product-detail.html"><img src="images/shop/product/s9.jpg" class="img-fluid" alt=""></a>
                                <a href="shop-product-detail.html" class="overlay-work">
                                    <img src="images/shop/product/s-9.jpg" class="img-fluid" alt="">
                                </a>
                                <ul class="list-unstyled shop-icons">
                                    <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="shop-cart.html" class="btn btn-icon btn-pills btn-soft-warning"><i data-feather="shopping-cart" class="icons"></i></a></li>
                                </ul>
                            </div>
                            <div class="card-body content pt-4 p-2">
                                <a href="shop-product-detail.html" class="text-dark product-name h6">Coffee Cup / Mug</a>
                                <div class="d-flex justify-content-between mt-1">
                                    <h6 class="text-muted small font-italic mb-0 mt-1">$16.00 <del class="text-danger ml-2">$21.00</del> </h6>
                                    <ul class="list-unstyled text-warning mb-0">
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                        <li class="list-inline-item"><i class="mdi mdi-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <!-- End Popular -->

            <!-- Start CTA -->
            <div class="container-fluid mt-100 mt-60">
                <div class="rounded py-5" style="background: url('images/shop/cta.jpg') fixed;">
                    <div class="container">
                        <div class="row">
                            <div class="col-12">
                                <div class="section-title">
                                    <h2 class="font-weight-bold mb-4">End of Season Clearance <br> Sale upto 30%</h2>
                                    <p class="para-desc para-white text-muted mb-0">Launch your campaign and benefit from our expertise on designing and managing conversion centered bootstrap4 html page.</p>
                                    <div class="mt-4">
                                        <a href="javascript:void(0)" class="btn btn-primary">Shop Now</a>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end container-->
                </div>
            </div><!--end container-->
            <!-- End CTA -->

            
        </section><!--end section-->
        <!-- End -->
@stop