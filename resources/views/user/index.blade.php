@extends('user.layout')
@section('content_user')
    <div class="col-lg-8 col-12">
        <div class="border-bottom pb-4">
            <h5>{{ $user->name }}</h5>
           
        </div>
        
        <div class="border-bottom pb-4">
            <div class="row">
                <div class="col-md-6 mt-4">
                    <h5>Thông Tin Cá Nhân :</h5>
                    <div class="mt-4">
                        <div class="media align-items-center">
                            <i data-feather="mail" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Email :</h6>
                                <a href="javascript:void(0)" class="text-muted">{{ $user->email }}</a>
                            </div>
                        </div>
                       <!--  <div class="media align-items-center mt-3">
                            <i data-feather="bookmark" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Skills :</h6>
                                <a href="javascript:void(0)" class="text-muted">html</a>, <a href="javascript:void(0)" class="text-muted">css</a>, <a href="javascript:void(0)" class="text-muted">js</a>, <a href="javascript:void(0)" class="text-muted">mysql</a>
                            </div>
                        </div> -->
                        <div class="media align-items-center mt-3">
                            <i data-feather="italic" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Language :</h6>
                                <a href="javascript:void(0)" class="text-muted">VietNam</a>
                            </div>
                        </div>
                       <!--  <div class="media align-items-center mt-3">
                            <i data-feather="globe" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Website :</h6>
                                <a href="javascript:void(0)" class="text-muted">www.kristajoseph.com</a>
                            </div>
                        </div> -->
                        <!-- <div class="media align-items-center mt-3">
                            <i data-feather="gift" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Birthday :</h6>
                                <p class="text-muted mb-0">2nd March, 1996</p>
                            </div>
                        </div> -->
                        <div class="media align-items-center mt-3">
                            <i data-feather="map-pin" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Địa Chỉ :</h6>
                                <a href="javascript:void(0)" class="text-muted">{{ $user->address }}</a>
                            </div>
                        </div>
                        <div class="media align-items-center mt-3">
                            <i data-feather="phone" class="fea icon-ex-md text-muted mr-3"></i>
                            <div class="media-body">
                                <h6 class="text-primary mb-0">Số Điện Thoại :</h6>
                                <a href="javascript:void(0)" class="text-muted">{{ $user->phone }}</a>
                            </div>
                        </div>
                    </div>
                </div><!--end col-->

                <!-- <div class="col-md-6 mt-4 pt-2 pt-sm-0">
                    <h5>Experience :</h5>

                    <div class="media key-feature align-items-center p-3 rounded shadow mt-4">
                        <img src="images/job/Circleci.svg" class="avatar avatar-ex-sm" alt="">
                        <div class="media-body content ml-3">
                            <h4 class="title mb-0">Senior Web Developer</h4>
                            <p class="text-muted mb-0">3 Years Experience</p>
                            <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">CircleCi</a> @London, UK</p>    
                        </div>
                    </div>

                    <div class="media key-feature align-items-center p-3 rounded shadow mt-4">
                        <img src="images/job/Codepen.svg" class="avatar avatar-ex-sm" alt="">
                        <div class="media-body content ml-3">
                            <h4 class="title mb-0">Web Designer</h4>
                            <p class="text-muted mb-0">2 Years Experience</p>
                            <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">Codepen</a> @Washington D.C, USA</p>    
                        </div>
                    </div>

                    <div class="media key-feature align-items-center p-3 rounded shadow mt-4">
                        <img src="images/job/Gitlab.svg" class="avatar avatar-ex-sm" alt="">
                        <div class="media-body content ml-3">
                            <h4 class="title mb-0">UI Designer</h4>
                            <p class="text-muted mb-0">2 Years Experience</p>
                            <p class="text-muted mb-0"><a href="javascript:void(0)" class="text-primary">Gitlab</a> @Perth, Australia</p>    
                        </div>
                    </div>
                </div> --><!--end col-->
            </div><!--end row-->
        </div>

            <div class="col-12 mt-4 pt-2">
                <a href="{{ route('get.user.setting') }}" class="btn btn-primary">Xem Thêm <i class="mdi mdi-chevron-right"></i></a>
            </div><!--end col-->
        </div><!--end row-->
    </div><!--end col-->
@stop
