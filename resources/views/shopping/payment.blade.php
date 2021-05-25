@extends('layout.app')
@section('content')
<!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Thanh Toán </h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Trang Chủ</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('get.list.cart')}}">Giỏ Hàng</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Thanh Toán</li>
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
                <form class="" method="post" action="">
                    @csrf
                    <div class="row">                   
                        <div class="col-lg-7 col-md-6">
                            <div class="rounded shadow-lg p-4">
                                <h5 class="mb-4">Chi Tiết Thanh Toán :</h5>                           
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Họ Và Tên <span class="text-danger">*</span></label>
                                            <input name="name" id="firstname" type="text" class="form-control" value="{{ get_data_user('web','name') }}" placeholder="First Name :" require>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Địa Chỉ <span class="text-danger">*</span></label>
                                            <input type="text" name="address" id="address1" class="form-control" value="{{ get_data_user('web','address') }}" placeholder="House number and street name :" require>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Số Điện Thoại <span class="text-danger">*</span></label>
                                            <input type="text" name="phone" id="phone" class="form-control" value="{{ get_data_user('web','phone') }}" placeholder="State Name :" require>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input name="email" id="email" type="email" class="form-control" value="{{ get_data_user('web','email') }}" placeholder="Your email :" require>
                                        </div> 
                                    </div><!--end col-->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Nội dung</label>
                                            <textarea name="note" id="comments" rows="4" class="form-control" placeholder="Notes about your order :"></textarea>
                                        </div> 
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                            
                        </div><!--end col-->
                        <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="rounded shadow-lg p-4">
                                <div class="d-flex mb-4 justify-content-between">
                                    <h5>{{ Cart::count() }} sản phẩm</h5>
                                    <a href="{{ route('get.list.cart') }}" class="text-muted h6">Xem chi tiết</a>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-center table-padding mb-0">
                                        <tbody>
                                            <tr>
                                                <td class="h6 border-0">Tổng phụ</td>
                                                <td class="text-center font-weight-bold border-0">{{ Cart::subtotal(0,3) }}</td>
                                            </tr>
                                            <tr>
                                                <td class="h6">Phí vận chuyển</td>
                                                <td class="text-center font-weight-bold">$ 0.00</td>
                                            </tr>
                                            <tr class="bg-light">
                                                <td class="h5 font-weight-bold">Tổng tiền</td>
                                                <td class="text-center text-primary h4 font-weight-bold">{{ Cart::subtotal(0,3) }}</td>
                                            </tr>
                                        </tbody>
                                    </table>

                                    <div class="mt-4 mb-0">
                                        <a href="{{route('get.form.pay.online')}}" class="ml-2 text-primary">Bạn muốn thanh toán online?</a>
                                    </div>

                                    <div class="mt-4 pt-2">
                                        <button type="submit" class="btn btn-block btn-primary">Đặt Hàng</button>
                                    </div>
                                </div>
                            </div>
                        </div>                   
                    </div><!--end row-->
                </form><!--end form-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
@stop