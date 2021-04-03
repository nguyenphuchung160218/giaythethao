
<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8" />
        <title>FingerG - Đăng Nhập</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
        <meta name="keywords" content="Saas, Software, multi-uses, HTML, Clean, Modern" />
        <meta name="author" content="Shreethemes" />
        <meta name="email" content="shreethemes@gmail.com" />
        <meta name="website" content="http://www.shreethemes.in" />
        <meta name="Version" content="v2.6" />
        <!-- favicon -->
        <link rel="shortcut icon" href="{{ asset('') }}images/favicon.ico">
        <!-- Bootstrap -->
        <link href="{{ asset('') }}/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <!-- Icons -->
        <link href="{{ asset('') }}/css/materialdesignicons.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.3/css/line.css">
        <!-- Main Css -->
        <link href="{{ asset('') }}/css/style.css" rel="stylesheet" type="text/css" id="theme-opt" />
        <link href="{{ asset('') }}/css/colors/default.css" rel="stylesheet" id="color-opt">
    </head>

    <body>     
        <!-- Hero Start -->
        <section class="bg-home bg-circle-gradiant d-flex align-items-center">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-8"> 
                        <div class="card login-page bg-white shadow rounded border-0">
                            <div class="card-body">
                                <h4 class="card-title text-center">Đăng Nhập</h4>  
                                <form class="login-form mt-4" method="post" action="">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i class="fea icon-sm icons uil uil-user"></i>
                                                    <input type="email" class="form-control pl-5" placeholder="Email" name="email" required="">
                                                </div>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Mật Khẩu <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i class="fea icon-sm icons uil uil-user"></i>
                                                    <input type="password" name="password" class="form-control pl-5" placeholder="Password" required="">
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
                                                <p class="forgot-pass mb-0"><a href="auth-re-password-three.html" class="text-dark font-weight-bold">Forgot password ?</a></p>
                                            </div>
                                        </div><!--end col-->

                                        <div class="col-lg-12 mb-0">
                                            <button type="submit" class="btn btn-primary btn-block">Đăng Nhập</button>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form>
                            </div>
                        </div><!---->
                    </div><!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

    </body>
</html>