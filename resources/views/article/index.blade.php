@extends('layout.app')
@section('content')
<!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Bài Viết </h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Bài Viết</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

        <!-- Blog Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <!-- BLog Start -->
                    <div class="col-lg-8 col-md-6">
                        <div class="row">
                            @if(isset($articles))
                            @foreach($articles as $article)
                            <div class="col-lg-6 col-md-12 mb-4 pb-2">
                                <div class="card blog rounded border-0 shadow">
                                    <a href="{{ route('get.detail.article',$article->a_slug) }}">
                                        <div class="position-relative">                                       
                                            <img src="{{ asset(pare_url_file($article->a_avatar)) }}" class="card-img-top rounded-top" alt="...">
                                        <div class="overlay rounded-top bg-dark"></div>
                                        </div>
                                    </a>
                                    <div class="card-body content">
                                        <h5><a href="{{ route('get.detail.article',$article->a_slug) }}" class="card-title title text-dark">{{ $article->a_name }}</a></h5>
                                        <div class="post-meta d-flex justify-content-between mt-3">
                                            <ul class="list-unstyled mb-0">
                                                <li class="list-inline-item mr-2 mb-0"><a href="javascript:void(0)" class="text-muted like"><i class="mdi mdi-heart-outline mr-1"></i>33</a></li>
                                                <li class="list-inline-item"><a href="javascript:void(0)" class="text-muted comments"><i class="mdi mdi-comment-outline mr-1"></i>08</a></li>
                                            </ul>
                                            <a href="{{ route('get.detail.article',$article->a_slug) }}" class="text-muted readmore">Xem Thêm <i class="mdi mdi-chevron-right"></i></a>
                                        </div>
                                    </div>
                                    <div class="author">
                                        <small class="text-light user d-block"><i class="mdi mdi-account"></i> Calvin Carlo</small>
                                        <small class="text-light date"><i class="mdi mdi-calendar-check"></i> {{ $article->created_at->format('d-m-Y') }}</small>
                                    </div>
                                </div>
                            </div><!--end col-->                                           
                            @endforeach
                            @endif
                            <!-- PAGINATION START -->
                            <div class="col-12">
                                <div class="pagination justify-content-center mb-0">
                                    {!! $articles->links() !!}
                                </div>                                
                            </div><!--end col-->


                            <!-- PAGINATION END -->
                        </div><!--end row-->
                    </div><!--end col-->
                    <!-- BLog End -->

                    <!-- START SIDEBAR -->
                    <div class="col-lg-4 col-md-6 col-12 mt-4 mt-sm-0 pt-2 pt-sm-0">
                        <div class="card border-0 sidebar sticky-bar rounded shadow">
                            <div class="card-body">
                                <!-- SEARCH -->
                                <div class="widget mb-4 pb-2">
                                    <h5 class="widget-title">Tìm Kiếm</h5>
                                    <div id="search2" class="widget-search mt-4 mb-0">
                                        <form role="search" method="get" id="searchform" class="searchform">
                                            <div>
                                                <input type="text" class="border rounded" name="s" id="s" placeholder="Tìm Kiếm Từ Khóa...">
                                                <input type="submit" id="searchsubmit" value="Search">
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- SEARCH -->
    
                                <!-- Categories -->
                                <div class="widget mb-4 pb-2">
                                    <h5 class="widget-title">Danh Mục</h5>
                                    <ul class="list-unstyled mt-4 mb-0 blog-categories">
                                        <li><a href="jvascript:void(0)">Finance</a> <span class="float-right">13</span></li>
                                        <li><a href="jvascript:void(0)">Business</a> <span class="float-right">09</span></li>
                                        <li><a href="jvascript:void(0)">Blog</a> <span class="float-right">18</span></li>
                                        <li><a href="jvascript:void(0)">Corporate</a> <span class="float-right">20</span></li>
                                        <li><a href="jvascript:void(0)">Investment</a> <span class="float-right">22</span></li>
                                    </ul>
                                </div>
                                <!-- Categories -->
    
                                <!-- RECENT POST -->
                                <div class="widget mb-4 pb-2">
                                    <h5 class="widget-title">Tin Nổi Bật</h5>
                                    <div class="mt-4">
                                        @if(isset($articlesHot))
                                        @foreach($articlesHot as $articleHot)
                                        <div class="clearfix post-recent">
                                            <div class="post-recent-thumb float-left"> <a href="{{ route('get.detail.article',$articleHot->a_slug) }}"> <img alt="img" src="{{ asset(pare_url_file($articleHot->a_avatar)) }}" class="img-fluid rounded"></a></div>
                                            <div class="post-recent-content float-left"><a href="{{ route('get.detail.article',$articleHot->a_slug) }}">{{ $articleHot->a_name }}</a><span class="text-muted mt-2">{{ $articleHot->created_at->format('d-m-Y') }}</span></div>
                                        </div>
                                        @endforeach
                                        @endif
                                    </div>
                                </div>
                                <!-- RECENT POST -->
    
                                <!-- TAG CLOUDS -->
                                <div class="widget mb-4 pb-2">
                                    <h5 class="widget-title">Tags Cloud</h5>
                                    <div class="tagcloud mt-4">
                                        @foreach($categories as $category)
                                        <a href="{{ route('get.product.category',$category->c_slug) }}" class="rounded">{{$category->c_name}}</a>
                                        @endforeach                                      
                                    </div>
                                </div>
                                <!-- TAG CLOUDS -->
                                
                                <!-- SOCIAL -->
                                <div class="widget">
                                    <h5 class="widget-title">Follow us</h5>
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
                                <!-- SOCIAL -->
                            </div>
                        </div>
                    </div><!--end col-->
                    <!-- END SIDEBAR -->
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Blog End -->
@stop