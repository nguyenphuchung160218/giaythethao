@extends('admin::layouts.master')
@section('content')
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Đơn Hàng
              </h1>
              <ol class="breadcrumb">
                  <li class="">
                      <i class="fa fa-dashboard"></i> Trang Chủ
                  </li>
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Đơn Hàng
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
                <th>Stt</th>
                <th>Họ tên</th>
                <th>Địa chỉ</th>
                <th>Số điện thoại</th>
                <th>Tổng tiền</th>
                <th>Thanh toán</th>
                <th>Trạng thái</th>
                <th>Thời gian</th>
                <th>Thao tác</th>
              </tr>
              </thead>
              <tbody>
                  @foreach($orders as $order)
                    <tr>
                        <td>{{ $order->id }}</td>
                        <td>{{ isset($order->user->name) ? $order->user->name : '[N/A]' }}</td>
                        <td>{{ $order->o_address }}</td>
                        <td>{{ $order->o_phone }}</td>
                        <td>{{ number_format($order->o_total,0,',','.') }} đ</td>
                        <td>
                            @if ( $order->o_type == 1)
                                <p href="" class="label label-success">Online</p>
                                <span>{{ $order->vnp_BankCode }}</span>
                                <p style="margin: 0px">{{ $order->vnp_BankTranNo }}</p>

                            @else
                                <p href="" class="label label-info">Thường</p>
                            @endif
                        </td>
                        <td>
                          @if ( $order->o_status == 1)
                              <span href="" class="label label-success">Đã xủ lý</span>
                          @else
                              <a href="{{ route('admin.action.order',['status',$order->id]) }}" class="label label-default">Chờ xủ lý</a>
                          @endif
                        </td>
                        <td>{{ $order->created_at->format('d-m-Y') }}</td>
                        <td>
                          <a class="js_order_item btn btn-info" data-id="{{ $order->id }}" style="font-size: 12px;" href="{{ route('admin.detail.order',$order->id) }}"><i class="fa fa-eye"></i> Xem</a>
                          <a class="btn btn-danger" style="font-size: 12px;" href="{{ route('admin.action.order',['delete',$order->id]) }}"><i class="fa fa-trash"></i> Xóa</a>
                        </td>
                    </tr>
                @endforeach
              </tbody>
          </table>
      </div>
      <!-- /.row -->

  </div>
  <!-- /.container-fluid -->

  <!--js-->
  <div class="modal fade" id="myModalOrder" role="dialog">
      <div class="modal-dialog modal-lg">
          <!-- Modal content-->
          <div class="modal-content">
              <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                  <h4 class="modal-title">Chi tiết đơn hàng #<b class="order_id"></b></h4>
              </div>
              <div class="modal-body" id="md_content">
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal">Thoát</button>
              </div>
          </div>
      </div>
  </div>
@stop
@section('script')
    <script>
        $(function (){
            $(".js_order_item").click(function (event){
                event.preventDefault();
                let $this = $(this);
                let url = $this.attr('href');
                $("#md_content").html('')
                $(".order_id").text($this.attr('data-id'));
                $("#myModalOrder").modal('show');

                $.ajax({
                    url: url,
                }).done(function (result){
                    if(result)
                    {
                        $("#md_content").html('').append(result);
                    }
                });
            });
        })
    </script>
@stop
