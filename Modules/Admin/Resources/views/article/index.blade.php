@extends('admin::layouts.master')
@section('content')
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Bài Viết
              </h1>
              <ol class="breadcrumb">
                  <li class="">
                      <i class="fa fa-dashboard"></i> Trang Chủ
                  </li>
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Bài Viết
                  </li>
              </ol>
          </div>
      </div>
      <!-- /.row -->
      <div class="table-responsive">
          <h3>Quản lý danh mục <a href="{{ route('admin.create.article') }}" ><i class="fa fa-plus-circle"></i></a> </h3>
          <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
            <thead>
                <tr>
                    <th>#</th>
                    <th style="width: 20%;">Tên bài viết</th>
                    <th style="width: 100px;">Hình ảnh</th>
                    <th style="width: 300px;">Mô tả</th>
                     <th style="width: 300px;">Danh mục bài viết</th>
                    <th>Nổi bật</th>
                    <th>Trạng thái</th>
                    <th>Ngày tạo</th>
                    <th>Thao tác</th>
                </tr>
            </thead>
            <tbody>
            @if(isset($articles))
            @foreach($articles as $article)
                <tr>
                    <td>{{ $article->id }}</td>
                    <td>{{ $article->a_name }}</td>
                    <td>
                        <img src="{{ asset(pare_url_file($article->a_avatar)) }}" class="img img-responsive" style="width: 100px;height: 80px;">
                    </td>
                    <td><p style="-webkit-line-clamp: 4;-webkit-box-orient: vertical;overflow: hidden;display: -webkit-box;">{{ $article->a_description }}</p></td>
                    <td>{{ isset($article->category->c_name_article) ? $article->category->c_name_article : '[N\A]' }}</td>
                    <td>
                        <a href="{{ route('admin.action.article',['hot',$article->id]) }}" class="label {{ $article->getHot($article->a_hot)['class'] }}">{{ $article->getHot($article->a_hot)['name'] }}</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.action.article',['active',$article->id]) }}" class="label {{ $article->getStatus($article->a_active)['class'] }}">{{ $article->getStatus($article->a_active)['name'] }}</a>
                    </td>
                    <td>{{ $article->created_at }}</td>
                    <td>
                        <a class="btn btn-info" style="font-size: 12px" href="{{ route('admin.edit.article',$article->id) }}"><i class="fa fa-pencil"></i> Cập nhật</a>
                        <a class="btn btn-danger" style="font-size: 12px" href="{{ route('admin.action.article',['delete',$article->id]) }}"><i class="fa fa-trash"></i> Delete</a>
                    </td>
                </tr>
            @endforeach
            @endif
            </tbody>
        </table>
      </div>
      <!-- /.row -->

  </div>
  <!-- /.container-fluid -->
@stop
