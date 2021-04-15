@extends('layout.app_outside')
@section('content')
<div class="back-to-home rounded d-none d-sm-block">
            <a href="{{ route('home') }}" class="btn btn-icon btn-soft-primary"><i data-feather="home" class="icons"></i></a>
        </div>

        <!-- Hero Start -->
        <section class="bg-auth-home d-table w-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7 col-md-6">
                        <div class="mr-lg-5">   
                            <img src="images/user/signup.svg" class="img-fluid d-block mx-auto" alt="">
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6">
                        <div class="card shadow rounded border-0">
                            <div class="card-body">
                                <h4 class="card-title text-center">Đăng ký</h4>  
                                <form class="login-form mt-4" method="post" action="{{ route('post.register') }}" id="form-1">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="fullname">Họ và tên <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input type="text" class="form-control pl-5 {{ ($errors->has('name')) ? 'is-invalid' : '' }}" placeholder="Nguyen Van A" name="name" id="fullname">
                                                    <span class="form-message">
                                                         @if($errors->has('name'))
                                                        <span class="text-danger">
                                                            {{ $errors->first('name') }}
                                                        </span>
                                                         @endif
                                                    </span>
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label>Số điện thoại <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="phone" class="fea icon-sm icons"></i>
                                                    <input type="number" class="form-control pl-5 {{ ($errors->has('phone')) ? 'is-invalid' : '' }}" placeholder="0528152815" name="phone" id="number">
                                                     <span class="form-message">
                                                         @if($errors->has('phone'))
                                                        <span class="text-danger">
                                                            {{ $errors->first('phone') }}
                                                        </span>
                                                         @endif
                                                     </span>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-12">
                                            <div class="form-group"> 
                                                <label>Địa chỉ <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i class="fea icon-sm icons uil-location-point"></i>
                                                    <input type="text" class="form-control pl-5 {{ ($errors->has('address')) ? 'is-invalid' : '' }}" placeholder="491 Ton Duc Thang, Lien Chieu, Da Nang" name="address" id="address">
                                                     <span class="form-message">
                                                          @if($errors->has('address'))
                                                        <span class="text-danger">
                                                            {{ $errors->first('address') }}
                                                        </span>
                                                         @endif
                                                     </span>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input type="text" class="form-control pl-5 {{ ($errors->has('email')) ? 'is-invalid' : '' }}" placeholder="Email" name="email"  id="email">
                                                     <span class="form-message">
                                                          @if($errors->has('email'))
                                                        <span class="text-danger">
                                                            {{ $errors->first('email') }}
                                                        </span>
                                                         @endif
                                                     </span>
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Mật khẩu <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                                    <input type="password" class="form-control pl-5 {{ ($errors->has('password')) ? 'is-invalid' : '' }}" placeholder="Password" name="password" id="password" >
                                                     <span class="form-message">
                                                            @if($errors->has('password'))
                                                        <span class="text-danger">
                                                            {{ $errors->first('password') }}
                                                        </span>
                                                         @endif
                                                     </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Nhập lại mật khẩu <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="key" class="fea icon-sm icons"></i>
                                                    <input type="password" class="form-control pl-5  {{ ($errors->has('password_confirmation')) ? 'is-invalid' : '' }} " placeholder="Password" name="password_confirmation" id="password_confirmation">
                                                    <span class="form-message">
                                                            @if($errors->has('password_confirmation'))
                                                        <span class="text-danger">
                                                            {{ $errors->first('password_confirmation') }}
                                                        </span>
                                                         @endif
                                                     </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <button type="submit" class="btn btn-primary btn-block">Đăng ký</button>
                                        </div><!--end col-->

                                        <div class="col-lg-12 mt-4 text-center">
                                            <h6>Đăng nhập với</h6>
                                            <div class="row">
                                                <div class="col-6 mt-3">
                                                    <a href="{{ route('social.oauth', 'facebook') }}" class="btn btn-block btn-light"><i class="mdi mdi-facebook text-primary"></i> Facebook</a>
                                                </div><!--end col-->
                                                
                                                <div class="col-6 mt-3">
                                                    <a href="{{ route('social.oauth', 'google') }}" class="btn btn-block btn-light"><i class="mdi mdi-google text-danger"></i> Google</a>
                                                </div><!--end col-->
                                            </div>
                                        </div><!--end col-->

                                        <div class="mx-auto">
                                            <p class="mb-0 mt-3"><small class="text-dark mr-2">Bạn đã có tài khoản ?</small> <a href="{{ route('get.login') }}" class="text-dark font-weight-bold">Đăng nhập</a></p>
                                        </div>
                                    </div><!--end row-->
                                </form>
                            </div>
                        </div>
                    </div> <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

@stop
@section('script')
<script type="text/javascript">
    
</script>
@stop