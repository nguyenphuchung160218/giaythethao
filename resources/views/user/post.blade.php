@extends('user.layout')
@section('content_user')
    <div class="col-lg-8 col-12">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-left text-center">Tổng quát:</h5>

                <div role="tabpanel" class="tab-pane" id="messages">
                                <div class="product-tab-content">
                                    <div class="col-xs-6" style="margin-top: 30px">
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                            <tr>
                                                <th>Tổng số đơn hàng</th>
                                                <th>Đã xử lý</th>
                                                <th>Chưa xử lý</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>{{$totalorder}}</td>
                                                <td>{{$totalorderDone}}</td>
                                                <td>{{$totalorder > 0 ? $totalorder - $totalorderDone : 0 }}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-xs-12" style="margin: 30px 0 30px 0">
                                        <h2 style="text-align: center">Chi tiết đơn hàng</h2>

                                        <table class="table table-striped">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Địa chỉ</th>
                                                <th>SĐT</th>
                                                <th>Tổng tiền</th>
                                                <th>Trạng thái</th>
                                                <th>Thời gian</th>
                                            </tr>
                                            @if($orders)
                                            @foreach($orders as $order)
                                            <tr>
                                            <td>{{$order->id}}</td>
                                            <td>{{$order->o_address}}</td>
                                            <td>{{$order->o_phone}}</td>
                                            <td>{{ number_format($order->o_total,0,',','.') }} VND</td>
                                            <td>
                                                @if ( $order->o_status == 1)
                                                    <a href="" class="label label-success">Đã xủ lý</a>
                                                @else
                                                    <a href="" class="label label-default">Chờ xủ lý</a>
                                                @endif
                                            </td>
                                            <td>{{ $order->created_at->format('d-m-Y') }}</td>
                                            </tr>
                                            @endforeach
                                            @endif
                                            </thead>
                                            <tbody>
                                          
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
            </div>
        </div>
    </div><!--end col-->
@stop
@section('script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('content');
    </script>
@stop
