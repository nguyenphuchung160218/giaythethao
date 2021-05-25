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
                            <a href="{{route('get.female.product')}}" class="btn btn-sm btn-soft-primary mt-2">Xem Ngay</a>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="py-5 rounded shadow" style="background: url('images/shop/fea2.jpg') top center;">
                        <div class="p-4">
                            <h3>Giày Thể Thao <br> Nam</h3>
                            <a href="{{ route('get.male.product')}}" class="btn btn-sm btn-soft-primary mt-2">Xem Ngay</a>
                        </div>
                    </div>
                </div><!--end col-->
                
                <div class="col-md-4 mt-4 pt-2 mt-sm-0 pt-sm-0">
                    <div class="py-5 rounded shadow" style="background: url('images/shop/fea3.jpg') top center;">
                        <div class="p-4">
                            <h3>Giày Thể Thao <br> Nam/Nữ</h3>
                            <a href="{{ route('get.other.product')}}" class="btn btn-sm btn-soft-primary mt-2">Xem Ngay</a>
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
                        <h5 class="mb-0">Sản Phẩm Nổi Bật</h5>
                    </div><!--end col-->

                    <div class="col-12 mt-4">
                        <div id="client-four" class="owl-carousel owl-theme">
                            @foreach($productsHot as $product)
                            <div class="card shop-list border-0 position-relative m-2">
                                <div class="ribbon ribbon-left ribbon-danger overflow-hidden"><span class="text-center d-block shadow small h6">Hot</span></div>
                                <div class="shop-image position-relative overflow-hidden rounded shadow">
                                    <a href="{{ route('get.detail.product',$product->pro_slug) }}"><img src="{{ asset(pare_url_file($product->images[0]->i_avatar)) }}" class="img-fluid" alt=""></a>
                                    <a href="{{ route('get.detail.product',$product->pro_slug) }}" class="overlay-work">
                                        <img src="{{ asset(pare_url_file($product->images[1]->i_avatar)) }}" class="img-fluid" alt="">
                                    </a>
                                    <ul class="list-unstyled shop-icons">
                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                        <li class="mt-2 list-inline-item"><a href="{{ route('get.view.product',$product->id ) }}" data-toggle="modal" data-target="#exampleModalCenter" data-id="{{ $product->id }}" id="productview" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
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
                        <h5 class="mb-0">Các Danh Mục Nổi Bật</h5>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    @foreach($categories as $category)
                    <div class="col-lg-2 col-md-4 col-6 mt-4 pt-2">
                        <div class="card explore-feature border-0 rounded text-center bg-white">
                            <div class="card-body">
                                <div class="icon rounded-circle shadow-lg d-inline-block h2">
                                    <img src="images/category/{{$category->c_avatar}}" class="img-fluid" alt="">
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
                        <h5 class="mb-0">Sản Phẩm Bán Chạy</h5>
                    </div><!--end col-->
                </div><!--end row-->

                <div class="row">
                    @foreach($productsSell as $product)
                    <div class="col-lg-3 col-md-6 col-12 mt-4 pt-2">
                        <div class="card shop-list border-0 position-relative">
                            <div class="ribbon ribbon-left ribbon-primary overflow-hidden"><span class="text-center d-block shadow small h6">Selling</span></div>
                            <div class="shop-image position-relative overflow-hidden rounded shadow">
                                <a href="{{ route('get.detail.product',$product->pro_slug) }}"><img src="{{ asset(pare_url_file($product->images[0]->i_avatar)) }}" class="img-fluid" alt=""></a>
                                <a href="{{ route('get.detail.product',$product->pro_slug) }}" class="overlay-work">
                                    <img src="{{ asset(pare_url_file($product->images[1]->i_avatar)) }}" class="img-fluid" alt="">
                                </a>
                                <ul class="list-unstyled shop-icons">
                                    <li><a href="javascript:void(0)" class="btn btn-icon btn-pills btn-soft-danger"><i data-feather="heart" class="icons"></i></a></li>
                                    <li class="mt-2"><a href="{{ route('get.view.product',$product->id)}}" data-toggle="modal" data-target="#exampleModalCenter" class="btn btn-icon btn-pills btn-soft-primary"><i data-feather="eye" class="icons"></i></a></li>
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
                </div><!--end row-->
            </div><!--end container-->
            <!-- End Popular -->

            <!-- Start CTA -->
            <div class="container-fluid mt-100 mt-60">
                <div class="row py-5 justify-content-center">
                    <div class="col-lg-8 text-center">
                        <div id="owl-fade" class="owl-carousel owl-theme">
                            <div class="customer-testi text-center mx-4">                              
                                <p class="text-dark para-dark h5 font-weight-normal font-italic mt-4">“Hãy mang những giấc mơ của bạn lên đôi chân để dẫn lối giấc mơ đó thành hiện thực.”</p>
                                <h6 class="text-dark title-dark">-- ShoesShop --</h6>
                            </div><!--end customer testi-->
                            
                            <div class="customer-testi text-center mx-4">                              
                                <p class="text-dark para-dark h5 font-weight-normal font-italic mt-4">“Bạn sẽ khó có nhiều thời gian để chăm chút cho sự lựa chọn giầy dép. Có quá nhiều phụ nữ nghĩ rằng giầy dép không quan trọng, nhưng toàn bộ sự tinh tế của phụ nữ toát ra chính từ đôi chân.”</p>
                                <h6 class="text-dark title-dark">-- Christian Dior --</h6>
                            </div><!--end customer testi-->
                            
                            <div class="customer-testi text-center mx-4">                                
                                <p class="text-dark para-dark h5 font-weight-normal font-italic mt-4">“Tôi dành phần lớn thời gian của mình khoác lên những thứ bất tiện, vì vậy tôi chỉ nghĩ đến những đôi giầy thể thao.”</p>                               
                                <h6 class="text-dark title-dark">-– Cara Delevingne --</h6>
                            </div><!--end customer testi-->

                        </div><!--end owl carousel-->
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
            <!-- End CTA -->

            
        </section><!--end section-->

        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Thông tin sản phẩm<b class="transaction_id"></b></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
       
              </div>
            </div>
          </div>
        </div>
@stop
@section('script')
    <script>
         $(function (){
             $(".list-unstyled").change(function (){
                $("#productview").onclick();
                
                let $this = $(this);
                let url = $this.attr('href');
                $("#modal-body").html('')
                $(".transaction_id").text($this.attr('data-id'));
                $("#exampleModalCenter").modal('show');

                $.ajax({
                    url: url,
                }).done(function (result){
                    if(result)
                    {
                        $("#modal-body").html('').append(result);
                    }
                });
            });
         });
    </script>
@stop
