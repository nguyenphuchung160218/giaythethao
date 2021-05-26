@extends('layout.app')
@section('content')
<!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h2> {{ $article->a_name }} </h2>
                            <ul class="list-unstyled mt-4">
                                <li class="list-inline-item h6 user text-muted mr-2"><i class="mdi mdi-account"></i> Admin</li>
                                <li class="list-inline-item h6 date text-muted mr-2"><i class="mdi mdi-calendar-check"></i> {{ $article->created_at->format('d-m-Y') }}</li>
                                <li class="list-inline-item h6 date text-muted"><i class="mdi mdi-eye-outline"></i> {{ $article->a_view }} Lượt xem</li>
                            </ul>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="{{route('home')}}">Trang Chủ</a></li>
                                        <li class="breadcrumb-item"><a href="{{route('get.list.article')}}">Bài Viết</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Chi Tiết</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div><!--end col-->
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

        <!-- Blog STart -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <!-- BLog Start -->
                    <div class="col-lg-8 col-md-6">
                        <div class="card blog blog-detail border-0 shadow rounded">
                            <img src="{{ asset(pare_url_file($article->a_avatar)) }}" class="img-fluid rounded-top" alt="">
                            <div class="card-body content">
                                {!! $article->a_content !!}
                            </div>
                        </div>



                        <div class="card shadow rounded border-0 mt-4">
                            <div class="card-body">
                                <h5 class="card-title mb-0">Bài Viết Nổi Bật :</h5>

                                <div class="row">
                                    @if(isset($articlesHot))
                                    @foreach($articlesHot as $articleHot)
                                    <div class="col-lg-6 mt-4 pt-2">
                                        <div class="card blog rounded border-0 shadow">
                                            <a href="{{ route('get.detail.article',$articleHot->a_slug) }}">
                                                <div class="position-relative">                                       
                                                    <img src="{{ asset(pare_url_file($articleHot->a_avatar)) }}" class="card-img-top rounded-top" alt="...">
                                                <div class="overlay rounded-top bg-dark"></div>
                                                </div>
                                            </a>
                                            <div class="card-body content">
                                                <h5><a href="{{ route('get.detail.article',$articleHot->a_slug) }}" class="card-title title text-dark">{{ $articleHot->a_name }}</a></h5>
                                                <div class="post-meta d-flex justify-content-between mt-3">
                                                    <ul class="list-unstyled mb-0 text-muted">
                                                        <li class="list-inline-item mr-2 mb-0"><i class="mdi mdi-eye-outline mr-1"></i> {{ $articleHot->a_view }} Lượt xem</li>
                                                    </ul>
                                                    <a href="{{ route('get.detail.article',$articleHot->a_slug) }}" class="text-muted readmore">Xem Thêm <i class="mdi mdi-chevron-right"></i></a>
                                                </div>
                                            </div>
                                            <div class="author">
                                                <small class="text-light user d-block"><i class="mdi mdi-account"></i> Admin</small>
                                                <small class="text-light date"><i class="mdi mdi-calendar-check"></i> {{ $articleHot->created_at->format('d-m-Y') }}</small>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    @endforeach
                                    @endif
                                </div><!--end row-->
                            </div>
                        </div>

                    </div>
                    @include('article.aside')
                </div><!--end row-->
            </div><!--end container-->
        </section><!--end section-->
        <!-- Blog End -->
@stop