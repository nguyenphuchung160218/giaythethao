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
                                        @if(isset($c_articles))
                                        @foreach($c_articles as $c_article)
                                        <li><a href="{{ route('get.article.category',$c_article->c_slug_article) }}" >{{$c_article->c_name_article}}</a> <span class="float-right">{{$c_article->solan}}</span></li>
                                        @endforeach
                                        @endif
                                        
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
                    </div>