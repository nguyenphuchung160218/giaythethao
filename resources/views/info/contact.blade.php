@extends('layout.app')
@section('content')
<!-- Hero Start -->
        <section class="vh-100 d-flex align-items-center" style="background: url('images/contact-detail.jpg') center center;">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="mt-5 pt-4">
                            <iframe class="rounded border p-3" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.0625531045985!2d108.15732981490079!3d16.062243443891475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142195ec1905d0b%3A0xc77c1f75ef8af137!2zxJDhuqFpIEjhu41jIFPGsCBQaOG6oW0gxJDDoCBO4bq1bmc!5e0!3m2!1svi!2s!4v1603688467495!5m2!1svi!2s" width="100%" height="500" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        </div>                      
                    </div>
                    <div class="col-lg-6">
                        <div class="title-heading mt-5 pt-4">
                            <h1 class="heading">Gửi thắc mắc cho chúng tôi</h1>
                            <p class="text-dark">Nói bất cứ điều về <span class="text-primary font-weight-bold">ShoesShop</span> chúng tôi sẽ cố gắng giải thích cho bạn trong thời gian sớm nhất.</p>
                            
                            <div class="media contact-detail align-items-center mt-3">
                                <div class="icon">
                                    <i data-feather="mail" class="fea icon-m-md text-dark mr-3"></i>
                                </div>
                                <div class="media-body content">
                                    <h5 class="title font-weight-bold mb-0">Email</h5>
                                    <a href="mailto:contact@example.com" class="text-primary">ShoesShopUED.com</a>
                                </div>
                            </div>
                            
                            <div class="media contact-detail align-items-center mt-3">
                                <div class="icon">
                                    <i data-feather="phone" class="fea icon-m-md text-dark mr-3"></i>
                                </div>
                                <div class="media-body content">
                                    <h5 class="title font-weight-bold mb-0">Số Điện Thoại</h5>
                                    <a href="tel:+152534-468-854" class="text-primary">+84 0528152815</a>
                                </div>
                            </div>
                            
                            <div class="media contact-detail align-items-center mt-3">
                                <div class="icon">
                                    <i data-feather="map-pin" class="fea icon-m-md text-dark mr-3"></i>
                                </div>
                                <div class="media-body content">
                                    <h5 class="title font-weight-bold mb-0">Vị Trí </h5>
                                    <a href="https://goo.gl/maps/c2P7mZKUY8iYkkZt6" class="video-play-icon text-primary">Xem trên bản đồ Google</a>
                                </div>
                            </div>
                         
                            <ul class="list-unstyled social-icon mb-0 mt-4">
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="facebook" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="instagram" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="twitter" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="linkedin" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="github" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="youtube" class="fea icon-sm fea-social"></i></a></li>
                                <li class="list-inline-item"><a href="javascript:void(0)" class="rounded"><i data-feather="gitlab" class="fea icon-sm fea-social"></i></a></li>
                            </ul><!--end icon-->
                        </div>
                    </div><!--end col-->
                    
                </div><!--end row-->
            </div><!--end container--> 
        </section>
         <section class="vh-100 d-flex align-items-center">
            <div class="bg-overlay bg-overlay-white"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-sm-12">
                    <div class="contact-us-form">
                            <div class="contact-form">
                                <form action="" method="post">
                                    @csrf
                                    <p>Mời bạn điền thông tin liên hệ:</p>
                                    <div class="form-top">
                                        <div class="form-group col-sm-6 col-md-6 col-lg-5">
                                            <label>Họ tên <sup>*</sup></label>
                                            <input type="text" name="c_name" class="form-control" required>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-5">
                                            <label>Email <sup>*</sup></label>
                                            <input type="email" name="c_email" class="form-control" required>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-5">
                                            <label>Tiêu đề<sup>*</sup></label>
                                            <input type="text" name="c_title" class="form-control" required>
                                        </div>
                                        <div class="form-group col-sm-6 col-md-6 col-lg-5">
                                            <label>SĐT <sup>*</sup></label>
                                            <input type="number" name="c_phone" class="form-control" required>
                                        </div>
                                        <div class="form-group col-sm-12 col-md-12 col-lg-10">
                                            <label>Nội dung <sup>*</sup></label>
                                            <textarea class="yourmessage" name="c_content" required></textarea >
                                        </div>
                                        <div class="submit-form form-group col-sm-12 submit-review">
                                            <button type="submit" class="btn btn-success pull-left">Gửi thông tin</button>
                                        </div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>

                   
                </div><!--end row-->
            </div><!--end container--> 
        </section>
        <!--end section-->
        <!-- Hero End -->
@stop