@extends('admin::layouts.master')
@section('content')
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Đánh Giá
              </h1>
              <ol class="breadcrumb">
                  <li class="">
                      <i class="fa fa-dashboard"></i> Trang Chủ
                  </li>
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Đánh Giá
                  </li>
              </ol>
          </div>
      </div>
      <!-- /.row -->
      <div class="table-responsive">
          <h3>Quản lý danh mục <a href="" ><i class="fa fa-plus-circle"></i></a> </h3>
          <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
              <thead>
              <tr>
                <th class="th-sm">Stt

                </th>
                <th class="th-sm">Tên sản phẩm

                </th>
                <th class="th-sm">Tên người đánh giá

                </th>           
                <th class="th-sm"> Nội dung đánh giá

                </th>
                <th class="th-sm">Thao tác

                </th>
              </tr>
              </thead>
              <tbody>
              @if(isset($ratings))
                @foreach($ratings as $rating) 
                <tr>
                      <td>{{$rating->id}}</td>
                      <td>{{isset($rating->product->pro_name) ? $rating->product->pro_name : '[N\A]' }}</td>
                       <td>{{$rating->ra_name}}</td>
                      <td>{{$rating->ra_content}}</td>   
                      <td>
                            <a class="btn btn-danger" style="font-size: 12px;" href="{{ route('admin.action.rating',['delete',$rating->id]) }}"><i class="fa fa-pen"></i> Xóa</a>
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
