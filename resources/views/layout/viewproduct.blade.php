@if($product)
    <div class="modal-content rounded shadow border-0">
        <div class="modal-header">
            <h5 class="modal-title" id="productview-title">{{ $product->pro_name }} </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body p-4">
            <div class="container-fluid px-0">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="slider slider-for">
                            <div><img src="{{ asset(pare_url_file($product->images[0]->i_avatar)) }}" class="img-fluid rounded" alt=""></div>    
                        </div>
                        <!-- <div class="slider slider-nav">  
                            <div><img src="{{ asset(pare_url_file($product->images[0]->i_avatar)) }}" class="img-fluid" alt=""></div>
                        </div> -->
                    </div><!--end col-->

                    <div class="col-lg-7 mt-4 mt-lg-0 pt-2 pt-lg-0">
                        <ul class="list-unstyled mb-0 text-muted">
                            <li class="list-inline-item mr-2"><i class="mdi mdi-heart-outline mr-1"></i>{{ $product->pro_heart }} Lượt thích</li>
                            <li class="list-inline-item mr-2"><i class="mdi mdi-comment-outline mr-1"></i>{{ $product->pro_total_rating }} Đánh giá</li>
                            <li class="list-inline-item"><i class="mdi mdi-eye-outline mr-1"></i>{{ $product->pro_view }} Lượt xem</li>
                        </ul>
                        <h4 class="title"><a style="color:inherit" href="{{ route('get.detail.product',$product->pro_slug) }}">{{ $product->pro_name }}</a></h4>
                        @if($product->pro_sale==0)
                        <h5 class="text-muted">{{ number_format($product->pro_price,0,',','.') }} đ</h5>
                        @else                                        
                        <h5 class="text-muted">{{ number_format($product->pro_price*(100-$product->pro_sale)/100,0,',','.') }} đ<del class="text-danger ml-2">{{ number_format($product->pro_price,0,',','.') }} đ</del> </h5>
                        @endif
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

                        <h5 class="mt-4">Tổng quát :</h5>
                        <p class="text-muted">{{ $product->pro_title_seo }}.</p>
                        
                        <ul class="list-unstyled text-muted">
                                <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span> MIỄN PHÍ GIAO HÀNG TOÀN QUỐC</li>
                                <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span> ĐỔI TRẢ DỄ DÀNG</li>
                                <li class="mb-0"><span class="text-primary h5 mr-2"><i class="uil uil-check-circle align-middle"></i></span> TƯ VẤN MIỄN PHÍ</li>
                            </ul>

                        <div class="mt-4 pt-2">
                            <a href="{{ route('get.buy.now',$product->id)}}" class="btn btn-primary">Mua Ngay</a>
                            <a href="{{ route('add.cart',$product->id) }}" class="btn btn-soft-primary ml-2">Thêm Vào Giở</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </div>
    </div>
@endif