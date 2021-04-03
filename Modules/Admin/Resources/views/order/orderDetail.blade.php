@if($ordersDetail)
    <table class="table">
        <thead>
        <tr>
            <th>Stt</th>
            <th>Tên sản phẩm</th>
            <th>Hình ảnh</th>
            <th>Giá</th>
            <th>Số lượng</th>
            <th>Tổng tiền</th>
        </tr>
        </thead>
        <tbody>
        @foreach($ordersDetail as $key => $orderDetail)
        <?php $stt=1 ?>
            <tr>
                <td><?php echo $stt ?></td>
                <td><a href="{{ route('get.detail.product',[Str::slug($orderDetail->product->pro_name),$orderDetail->or_product_id]) }}" target="_blank">{{ $orderDetail->product->pro_name }}</a></td>
                <td>
                    <img style="width: 80px;height: 60px;" src="{{ asset(pare_url_file($orderDetail->product->pro_avatar)) }}">
                </td>
                <td>{{ number_format($orderDetail->od_price,0,',','.') }} đ</td>
                <td>{{ $orderDetail->od_qty }}</td>
                <td>{{ number_format($orderDetail->od_qty * $orderDetail->od_price,0,',','.') }} đ</td>
            </tr>
        <?php $stt++ ?>
        @endforeach
        </tbody>
    </table>
@endif