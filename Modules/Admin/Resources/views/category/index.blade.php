@extends('admin::layouts.master')
@section('content')
  <div class="container-fluid">
      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Danh Mục
              </h1>
              <ol class="breadcrumb">
                  <li class="">
                    <i class="fa fa-dashboard"></i> Trang Chủ
                  </li>
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Danh Mục
                  </li>
              </ol>
          </div>
      </div>
      <!-- /.row -->

      <div class="table-responsive">
          <h3>Quản lý danh mục <a href="{{ route('admin.create.category') }}" ><i class="fa fa-plus-circle"></i></a> </h3>
          <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
              <thead>
              <tr>
                <th class="th-sm">Stt

                </th>
                <th class="th-sm">Tên danh mục

                </th>          
                <th class="th-sm">Hiện trang chủ

                </th>
                <th class="th-sm">Thao tác

                </th>
              </tr>
              </thead>
              <tbody>
                @if(isset($categories))
                @foreach($categories as $category)
                  <tr>
                      <td>{{ $category->id }}</td>
                      <td>{{ $category->c_name }}</td>
                      <td>
                           <a href="{{ route('admin.action.category',['home',$category->id]) }}" class="label {{ $category->getHome($category->c_home)['class'] }}">{{ $category->getHome($category->c_home)['name'] }}</a>
                      </td>
                      <td>
                          <a class="btn btn-info" style="font-size: 12px;" href="{{ route('admin.edit.category',$category->id) }}"><i class="fa fa-pencil"></i> Cập nhật</a>
                          <a class="btn btn-danger" style="font-size: 12px;" href="{{ route('admin.action.category',['delete',$category->id]) }}"><i class="fa fa-trash"></i> Xóa</a>
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
