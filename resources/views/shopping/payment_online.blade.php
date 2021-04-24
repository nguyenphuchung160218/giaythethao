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
                                        <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                                        <li class="breadcrumb-item"><a href="index-shop.html">Giỏ Hàng</a></li>
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
                                            <input name="name" id="firstname" type="text" class="form-control" value="{{ get_data_user('web','name') }}" placeholder="First Name :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Địa Chỉ <span class="text-danger">*</span></label>
                                            <input type="text" name="address" id="address1" class="form-control" value="{{ get_data_user('web','address') }}" placeholder="House number and street name :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="bank_code">Ngân hàng</label>
                                            <select name="bank_code" id="bank_code" class="form-control">
                                                <option value="">Không chọn</option>
                                                <option value="NCB"> Ngan hang NCB</option>
                                                <option value="AGRIBANK"> Ngan hang Agribank</option>
                                                <option value="SCB"> Ngan hang SCB</option>
                                                <option value="SACOMBANK">Ngan hang SacomBank</option>
                                                <option value="EXIMBANK"> Ngan hang EximBank</option>
                                                <option value="MSBANK"> Ngan hang MSBANK</option>
                                                <option value="NAMABANK"> Ngan hang NamABank</option>
                                                <option value="VNMART"> Vi dien tu VnMart</option>
                                                <option value="VIETINBANK">Ngan hang Vietinbank</option>
                                                <option value="VIETCOMBANK"> Ngan hang VCB</option>
                                                <option value="HDBANK">Ngan hang HDBank</option>
                                                <option value="DONGABANK"> Ngan hang Dong A</option>
                                                <option value="TPBANK"> Ngân hàng TPBank</option>
                                                <option value="OJB"> Ngân hàng OceanBank</option>
                                                <option value="BIDV"> Ngân hàng BIDV</option>
                                                <option value="TECHCOMBANK"> Ngân hàng Techcombank</option>
                                                <option value="VPBANK"> Ngan hang VPBank</option>
                                                <option value="MBBANK"> Ngan hang MBBank</option>
                                                <option value="ACB"> Ngan hang ACB</option>
                                                <option value="OCB"> Ngan hang OCB</option>
                                                <option value="IVB"> Ngan hang IVB</option>
                                                <option value="VISA"> Thanh toan qua VISA/MASTER</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="language">Ngôn ngữ</label>
                                            <select name="language" id="language" class="form-control">
                                                <option value="vn">Tiếng Việt</option>
                                                <option value="en">English</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Số Điện Thoại <span class="text-danger">*</span></label>
                                            <input type="text" name="phone" id="phone" class="form-control" value="{{ get_data_user('web','phone') }}" placeholder="State Name :">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Email <span class="text-danger">*</span></label>
                                            <input name="email" id="email" type="email" class="form-control" value="{{ get_data_user('web','email') }}" placeholder="Your email :">
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

                            <div class="form-check form-check-inline my-4">
                                <div class="form-group mb-0">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="newaccount">
                                        <label class="custom-control-label" for="newaccount">Tạo tài khoản ?</label>
                                    </div>
                                </div>
                            </div>                            
                        </div><!--end col-->
                        <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0">
                            <div class="rounded shadow-lg p-4">
                                <div class="d-flex mb-4 justify-content-between">
                                    <h5>4 Items</h5>
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

                                    <ul class="list-unstyled mt-4 mb-0">
                                        <li>
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <div class="form-group mb-0">
                                                    <input type="radio" id="banktransfer" checked="checked" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="banktransfer">Bank Transfer</label>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mt-3">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <div class="form-group mb-0">
                                                    <input type="radio" id="chaquepayment" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="chaquepayment">Cheque Payment</label>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mt-3">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <div class="form-group mb-0">
                                                    <input type="radio" id="cashpayment" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="cashpayment">Cash on Delivery</label>
                                                </div>
                                            </div>
                                        </li>

                                        <li class="mt-3">
                                            <div class="custom-control custom-radio custom-control-inline">
                                                <div class="form-group mb-0">
                                                    <input type="radio" id="paypal" name="customRadio" class="custom-control-input">
                                                    <label class="custom-control-label" for="paypal">Paypal <a href="https://www.paypal.com/uk/webapps/mpp/paypal-popup" target="_blank" class="ml-2 text-primary">What is paypal?</a></label>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>

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