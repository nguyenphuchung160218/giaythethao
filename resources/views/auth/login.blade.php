@extends('layout.app_outside')
@section('content')
<div class="back-to-home rounded d-none d-sm-block">
            <a href="{{ route('home') }}" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
        </div>

        <!-- Hero Start -->
        <section class="bg-home d-flex align-items-center">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="mr-lg-5">   
                            <img src="images/user/login.svg" class="img-fluid d-block mx-auto" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="card login-page bg-white shadow rounded border-0">
                            <div class="card-body">
                                <h4 class="card-title text-center">Đăng nhập</h4>  
                                <form method="post" action="{{ route('post.login') }}" class="login-form mt-4">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Mật khẩu <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                                    <input type="password" class="form-control pl-5" placeholder="Password" name="password" required="">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="d-flex justify-content-between">
                                                <div class="form-group">
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                                        <label class="custom-control-label" for="customCheck1">Remember me</label>
                                                    </div>
                                                </div>
                                                <p class="forgot-pass mb-0"><a href="auth-re-password.html" class="text-dark font-weight-bold">Forgot password ?</a></p>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12 mb-0">
                                            <button type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                                        </div><!--end col-->

                                        <div class="col-lg-12 mt-4 text-center">
                                            <h6>Đăng Nhập Bằng</h6>
                                            <div class="row">
                                                <div class="col-6 mt-3">
                                                    <a href="javascript:void(0)" class="btn btn-block btn-light"><i class="mdi mdi-facebook text-primary"></i> Facebook</a>
                                                </div><!--end col-->
                                                
                                                <div class="col-6 mt-3">
                                                    <a href="javascript:void(0)" class="btn btn-block btn-light"><i class="mdi mdi-google text-danger"></i> Google</a>
                                                </div><!--end col-->
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-12 text-center">
                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Bạn không có tài khoản ?</small> <a href="{{ route('get.register') }}" class="text-dark font-weight-bold">Đăng Ký</a></p>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div>
                        </div><!---->
                    </div> <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->
@stop