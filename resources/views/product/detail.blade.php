@extends('layout.app')
@section('content')
<!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> {{ $productDetail->pro_name }} </h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                                        <li class="breadcrumb-item"><a href="index-shop.html">Sản Phẩm</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!-- Hero End -->

        <section class="section pb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="slider slider-for">
                            @foreach($productDetail->images as $item)
                            <div><img src="{{ asset(pare_url_file($item->i_avatar)) }}" class="img-fluid rounded" alt=""></div>
                            @endforeach       
                        </div>
                        <div class="slider slider-nav">
                            @foreach($productDetail->images as $item)
                            <div><img src="{{ asset(pare_url_file($item->i_avatar)) }}" class="img-fluid" alt=""></div>
                            @endforeach
                        </div>
                    </div><!--end col-->

                    <div class="col-md-7 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title ml-md-4">
                            <form class="ml-lg-4" method="get" action="{{ route('muangay',$productDetail->id)}}">
                            <h4 class="title">{{ $productDetail->pro_name }}</h4>
                            @if($productDetail->pro_sale==0)
                            <h5 class="text-muted">{{ number_format($productDetail->pro_price,0,',','.') }} <span class="price">₫</span></h5>
                            @else                                        
                            <h5 class="text-muted">{{ number_format($productDetail->pro_price*(100-$productDetail->pro_sale)/100,0,',','.') }} <span class="price">₫</span> <del class="text-danger ml-2">{{ number_format($productDetail->pro_price,0,',','.') }} <span class="price">₫</span></del> </h5>
                            @endif 
                            <ul class="list-unstyled text-warning h5 mb-0">
                                @for($i = 1;$i <=5; $i++)
                                <li class="list-inline-item"><i class="mdi mdi-star{{ $i > $averageStar ? '-outline' : ''}}"></i></li>
                                @endfor
                            </ul>
                            
                            <h5 class="mt-4 py-2">Tổng quát :</h5>
                            <p class="text-muted">{{ $productDetail->pro_title_seo }}</p>
                        
                            <ul class="list-unstyled text-muted">
                                <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span> Digital Marketing Solutions for Tomorrow</li>
                                <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span> Our Talented &amp; Experienced Marketing Agency</li>
                                <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span> Create your own skin to match your brand</li>
                            </ul>

                            <div class="row mt-4 pt-2">
                                <div class="col-lg-6 col-12">
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

                                 
                            </div>
                            <div class="mt-4 pt-2">
                                <!-- <a href="{{ route('add.cart',$productDetail->id) }}" class="btn btn-primary">Mua Ngay</a> -->
                                <button type="submit" class="btn btn-primary">Mua Ngay</button>
                                <a href="{{ route('add.cart',$productDetail->id) }}" class="btn btn-soft-primary ml-2">Thêm Vào Giỏ</a>
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills shadow flex-column flex-sm-row d-md-inline-flex mb-0 p-1 bg-white rounded position-relative overflow-hidden" id="pills-tab" role="tablist">
                            <li class="nav-item m-1">
                                <a class="nav-link py-2 px-5 active rounded" id="description-data" data-toggle="pill" href="#description" role="tab" aria-controls="description" aria-selected="false">
                                    <div class="text-center">
                                        <h6 class="mb-0">Mô tả</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                            
                            <li class="nav-item m-1">
                                <a class="nav-link py-2 px-5 rounded" id="additional-info" data-toggle="pill" href="#additional" role="tab" aria-controls="additional" aria-selected="false">
                                    <div class="text-center">
                                        <h6 class="mb-0">Thông Tin</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->

                            <li class="nav-item m-1">
                                <a class="nav-link py-2 px-5 rounded" id="review-comments" data-toggle="pill" href="#review" role="tab" aria-controls="review" aria-selected="false">
                                    <div class="text-center">
                                        <h6 class="mb-0">Đánh Giá</h6>
                                    </div>
                                </a><!--end nav link-->
                            </li><!--end nav item-->
                        </ul>
                        
                        <div class="tab-content mt-5" id="pills-tabContent">
                            <div class="card border-0 tab-pane fade show active" id="description" role="tabpanel" aria-labelledby="description-data">
                                <p class="text-muted mb-0">{!! $productDetail->pro_content !!}</p>
                            </div>

                            <div class="card border-0 tab-pane fade" id="additional" role="tabpanel" aria-labelledby="additional-info">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td style="width: 100px;">Color</td>
                                            <td class="text-muted">Red, White, Black, Orange</td>
                                        </tr>

                                        <tr>
                                            <td>Material</td>
                                            <td class="text-muted">Cotton</td>
                                        </tr>

                                        <tr>
                                            <td>Size</td>
                                            <td class="text-muted">S, M, L, XL, XXL</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="card border-0 tab-pane fade" id="review" role="tabpanel" aria-labelledby="review-comments">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="media-list list-unstyled mb-0">
                                            @foreach($ratings as $rating)
                                            <li class="mt-4">
                                                <div class="d-flex justify-content-between">
                                                    <div class="media align-items-center">
                                                        <a class="pr-3" href="#">
                                                            <img src="
                                                            @if($rating->ra_user_id == 0)
                                                                {{ asset('image/unnamed.png') }}
                                                            @else
                                                                {{ asset(pare_url_file(get_data_user('web','avatar'))) }} 
                                                            @endif"
                                                            class="img-fluid avatar avatar-md-sm rounded-circle shadow" alt="img">
                                                        </a>
                                                        <div class="commentor-detail">
                                                            <h6 class="mb-0"><a href="javascript:void(0)" class="media-heading text-dark">{{ $rating->ra_name }}</a></h6>
                                                            <small class="text-muted">{{ $rating->created_at }}</small>
                                                        </div>
                                                    </div>
                                                    <ul class="list-unstyled mb-0">
                                                        @for($i = 1;$i <=5; $i++)
                                                        <li class="list-inline-item"><i class="mdi mdi-star{{ $i > $rating->ra_number ? '-outline' : ''}} text-warning"></i></li>
                                                        @endfor
                                                        <!-- <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li> -->
                                                    </ul>
                                                </div>
                                                <div class="mt-3">
                                                    <p class="text-muted font-italic p-3 bg-light rounded mb-0">" {{ $rating->ra_content }} "</p>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div><!--end col-->

                                    <div class="col-lg-6 mt-4 mt-lg-0 pt-2 pt-lg-0">
                                        <form class="ml-lg-4" method="post" action="{{ route('save.form.rating',$productDetail) }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-12">
                                                    <h5>Thêm đánh giá:</h5>
                                                </div>
                                                <div class="col-12 mt-4">
                                                    <h6 class="small font-weight-bold">Mời Đánh Giá:</h6>
                                                    
                                                    <label for="star1" class="d-inline-block mr-3">
                                                        <div class="text-center"><input type="radio" id="star1" name="star" value="1"></div>
                                                        <ul class="list-unstyled mb-0 small">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        </ul>
                                                    </label>

                                                    
                                                    <label for="star2" class="d-inline-block mr-3">     
                                                        <div class="text-center"><input type="radio" id="star2" name="star" value="2"></div>
                                                        <ul class="list-unstyled mb-0 small">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        </ul>
                                                    </label>
                                                    <label for="star3" class="d-inline-block mr-3">
                                                        <div class="text-center"><input type="radio" id="star3" name="star" value="3"></div>
                                                        <ul class="list-unstyled mb-0 small">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        </ul>
                                                    </label>
                                                    <label for="star4" class="d-inline-block mr-3">
                                                        <div class="text-center"><input type="radio" id="star4" name="star" value="4"></div>
                                                        <ul class="list-unstyled mb-0 small">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star-outline text-warning"></i></li>
                                                        </ul>
                                                    </label>
                                                    <label for="star5" class="d-inline-block">
                                                        <div class="text-center"><input type="radio" id="star5" name="star" value="5" checked=""></div>
                                                        <ul class="list-unstyled mb-0 small">
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                            <li class="list-inline-item"><i class="mdi mdi-star text-warning"></i></li>
                                                        </ul>
                                                    </label>
                                                </div>
                                                <div class="col-md-12 mt-3">
                                                    <div class="form-group">
                                                        <label>Nội Dung:</label>
                                                        <div class="position-relative">
                                                            <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                            <textarea id="message" placeholder="Your Comment" rows="5" name="content" class="form-control pl-5" required=""></textarea>
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
            
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Họ Tên <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <i data-feather="user" class="fea icon-sm icons"></i>
                                                            <input id="name" name="name" type="text" placeholder="Name" class="form-control pl-5" required="" value="{{ get_data_user('web','name') }}">
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
            
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label>Email <span class="text-danger">*</span></label>
                                                        <div class="position-relative">
                                                            <i data-feather="mail" class="fea icon-sm icons"></i>
                                                            <input id="email" type="email" placeholder="Email" name="email" class="form-control pl-5" required="" value="{{ get_data_user('web','email') }}">
                                                        </div>
                                                    </div>
                                                </div><!--end col-->
            
                                                <div class="col-md-12">
                                                    <div class="send">
                                                    <button type="submit" class="btn btn-primary">Gửi Đánh Giá</button>
                                                    </div>
                                                </div><!--end col-->
                                            </div><!--end row-->
                                        </form><!--end form-->
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-12">
                        <h5 class="mb-0">Sản Phẩm cùng danh mục</h5>
                    </div><!--end col-->

                    <div class="col-12 mt-4">
                        <div id="client-four" class="owl-carousel owl-theme">
                            @foreach($products as $product)
                            <div class="card shop-list border-0 position-relative m-2">
                                     @if($product->pro_hot==1)
                                      <div class="ribbon ribbon-left ribbon-danger overflow-hidden">
                                         <span class="text-center d-block shadow small h6">
                                          Hot
                                         </span>
                                       </div>
                                      @elseif($product->pro_buy > 0)
                                      <div class="ribbon ribbon-left ribbon-primary overflow-hidden">
                                        <span class="text-center d-block shadow small h6">
                                       Sold
                                       </span>
                                       </div>
                                      @elseif($product->pro_sale >0)
                                      <div class="ribbon ribbon-left ribbon-success overflow-hidden">
                                        <span class="text-center d-block shadow small h6">
                                       Sale
                                      </span>
                                       </div>
                                       @else
                                       <div class="ribbon ribbon-left ribbon-warning overflow-hidden">
                                        <span class="text-center d-block shadow small h6">
                                       Feature
                                      </span>
                                       </div>
                                      @endif
                                 
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="{{ route('get.detail.product',$product->pro_slug) }}"><img src="{{ asset(pare_url_file($product->images[0]->i_avatar)) }}" class="img-fluid" alt=""></a>
                                    <a href="{{ route('get.detail.product',$product->pro_slug) }}" class="overlay-work">
                                        <img src="{{ asset(pare_url_file($product->images[1]->i_avatar)) }}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2 list-inline-item"><a href="javascript:void(0)" data-toggle="modal" data-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
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
        </section><!--end section-->
@stop
@section('script')
<script>
    $('.plus').click(function () {
        if ($(this).prev().val() < 999) {
            $(this).prev().val(+$(this).prev().val() + 1);
        }
    });
    $('.minus').click(function () {
        if ($(this).next().val() > 1) {
            if ($(this).next().val() > 1) $(this).next().val(+$(this).next().val() - 1);
        }
    });
</script>
@stop