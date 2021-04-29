@extends('layout.app')
@section('content')
<!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Sản Phẩm </h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Sản Phẩm</li>
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

        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12">
                        <div class="card border-0 sidebar sticky-bar">
                            <div class="card-body p-0">
                                <!-- SEARCH -->
                                <div class="widget">
                                    <div id="search2" class="widget-search mb-0" style="width: 250px">
                                        <form role="search" method="get" id="searchform" class="searchform" action="{{ route('get.search.product')}}">
                                            <div>
                                                <input type="text" class="border rounded" name="search" id="s" placeholder="Tìm Kiếm...">
                                                <input type="submit" id="searchsubmit" value="Search">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- SEARCH -->

                                <!-- Categories -->
                                <div class="widget mt-4 pt-2">
                                    <h5 class="widget-title">Danh Mục</h5>
                                    <ul class="list-unstyled mt-4 mb-0 blog-categories">
                                        @foreach($categories as $category)
                                        <li><a href="{{ route('get.product.category',$category->c_slug) }}">{{ $category->c_name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- Categories -->

                                <!-- color -->
                                <div class="widget mt-4 pt-2">
                                    <h5 class="widget-title">Color</h5>
                                    <ul class="list-unstyled mt-4 mb-0">
                                        <li class="list-inline-item"><a href="{{ route('get.color.blue.product')}}" class="px-3 py-1 rounded-pill bg-primary" title="Sold"></a></li>
                                        <li class="list-inline-item"><a href="{{ route('get.color.red.product')}}" class="px-3 py-1 rounded-pill bg-danger" title="Hot"></a></li>
                                        <li class="list-inline-item"><a href="{{ route('get.color.green.product')}} " class="px-3 py-1 rounded-pill bg-success" title="Sale"></a></li>
                                         <li class="list-inline-item"><a href="} " class="px-3 py-1 rounded-pill bg-warning" title="Feature"></a></li>
                                    
                                    </ul>
                                </div>
                                <!-- COlor -->

                                <!-- Top Products -->
                                <div class="widget mt-4 pt-2">
                                    <h5 class="widget-title">Sản Phẩm Nổi Bật</h5>
                                    <ul class="list-unstyled mt-4 mb-0">
                                        @foreach($products as $product)
                                        <li class="media align-items-center mt-2">
                                            <a href="{{ route('get.detail.product',$product->pro_slug) }}">
                                                <img src="{{ asset(pare_url_file($product->images[0]->i_avatar)) }}" class="img-fluid avatar avatar-small rounded shadow" style="height: auto;" alt="">
                                            </a>
                                            <div class="content ml-3">
                                                <a href="{{ route('get.detail.product',$product->pro_slug) }}" class="text-dark h6 text-cart" style="width: 164px;">{{ $product->pro_name }}</a>
                                                @if($product->pro_sale==0)
                                                <h6 class="text-muted small font-italic mb-0">{{ number_format($product->pro_price,0,',','.') }} <span class="price">₫</span></h6>
                                                @else                                        
                                                <h6 class="text-muted small font-italic mb-0">{{ number_format($product->pro_price*(100-$product->pro_sale)/100,0,',','.') }} <span class="price">₫</span> 
                                                </h6>
                                                <del class="text-danger font-italic mb-0">{{ number_format($product->pro_price,0,',','.') }} <span class="price">₫</span></del> 
                                                @endif     
                                            </div>                                            
                                        </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->

                    <div class="col-lg-9 col-md-8 col-12 mt-5 pt-2 mt-sm-0 pt-sm-0">
                        <div class="row align-items-center">
                            <div class="col-lg-8 col-md-7">
                                <div class="section-title">
                                    <h5 class="mb-0">Showing 1–15 of 47 results</h5>
                                </div>
                            </div>
        
                            <div class="col-lg-4 col-md-5 mt-4 mt-sm-0 pt-2 pt-sm-0">
                                <div class="d-flex justify-content-md-end align-items-center">
                                    <div class="form custom-form">
                                        <div class="form-group mb-0">
                                          
                                          <form class="tree-most" method="get" id="form_order">
                                            <div class="orderby-wrapper pull-right">
                                              
                                                <select name="orderby" class="orderby">
                                                    <option {{ Request::get('orderby') == 'md' || !Request::get('orderby') ? 'selected="selected"' : '' }} value="md" selected="selected">Mặc định</option>
                                                    <option {{ Request::get('orderby') == 'desc' ? 'selected="selected"' : '' }} value="desc">Mới nhất</option>
                                                    <option {{ Request::get('orderby') == 'asc' ? 'selected="selected"' : '' }} value="asc">Sản phẩm cũ</option>
                                                    <option {{ Request::get('orderby') == 'price_max' ? 'selected="selected"' : '' }} value="price_max">Giá tăng dần</option>
                                                    <option {{ Request::get('orderby') == 'price_min' ? 'selected="selected"' : '' }} value="price_min">Giá giảm dần</option>
                                                </select>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                        </div><!--end row-->

                        <div class="row">
                            @foreach($products as $product)
                            <div class="col-lg-4 col-md-6 col-12 mt-4 pt-2">
                                <div class="card shop-list border-0 position-relative">
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
                                            <li class="mt-2"><a href="javascript:void(0)" data-toggle="modal" data-target="#productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
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
                                            <?php
                                                $averageStar=0;
                                                if($product->pro_total_rating>0)
                                                {
                                                    $averageStar = round($product->pro_total_number / $product->pro_total_rating,2);
                                                }
                                            ?>
                                            @for($i = 1;$i <=5; $i++)
                                            <li class="list-inline-item"><i class="mdi mdi-star{{ $i > $averageStar ? '-outline' : ''}}"></i></li>
                                            @endfor
                                        </ul>
                                    </div>
                                </div>
                            </div><!--end col-->
                            @endforeach
                            <!-- PAGINATION START -->
                            <div class="col-12 mt-4 pt-2">
                                <div class="pagination justify-content-center mb-0">
                                    {!! $products->appends($query)->links() !!}
                                </div>                                
                            </div><!--end col-->
                            <!-- PAGINATION END -->
                        </div><!--end row-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
@stop

@section('script')
    <script>
         $(function (){
             $(".orderby").change(function (){
                $("#form_order").submit();
            });
         });
    </script>
@stop
