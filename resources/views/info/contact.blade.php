@extends('layout.app')
@section('content')
<!-- Start Contact -->
        <section class="section pt-5 mt-4">
            <div class="container mt-100 mt-60">
                <div class="row">
                    <div class="col-12 text-center">
                        <div class="section-title mb-4 pb-2">
                            <h4 class="title mb-4">Liên Hệ Với Chúng Tôi</h4>
                            <p class="text-muted para-desc mx-auto mb-0">Nói với chúng tôi những thắc mắc mà bạn gặp phải trên <span class="text-primary font-weight-bold">ShoesShop</span> để được hỗ trợ nhanh nhất.</p>
                        </div>
                    </div>
                    <div class="col-12 p-0">
                        <div class="card map border-0">
                            <div class="card-body p-0">
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.0625531045985!2d108.15732981490079!3d16.062243443891475!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3142195ec1905d0b%3A0xc77c1f75ef8af137!2zxJDhuqFpIEjhu41jIFPGsCBQaOG6oW0gxJDDoCBO4bq1bmc!5e0!3m2!1svi!2s!4v1618583334528!5m2!1svi!2s" style="border:0;border-radius:15px;" allowfullscreen="" loading="lazy"></iframe>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->

            <div class="container mt-100 mt-60">
                <div class="row align-items-center">
                    <div class="col-lg-5 col-md-6 mt-4 mt-sm-0 pt-2 pt-sm-0 order-2 order-md-1">
                        <div class="card custom-form rounded shadow border-0">
                            <div class="card-body">
                                <div id="message"></div>
                                <form method="post" action="" name="contact-form" id="contact-form">
                                    @csrf
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Họ Tên <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="c_name" id="name" value="{{get_data_user('web','name')}}" type="text" class="form-control pl-5" placeholder="First Name :">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Email <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                                    <input name="c_email" id="email" value="{{get_data_user('web','email')}}" type="email" class="form-control pl-5" placeholder="Your Email :">
                                                </div>
                                            </div> 
                                        </div><!--end col-->
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label>Số Điện Thoại <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="c_phone" id="name" value="{{get_data_user('web','phone')}}" type="text" class="form-control pl-5" placeholder="Your Phone :">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Tiêu Đề <span class="text-danger">*</span></label>
                                                <div class="position-relative">
                                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                                    <input name="c_title" id="name" type="text" class="form-control pl-5" placeholder="Title :">
                                                </div>
                                            </div>
                                        </div><!--end col-->
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label>Nội Dung</label>
                                                <div class="position-relative">
                                                    <i data-feather="message-circle" class="fea icon-sm icons"></i>
                                                    <textarea name="c_content" id="comments" rows="4" class="form-control pl-5" placeholder="Your Message :"></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div><!--end row-->
                                    <div class="row">
                                        <div class="col-sm-12 text-center">
                                            <input type="submit" id="submit" class="submitBnt btn btn-primary btn-block" value="Gửi Phản Hồi">
                                            <div id="simple-msg"></div>
                                        </div><!--end col-->
                                    </div><!--end row-->
                                </form><!--end form--> 
                            </div>
                        </div><!--end custom-form-->
                    </div><!--end col-->

                    <div class="col-lg-7 col-md-6 order-1 order-md-2">
                        <div class="title-heading ml-lg-4">
                            <h4 class="mb-4">Gửi thắc mắc cho chúng tôi</h4>
                            <p class="text-muted">Nói bất cứ điều về <span class="text-primary font-weight-bold">ShoesShop </span> chúng tôi sẽ cố gắng giải thích cho bạn trong thời gian sớm nhất.</p>
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
                                    <h5 class="title font-weight-bold mb-0">Vị Trí</h5>
                                    <a href="https://goo.gl/maps/sWN8LCX43WVaaTPg7" target="_blank" class="video-play-icon text-primary">Xem trên bản đồ Google</a>
                                </div>
                            </div>
                        </div>
                    </div><!--end col-->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- End contact -->
@stop