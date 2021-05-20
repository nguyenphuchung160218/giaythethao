@extends('layout.app')
@section('content')
<!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Giỏ Hàng </h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Giỏ Hàng</li>
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

        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table-responsive bg-white shadow">
                            <table class="table table-center table-padding mb-0">
                                <thead>
                                    <tr> 
                                        <th class="py-3" style="min-width:20px ">Stt</th>                                      
                                        <th class="py-3" style="min-width: 300px;">Sản phẩm</th>
                                        <th class="py-3" style="min-width:20px ">Size</th>
                                        <th class="text-center py-3" style="min-width: 160px;">Giá</th>
                                        <th class="text-center py-3" style="min-width: 160px;">Số lượng</th>
                                        <th class="text-center py-3" style="min-width: 160px;">Tổng</th>
                                        <th class="py-3" style="min-width:20px "></th>
                                        <th class="py-3" style="min-width:20px "><a href="{{ route('destroy.cart') }}" class="text-danger">X</a></th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php $stt = 1 ?>
                                    @foreach($products as $key => $product)
                                    <tr>
                                        <form action="{{ route('update.cart',$key) }}" method="get">
                                        <td class="text-center">{{ $stt }}</td>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset(pare_url_file($product->options->avatar)) }}" class="img-fluid avatar avatar-small rounded shadow" style="height:auto;" alt="">
                                                <h6 class="mb-0 ml-3">{{ $product->name }}</h6>
                                            </div>
                                        </td>
                                        <td>
                                            <select style="width: 68px;padding: 0px;" class="form-control size" name="size">
                                            <?php for($i=35;$i<=45;$i++):?>
                                                <option value="<?php echo $i ?>" {{ $product->options->size==$i ? 'selected':'' }}><?php echo $i ?></option>
                                              <?php endfor ?>
                                            </select>
                                        </td>
                                        <td class="text-center">{{ number_format($product->price,0,',','.') }}</td>
                                        <td class="text-center">                                           
                                            <input type="button" value="-" class="minus btn btn-icon btn-soft-primary font-weight-bold">
                                            <input type="text" step="1" min="1" name="quantity" value="{{ $product->qty }}" title="Qty" class="btn btn-icon btn-soft-primary font-weight-bold" max="">

                                            <input type="button" value="+" class="plus btn btn-icon btn-soft-primary font-weight-bold">
                                        </td>
                                        <td class="text-center font-weight-bold">{{ number_format($product->qty * $product->price,0,',','.') }} đ</td>
                                        <td class="h6"><button style="padding: 0;border: none;background: none" class="text-info" type="submit"><i class="fuil uil-edit"></i></button></td>
                                        <td class="h6"><a href="{{ route('delete.cart',$key) }}" class="text-danger">X</a></td>
                                        </form>
                                    
                                    </tr>

                                    <?php $stt++ ?>
                                    @endforeach                                   
                                </tbody>
                            </table>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
                <div class="row">
                    <div class="col-lg-8 col-md-6 mt-4 pt-2">
                        <a href="{{ route('home') }}" class="btn btn-primary">Mua thêm</a>
                        <!-- <a href="" class="btn btn-soft-primary ml-2">Cập nhật</a> -->
                    </div>
                    <div class="col-lg-4 col-md-6 ml-auto mt-4 pt-2">
                        <div class="table-responsive bg-white rounded shadow">
                            <table class="table table-center table-padding mb-0">
                                <tbody>
                                    <tr>
                                        <th colspan="2" class="h6 text-center">Thông tin đơn hàng</th>
                                    </tr>
                                    <!-- <tr>
                                        <td class="h6">Thuế</td>
                                        <td class="text-center font-weight-bold">$ 219</td>
                                    </tr> -->
                                    <tr class="bg-light">
                                        <td class="h6">Tổng tiền</td>
                                        <td class="text-center font-weight-bold">{{ Cart::subtotal(0,3) }} đ</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <div class="mt-4 pt-2 text-right">
                            <a href="{{ route('get.form.pay') }}" class="btn btn-primary">Thanh toán</a>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
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