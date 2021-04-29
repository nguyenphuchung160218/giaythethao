@extends('admin::layouts.master')
@section('content')
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">
                    Sản Phẩm
                </h1>
                <ol class="breadcrumb">
                    <li class="">
                        <i class="fa fa-dashboard"></i> Trang Chủ
                    </li>
                    <li class="active">
                        <i class="fa fa-dashboard"></i> Sản Phẩm
                    </li>
                </ol>
            </div>
        </div>
        <!-- /.row -->
        <div class="table-responsive">
            <h3>Quản lý sản phẩm <a href="{{ route('admin.create.product') }}" ><i class="fa fa-plus-circle"></i></a> </h3>
            <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
                <thead>
                <tr>
                  <th>Stt</th>
                  <th>Tên sản phẩm</th>
                  <th>Danh mục</th>
                  <th>Hình ảnh</th>
                  <th>Trạng thái</th>
                  <th>Nổi bật</th>
                  <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                    @if(isset($products))
                    @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->pro_name }}
                                <ul style="padding-left: 15px">
                                    <li><span>Giá: </span><span>{{ number_format($product->pro_price,0,',','.') }} đ</span></li>
                                    <li><span>Giảm: </span><span>{{ $product->pro_sale }}%</span></li>
                                    <li><span>Số lượng: </span><span>{{ $product->pro_number }}</span></li>
                                </ul>
                            </td>
                            <td>{{ $product->category->c_name }}</td>
                            <td>
                                <img src="{{ asset(pare_url_file($product->images[0]->i_avatar)) }}" class="img img-responsive" style="width: 80px;height: 80px;">
                            </td>
                            <td>
                                <a href="{{ route('admin.action.product',['active',$product->id]) }}" class="label {{ $product->getStatus($product->pro_active)['class'] }}">{{ $product->getStatus($product->pro_active)['name'] }}</a>
                            </td>
                            <td>
                                <a href="{{ route('admin.action.product',['hot',$product->id]) }}" class="label {{ $product->getHot($product->pro_hot)['class'] }}">{{ $product->getHot($product->pro_hot)['name'] }}</a>
                            </td>
                            <td>
                                <a class="btn btn-info" style="font-size: 12px;" href="{{ route('admin.edit.product',$product->id) }}"><i class="fa fa-pencil"></i> Cập nhật</a>
                                <a class="btn btn-danger" style="font-size: 12px;" href="{{ route('admin.action.product',['delete',$product->id]) }}"><i class="fa fa-trash"></i> Delete</a>
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
