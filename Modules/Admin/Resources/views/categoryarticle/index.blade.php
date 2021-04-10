@extends('admin::layouts.master')
@section('content')
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Danh Mục bài viết
              </h1>
              <ol class="breadcrumb">
                  <li class="">
                    <i class="fa fa-dashboard"></i> Trang Chủ
                  </li>
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Danh Mục bài viết
                  </li>
              </ol>
          </div>
      </div>
      <!-- /.row -->

      <div class="table-responsive">
          <h3>Quản lý danh mục bài viết <a href="{{ route('admin.create.categoryarticle') }}" ><i class="fa fa-plus-circle"></i></a> </h3>
          <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
              <thead>
              <tr>
                <th class="th-sm">Stt

                </th>
                <th class="th-sm">Tên danh mục bài viết

                </th>          
                <th class="th-sm">Hiện trang chủ

                </th>
                <th class="th-sm">Thao tác

                </th>
              </tr>
              </thead>
              <tbody>
                @if(isset($a_categories))
                @foreach($a_categories as $a_category)
                  <tr>
                      <td>{{ $a_category->id }}</td>
                      <td>{{ $a_category->c_name_article }}</td>
                      <td>
                         <a href="{{ route('admin.action.categoryarticle',['home',$a_category->id]) }}" class="label {{ $a_category->getHome($a_category->c_hot_article)['class'] }}">{{ $a_category->getHome($a_category->c_hot_article)['name'] }}</a> 
                      </td>
                      <td>
                          <a class="btn btn-info" style="font-size: 12px;" href="{{ route('admin.edit.categoryarticle',$a_category->id) }}"><i class="fa fa-pencil"></i> Cập nhật</a>
                          <a class="btn btn-danger" style="font-size: 12px;" href="{{ route('admin.action.categoryarticle',['delete',$a_category->id]) }}"><i class="fa fa-trash"></i> Xóa</a>
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
