<div style="border:8px solid #00b8e0;line-height:21px;padding:2px">
   <span class="im">
      <div class="adM">
         &nbsp;
      </div>
      <div style="padding:10px">
         <div class="adM">
            &nbsp;
         </div>
         <div><strong>Chào {{ $userName }}!</strong></div>
         <div>Cảm ơn Quý khách&nbsp;đã mua hàng của <a href="" target="_blank">ShoesShop</a></div>
      </div>
      <div style="background:none repeat scroll 0 0 #00b8e0;color:#ffffff;font-weight:bold;line-height:25px;min-height:27px;padding-left:10px">Thông tin về đơn đặt hàng của Quý khách</div>
   </span>
   <div style="padding:10px">
      <div>Mã đơn hàng: <strong>{{ $transactionId }}</strong></div>
      <table cellspacing="0" cellpadding="6" border="0" width="100%">
         <tbody>
            <tr>
               <td width="173px">Tên người đặt hàng </td>
               <td width="5px">:</td>
               <td>{{ $userName }}</td>
            </tr>
            <tr>
               <td>Địa chỉ  </td>
               <td width="5px">:</td>
               <td>{{ $transaction['o_address'] }}</td>
            </tr>
            <tr>
               <td>Email </td>
               <td width="5px">:</td>
               <td><a href="mailto:{{ $email }}" target="_blank">{{ $email }}</a></td>
            </tr>
            <tr>
               <td>Điện thoại </td>
               <td width="5px">:</td>
               <td>{{ $transaction['o_phone'] }}</td>
            </tr>
            <tr>
               <td>Thanh toán</td>
               <td width="5px">:</td>
               <td>{{ $transaction['o_type']==1 ? 'Đã thanh toán' : 'Chưa thanh toán'}}</td>
            </tr>
         </tbody>
      </table>
   </div>
   <div style="background:none repeat scroll 0 0 #00b8e0;color:#ffffff;font-weight:bold;line-height:25px;min-height:27px;padding-left:10px">Chi tiết đơn hàng</div>
   <p>  </p>
   <table width="964" cellspacing="0" cellpadding="6" border="1" align="center" style="border-style:solid;border-collapse:collapse;margin-top:2px">
      <thead style="background:#e7e7e7;line-height:12px">
         <tr>
            <th width="30">Stt</th>
            <th>Tên sản phẩm</th>
            <th width="117">Size</th>
            <th width="117">Giá</th>
            <th width="117">Số lượng</th>
            <th width="117">Tổng giá tiền</th>
         </tr>
      </thead>
      <tbody>
      	@foreach ($products as $product)
      	<?php $stt=1 ?>
         <tr>
            <td align="center"><strong><?php echo $stt ?></strong><br></td>
            <td><a href="">{{ $product->name }}</a></td>
            <td><strong>{{ $product->options->size }}</strong></td>
            <td><strong>{{ number_format($product->price,0,',','.') }} đ</strong></td>
            <td><strong>{{ $product->qty }}</strong></td>
            <td><span>{{ number_format($product->price*$product->qty,0,',','.') }} đ</span></td>
         </tr>
        <?php $stt++ ?>
        @endforeach
         <tr>
            <td colspan="5" align="right"><strong>Tổng:</strong></td>
            <td><strong>{{ number_format($transaction['o_total'],0,',','.') }} đ</strong></td>
         </tr>
      </tbody>
   </table>
   <div class="yj6qo ajU">
      <div id=":3i" class="ajR" role="button" tabindex="0" data-tooltip="Hiển thị nội dung được rút gọn" aria-label="Hiển thị nội dung được rút gọn" aria-expanded="false"><img class="ajT" src="//ssl.gstatic.com/ui/v1/icons/mail/images/cleardot.gif"></div>
   </div>
   <div class="adL">
      <div class="adm">
         <div id="q_46" class="ajR h4">
            <div class="ajT"></div>
         </div>
      </div>
      <div class="h5">
         <p></p>
         <div style="padding:10px">
            <p><a href="" target="_blank">ShoesShop</a>&nbsp;sẽ liên lạc với quý khách và xác nhận lại đơn hàng trong thời gian sớm nhất.<br>
               Cảm ơn Quý Khách,
            </p>
            <p>&nbsp;</p>
         </div>
      </div>
   </div>
</div>