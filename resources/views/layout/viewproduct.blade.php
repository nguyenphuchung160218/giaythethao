
@if($product)
<div class="container">
                <div class="row align-items-center">
                    <div class="col-md-5">
                        <div class="slider slider-for">
                            @foreach($product->images as $item)
                            <div><img src="{{ asset(pare_url_file($item->i_avatar)) }}" class="img-fluid rounded" alt=""></div>
                            @endforeach       
                        </div>
                        <div class="slider slider-nav">
                            @foreach($product->images as $item)
                            <div><img src="{{ asset(pare_url_file($item->i_avatar)) }}" class="img-fluid" alt=""></div>
                            @endforeach
                        </div>
                    </div><!--end col-->

                    <div class="col-md-7 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="section-title ml-md-4">
                            <form class="ml-lg-4" method="get" action="{{ route('muangay',$product->id)}}">
                            <h4 class="title">{{ $product->pro_name }}</h4>
                            @if($product->pro_sale==0)
                            <h5 class="text-muted">{{ number_format($product->pro_price,0,',','.') }} <span class="price">₫</span></h5>
                            @else                                        
                            <h5 class="text-muted">{{ number_format($product->pro_price*(100-$product->pro_sale)/100,0,',','.') }} <span class="price">₫</span> <del class="text-danger ml-2">{{ number_format($product->pro_price,0,',','.') }} <span class="price">₫</span></del> </h5>
                            @endif 
                            <ul class="list-unstyled text-warning h5 mb-0">
                                @for($i = 1;$i <=5; $i++)
                                <li class="list-inline-item"><i class="mdi mdi-star{{ $i > $averageStar ? '-outline' : ''}}"></i></li>
                                @endfor
                            </ul>
                            
                            <h5 class="mt-4 py-2">Tổng quát :</h5>
                            <p class="text-muted">{{ $product->pro_title_seo }}</p>
                        
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
                                <div class="col-lg-6 col-md-12">
                                    <input type="button" value="-" class="minus btn btn-icon btn-soft-primary font-weight-bold">
                                    <input type="text" step="1" min="1" name="quantity" value="1" title="Qty" class="btn btn-icon btn-soft-primary font-weight-bold" max="">

                                    <input type="button" value="+" class="plus btn btn-icon btn-soft-primary font-weight-bold">
                                 
                                </div>
                                    
                            </div>
                            <div class="mt-4 pt-2">
                                <!-- <a href="{{ route('add.cart',$product->id) }}" class="btn btn-primary">Mua Ngay</a> -->
                                <button type="submit" class="btn btn-primary">Mua Ngay</button>
                                <a href="{{ route('add.cart',$product->id) }}" class="btn btn-soft-primary ml-2">Thêm Vào Giỏ</a>
                                </form>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
@endif
