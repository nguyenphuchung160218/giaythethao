@extends('layout.app')
@section('content')
<!-- Hero Start -->
        <section class="bg-half bg-light d-table w-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <div class="page-next-level">
                            <h4 class="title"> Về Chúng Tôi </h4>
                            <div class="page-next">
                                <nav aria-label="breadcrumb" class="d-inline-block">
                                    <ul class="breadcrumb bg-white rounded shadow mb-0">
                                        <li class="breadcrumb-item"><a href="index.html">Trang Chủ</a></li>
                                        <li class="breadcrumb-item"><a href="#">Docs</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Về Chúng Tôi</li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>  <!--end col-->
                </div><!--end row-->
            </div> <!--end container-->
        </section><!--end section-->
        <!-- Hero End -->

        <!-- Shape Start -->
        <div class="position-relative">
            <div class="shape overflow-hidden text-white">
                <svg viewBox="0 0 2880 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M0 48H1437.5H2880V0H2160C1442.5 52 720 0 720 0H0V48Z" fill="currentColor"></path>
                </svg>
            </div>
        </div>
        <!--Shape End-->

        <!-- Start -->
        <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-4 col-12 d-none d-md-block">
                        <div class="sticky-bar component-wrapper bg-light rounded shadow p-4">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-3"><a href="#typography" class="active mouse-down h6 text-dark">Giới thiệu ShoesShop</a></li>
                                <li class="mb-3"><a href="#display" class="mouse-down h6 text-dark">Hướng dẫn chọn size giày</a></li>
                                <li class="mb-3"><a href="#bg-colors" class="mouse-down h6 text-dark">Theo dõi đơn hàng</a></li>
                                <li class="mb-3"><a href="#text-colors" class="mouse-down h6 text-dark">Câu hỏi thường gặp</a></li>
                                <li class="mb-3"><a href="#buttons" class="mouse-down h6 text-dark">Đặt hàng & Thanh toán</a></li>
                                <li class="mb-3"><a href="#dropdowns" class="mouse-down h6 text-dark">Giao hàng & Nhận hàng</a></li>
                                <li class="mb-3"><a href="#badges" class="mouse-down h6 text-dark">Đổi trả & Hoàn tiền</a></li>
                                <li class="mb-3"><a href="#alerts" class="mouse-down h6 text-dark">Khuyến Mại & Mã Giảm Giá</a></li>
                                <li class="mb-3"><a href="#accordions" class="mouse-down h6 text-dark">Chính sách bảo mật</a></li>
                                <li class="mb-3"><a href="#cards" class="mouse-down h6 text-dark">Điều khoản dịch vụ</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8 col-12 mt-4 pt-2 mt-sm-0 pt-sm-0">
                        <div class="row row-cols-1 ml-lg-2">   
                            <!-- Typography Heading Start -->
                            <div class="col" id="typography">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Giới thiệu Giày HODU </h4>
                                    </div>
        
                                    <div class="p-4">                                      
                                        <div class="content-page ">
                                            <p><b>Giày HODU </b><span>là trang thương mại điện tử chuyên cung cấp và bán lẻ các sản phẩm </span><b>giày thời trang cao cấp, giày thể thao hàng hiệu</b><span> hàng đầu tại Việt Nam.&nbsp;</span></p><p><b>Giày HODU</b><span> ra đời với sứ mệnh: Đem cả thế giới giày hàng hiệu đến ngôi nhà của bạn chỉ trong vài cái click chuột. Đơn giản - Nhanh chóng và Siêu Tiện lợi.&nbsp;</span></p><p><span>Mục tiêu về chiến lược: </span><b>Giày HODU </b><span>phấn đấu trở thành một sàn thương mại điện tử về </span><b>giày thể thao</b> <b>cao cấp</b><span> hàng đầu Việt Nam và vươn xa ra thị trường thế giới, góp phần tạo nên chất lượng và trải nghiệm tốt nhất cho người Việt với giá cả phải chăng.</span></p><p><b>Giày HODU </b><span>hứa hẹn mang đến cho các khách hàng thân yêu những đôi </span><b>giày thể thao</b><span> thời thượng xịn xò, trẻ trung, năng động và cá tính từ những thương hiệu danh tiếng trên thế giới như: </span><b>Nike</b><span>, </span><b>Adidas, Gucci</b><span>, </span><b>Fila, Puma, Converse</b><span>...&nbsp;</span></p><p><span>Tất cả những gì bạn cần làm là nhấp chuột đặt hàng và </span><b>Giày HODU </b><span>sẽ hoàn thành phần còn lại để những đôi </span><b>giày cao cấp hàng hiệu</b><span> được chuyển đến tận tay khách hàng với trải nghiệm tuyệt vời mà đội ngũ </span><b>Giày HODU</b><span> đã nỗ lực không ngừng nghỉ vì những khách hàng thân yêu của mình.</span></p><p><span>Đội ngũ Giày HODU!</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Typography Heading End -->

                            <!-- Display Heading Start -->
                            <div class="col mt-4 pt-2" id="display">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Hướng dẫn chọn size giày </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <div class="content-page ">
                                            <p>Việc lựa chọn size giày phù hợp với đôi chân là vô cùng cần thiết, đóng vai trò quan trọng giúp bảo vệ đôi chân khỏe mạnh hơn. Do đó, để mua đôi giày làm quà tặng cho người thân yêu hoặc mua giày cho mình phù hợp với đôi chân nhất thì bạn cùng tham khảo bảng size giày chuẩn dưới đây.</p>
                                            <p><img src=""></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Display Button End -->

                            <!-- BG Color Start -->
                            <div class="col mt-4 pt-2" id="bg-colors">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Theo dõi đơn hàng </h4>
                                    </div>

                                    <div class="p-4">                            
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- BG Color End -->


                            <!-- Text Color Start -->
                            <div class="col mt-4 pt-2" id="text-colors">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Câu hỏi thường gặp </h4>
                                    </div>
        
                                    <div class="p-4">                                     
                                        <div class="content-page ">
                                            <div class="clearfix description-page"><div><strong><span>I. GIAO HÀNG, VẬN CHUYỂN</span></strong></div><div><br></div><div><strong>1. Nếu tôi đặt hàng từ Giày HODU online, tôi có được giao hàng tận nơi không?</strong></div><div><br></div><div>Nếu đặt hàng Giày HODU online bạn sẽ được giao hàng trực tiếp tận nơi.</div><div><br></div><div><strong>2. Tôi phải trả phí vận chuyển như thế nào?</strong></div><div><br></div><div>Khách hàng sẽ được miễn phí 100% cước vận chuyển trong nước với tất cả các đơn hàng.</div><div><br></div><div><strong>3. Tôi ở Tỉnh, tôi sẽ nhận hàng trong thời gian bao lâu?</strong></div><div><br></div><div>Ở tỉnh bạn sẽ được nhận hàng trong vòng 4 - 5 ngày (tính theo ngày làm việc) kể từ ngày xác nhận đơn hàng.</div><div><br></div><div><strong>4. Nếu trả lại sản phẩm ai sẽ là người chịu phí vận chuyển?</strong></div><div><br></div><div>Khách hàng sẽ chịu phí vận chuyển khi chuyển hoàn sản phẩm về cho Giày HODU.</div><div><br></div><div><strong>5. Tôi có thể nhận bưu kiện tại địa chỉ công ty tôi làm việc được không?</strong></div><div><br></div><div>Vâng, bưu kiện của bạn có thể gửi đến địa chỉ văn phòng. Xin vui lòng nhập địa chỉ và tên họ đầy đủ của quý khách khi đặt hàng.</div><div><br></div><div><strong>6. Tôi có thể nhận được lịch giao hàng như thế nào?</strong></div><div><br></div><div>Khách hàng sẽ được bộ phận đặt hàng liên hệ trực tiếp để thông báo lịch giao hàng.</div><div><br></div><div><span><strong>II. HOÀN TRẢ, ĐỔI SẢN PHẨM</strong></span></div><div><br></div><div><strong>1. Quy đinh hoàn trả và đổi sản phẩm của Giày HODU như thế nào?</strong></div><div><br></div><div>Bạn hãy tham khảo chính sách đổi trả sản phẩm của Giày HODU, để được cung cấp thông tin đầy đủ và chi tiết nhất.</div><div><br></div><div><strong>2. Tôi sẽ nhận lại sản phẩm đổi trong thời gian bao lâu?</strong></div><div><br></div><div>Bạn hãy tham khảo trang thanh toán giao nhận của Giày HODU, để được cung cấp thông tin đầy đủ và chi tiết nhất.&nbsp;</div><div><br></div><div><strong>3. &nbsp;Nếu đổi trả tôi không mang theo hoá đơn và phiếu thông tin sản phẩm thì có được đổi không?</strong></div><div><br></div><div>Trường hợp, khách hàng không có hóa đơn hoặc phiếu thông tin sản phẩm thì phải chứng minh ngày mua và nhân viên sẽ đối soát lại với hệ thống để hỗ trợ khách hàng nhanh nhất.</div><div><br></div><div><strong>4. Lỗi như thế nào mới được gọi là lỗi về chất lượng sản phẩm</strong></div><div><br></div><div><em>Đối với giày dép:&nbsp;</em></div><div><br></div><div>Lỗi chất lượng sản phẩm như: Gót không vững (bị lắc); Bong si, tróc si (lão si). Một số trường hợp khác Giày HODU sẽ kiểm tra nguyên nhân trước khi giải quyết.</div><div><em></em><br></div><div><br></div><div><strong>5. &nbsp;Có được đổi sản phẩm mới hoặc hoàn trả tiền không?</strong></div><div><br></div><div>Quý khách sẽ được đổi trả và hoàn tiền trong mọi trường hợp.</div><div><br></div><div><strong>6. Làm thế nào để được đổi hàng?&nbsp;</strong></div><div><br></div><div>Bạn hãy tham khảo chính sách đổi trả hàng của&nbsp;Giày HODU.</div><div><br></div><div><strong>7. &nbsp;Có phải tính phí vận chuyển khi đổi trả sản phẩm?</strong></div><div><br></div><div>Khách hàng sẽ chịu phí vận chuyển khi gửi trả sản phẩm hoàn về cho Giày HODU.</div><div><br></div><div><strong>8. &nbsp;Tôi muốn đổi hàng vì size, màu sắc không đúng có được không?</strong></div><div><br></div><div>Khách hàng được đổi - trả với bất kì lý do gì trong thời gian đổi trả 90 ngày cho sản phẩm giày dép, 30 ngày cho túi và phụ kiện.</div><div><br></div><div><strong>9. Tôi đã đặt hàng, giờ muốn huỷ đơn hàng phải làm sao?</strong><br><strong></strong></div><div><br></div><div>Quý khách vui lòng liên hệ Giày HODU qua số 0931907058, chúng tôi sẽ hủy đơn hàng cho qúy khách.</div><div><br><strong></strong></div><div><span><strong>III. ĐẶT HÀNG VÀ THANH TOÁN</strong></span></div><div><br></div><div><strong>1. &nbsp;Tôi có thể hủy đặt hàng khi chưa nhận được sản phẩm không?</strong></div><div><br></div><div>Khách hàng có thể huỷ đặt hàng khi chưa nhận được sản phẩm ngay cả khi đơn hàng đã được giao cho đơn vị vận chuyển.</div><div><br></div><div><strong>2. &nbsp;Khi đặt hàng, tôi phải thanh toán như thế nào?</strong></div><div><br></div><div>Khách hàng sẽ nhận hàng, nhân viên bưu điện sẽ thu tiền trực tiếp từ khách hàng.</div><div><br></div><div><strong>3. &nbsp;Nếu tôi mua sản phẩm với số lượng nhiều thì giá có được giảm không?</strong></div><div><br></div><div>Khi mua hàng với số lượng nhiều khách hàng sẽ được hưởng chế độ ưu đãi, giảm giá ngay tại thời điểm mua hàng.</div><div><br></div><div><strong>4. &nbsp;Làm thế nào để đặt hàng GIÀY HODU?</strong></div><div><br></div><div>Rất đơn giản, bạn hãy truy cập trang web: GIAYHODU.VN để đặt hàng hoặc gửi email: giayhodu@gmail.com, gọi điện thoại số: 0931907058 để đặt sản phẩm.</div><div><br></div><div><strong>5. &nbsp;Làm sao để biết sản phẩm còn hàng hay hết hàng?</strong></div><div><br></div><div>Trên website GIÀY HODU sẽ cung cấp thông tin sản phẩm đang còn hàng hoặc hết hàng cho khách hàng tham khảo.</div><div><br></div><div><strong>6. &nbsp;Đặt hàng trực tuyến có những rủi ro gì không?</strong></div><div><br></div><div>Với GIÀY HODU, khách hàng không phải lo lắng, vì chúng tôi cung cấp sản phẩm chất lượng tốt, giá cả phải chăng. Đặc biệt, khách hàng sẽ nhận được sản phẩm và thanh toán cùng một thời điểm.</div><div><br></div><div><strong>7. Tôi muốn biết cách liên hệ tới Dịch vụ khách hàng và thời gian có thể tư vấn khách hàng?</strong></div><div><br></div><div><em>Quý khách có thể liên hệ Dịch vụ khách hàng theo thông tin sau:&nbsp;</em></div><div><br></div><div>Địa chỉ: 49 Tố Hữu - Hải Châu - Đà Nẵng<br>Điện thoại: 0931907058<br>Mail: cskh@giayhodu.vn</div><div><br></div></div>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->                            
                            <!-- Text Color End -->
                            
                            <!-- Buttons Start -->
                            <div class="col mt-4 pt-2" id="buttons">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Đặt hàng & Thanh toán</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <div class="content-page ">
                                            <h4><strong>1. Tại sao đơn hàng của tôi bị hủy?</strong></h4><p>Đơn hàng của Quý khách sẽ bị hủy trong các trường hợp sau:</p><ul><li>Bộ phận hỗ trợ xác nhận đơn hàng đã cố gắng tiến hành gọi 3 cuộc gọi điện thoại nhưng vẫn không thể liên hệ được với Quý khách.</li><li>Đơn hàng bị sai giá, hoặc mã ưu đãi không hợp lệ.</li><li>Đơn hàng bị cảnh báo phân loại có tính rủi ro cao (do người đặt hàng thiếu nghiêm túc, hoặc đặt hàng nhiều lần nhưng phát hàng không thành công)</li><li>Sản phẩm Quý khách đặt hiện đã hết hàng.&nbsp;</li></ul><h4><strong>2. Điều gì xảy ra nếu tôi không thể tìm thấy (các) sản phẩm tôi đang tìm?</strong></h4><p>Quý khách có thể tìm sản phẩm bằng cách nhập các từ khóa liên quan đến sản phẩm trong ô Tìm Kiếm.</p><p>Một mẹo tìm kiếm là Quý khách hãy thử tìm với những từ khóa đơn giản, và chi tiết dần. Ví dụ: giay Nike air max, giày adidas</p><p>Trong trường hợp Quý khách không thể tìm thấy sản phẩm mong muốn, vui lòng<span>&nbsp;</span>liên hệ<span>&nbsp;</span>chúng tôi để được hỗ trợ.&nbsp;</p><h4><strong>3. Phương thức thanh toán nào được chấp nhận?</strong></h4><p>Tại Giày HODU, chúng tôi chấp nhận các tùy chọn thanh toán sau:</p><ul><li>Thanh toán tiền mặt khi nhận hàng (Toàn quốc)</li><li>VNPay (ATM/Visa/MasterCard/JCB/QR Pay trên Mobile Banking)</li><li>Ví Momo</li></ul><h4><strong>4. Làm thế nào để tôi có thể thanh toán?</strong></h4><p>Hiện tại Giày HODU hỗ trợ 02 hình thức thanh toán, giúp bạn chủ động và thuận tiện hơn trong quá trình giao hàng:<br><br><strong>4.1. Thanh toán trực tuyến trên website&nbsp;</strong><br>Đối với hình thức này, sau khi bạn đã tạo đơn hàng thành công ở trên website bạn vui lòng chuyển khoản tổng giá trị đơn hàng qua tài khoản sau đây:<br><br><strong>Thông tin chuyển khoản:</strong><br><strong>*** NGÂN HÀNG ACB</strong><br>ACB chi nhánh Đà Nẵng&nbsp;<br>Số tài khoản: 10453707<br>Chủ tài khoản: Phan Vũ Hoàng Dung</p><p><strong>*** NGÂN HÀNG VIETCOMBANK</strong><br>Vietcombank chi nhánh Đà Nẵng<br>Số tài khoản: 1013680777<br>Chủ tài khoản: Phan Vũ Hoàng Dung</p><p>Khi bạn chuyển khoản, vui lòng nhập mã đơn hàng của bạn tại mục “Ghi chú”. Sau khi chuyển khoản, quý khách vui lòng gọi hoặc nhắn tin để Giày HODU xác nhận đơn hàng.<br>Sau khi bạn đã thanh toán và chuyển khoản xong, chúng tôi sẽ giao hàng đến cho bạn theo thời gian quy định tại “Chính sách giao hàng” của chúng tôi.</p><p><span><strong>* Lưu ý:</strong></span><span>&nbsp;</span>Ngay cả khi không có tài khoản ngân hàng, quý khách vẫn có thể chuyển tiền. Khi ra ngân hàng chuyển tiển – Trên phần ủy nhiệm chi, tại mục Nội dung chuyển tiền, quý khách hãy chèn thêm cú pháp: [Họ tên, thanh toán cho đơn hàng số “HODU****” ]. Trong đó: HODU*** là Mã đơn hàng.<br><br><strong>4.2. Thanh toán khi nhận hàng (COD - Cash On Delivery)</strong><br>Với hình thức thanh toán khi nhận hàng, bạn sẽ chỉ thanh toán khi đơn hàng đến tay của bạn và bạn chỉ cần trả đúng số tiền in trên hóa đơn. Nếu bạn thấy giá trị trên hóa đơn không chính xác, bạn vui lòng liên hệ lại ngay cho chúng tôi qua số hotline 0931.907.058 nhân viên Giày HODU sẽ hỗ trợ bạn.</p><h4><strong>5. Tôi phải làm gì nếu câu hỏi của tôi không được đề cập ở đây?</strong></h4><p>Nếu Quý khách không thể tìm thấy câu trả lời cho câu hỏi của mình tại đây, vui lòng liên hệ với chúng tôi tại mục<span>&nbsp;</span>Liên Hệ.</p><p>Các chuyên gia tư vấn của chúng tôi sẽ sẵn lòng giúp đỡ Quý khách.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Buttons End -->

                            <!-- Dropdown Start -->
                            <div class="col mt-4 pt-2" id="dropdowns">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Giao hàng & Nhận hàng </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <div class="content-page ">
                                            <h4><strong>1. Phí vận chuyển của tôi là bao nhiêu?</strong></h4><p>Khi tiến hành đặt mua, Quý khách sẽ được yêu cầu chọn phương thức giao hàng cho (các) sản phẩm của mình. Tổng chi phí vận chuyển của Quý khách sẽ được tính toán tự động trong quá trình thanh toán trước khi hoàn thành đơn hàng của bạn. Hiện tại Giày HODU đang miễn phí vận chuyển cho tất cả các đơn hàng của mình.<a href="../pages/phi-van-chuyen" data-mce-href="../pages/phi-van-chuyen"></a></p><h4><strong>2. Mất bao lâu để giao hàng?</strong></h4><p>Sau khi Quý khách đã đặt hàng thành công, đội ngũ Chăm sóc khách hàng của chúng tôi sẽ tiến hành xác nhận đơn hàng qua điện thoại, đồng thời gửi cập nhật trạng thái đơn hàng đến quý khách qua email và tin nhắn SMS (khi khả dụng).</p><p>Sau khi quá trình xác nhận đơn hàng thành công, đơn hàng của Quý khách sẽ được xử lý trong vòng 1-3 ngày làm việc trước khi sẵn sàng để giao hàng.</p><p>Thời gian giao hàng&nbsp; tùy thuộc vào địa chỉ giao hàng sau khi xác nhận đơn hàng, thời gian giao hàng có thể giao động từ 3-7 ngày làm việc</p><p><strong>Lưu ý:</strong><span>&nbsp;</span>Thời gian giao hàng chính thức có thể chậm hơn dự kiến với các đơn hàng được đặt vào ngày lễ hoặc khi chúng tôi có quá nhiều đơn hàng.</p><h4><strong>3. Ngày lễ và ngày đóng cửa kho hàng</strong></h4><p>Xin lưu ý rằng (các) kho hàng của chúng tôi đóng cửa vào các ngày lễ tại Việt Nam. Đối với các đơn hàng được đặt trước hoặc vào ngày lễ, thời gian xử lý sẽ kéo dài thêm 5-7 ngày làm việc.</p><p><strong>Thông báo Đặc biệt:</strong><span>&nbsp;</span>Thời gian giao hàng có thể chậm hơn dự kiến trong thời gian kho hàng nghỉ lễ và khi chúng tôi có quá nhiều đơn hàng.</p><h4><strong>4.&nbsp;Làm thế nào để tôi theo dõi đơn hàng và tình trạng giao hàng?</strong></h4><p>Khi sản phẩm của Quý khách được gửi đi từ kho của chúng tôi, Quý khách sẽ nhận được email xác nhận giao hàng kèm theo mã số theo dõi và đường link liên kết để theo dõi đơn hàng trực tuyến.</p><h4><strong>5. Tôi có thể chọn giờ giao hàng không?</strong></h4><p>Hiện tại các đối tác giao nhận của chúng tôi vẫn chưa thể hỗ trợ quý khách chọn giờ giao hàng. Tuy nhiên mong Quý khách yên tâm chúng tôi sẽ sớm cải thiện vấn đề này để mang lại cho quý khách trải nghiệm mua sắm tốt hơn.&nbsp;</p><h4><strong>6. Tôi nên làm gì nếu không thể nhận sản phẩm tại thời điểm giao hàng?</strong></h4><p>Nếu Quý khách không thể nhận sản phẩm tại thời điểm giao hàng, nhân viên bưu tác giao hàng của hãng vận chuyển sẽ cố gắng giao lại vào một ngày khác. Xin vui lòng<span>&nbsp;</span>liên hệ<span>&nbsp;</span>với chúng tôi để được hỗ trợ thêm.</p><h4><strong>7. Tôi nên làm gì nếu nhận được không đúng sản phẩm đã đặt hàng?</strong></h4><p>Nếu Quý khách nhận được không đúng sản phẩm, xin vui lòng<span>&nbsp;</span>liên hệ<a href="../pages/lien-he" data-mce-href="../pages/lien-he"><span>&nbsp;</span></a>với chúng tôi để được hỗ trợ thêm.</p><h4><strong>8. Tôi có thể thay đổi địa chỉ giao hàng hoặc thay đổi/hủy đơn hàng nếu hàng chưa được giao không?</strong></h4><p>Trường hợp đơn hàng của Quý khách vẫn trong thời gian xử lý và chưa sẵn sàng để bàn giao cho hãng vận chuyển thì Quý khách có thể liên hệ Tổng Đài để yêu cầu hỗ trợ cập nhập địa chỉ nhận hàng khác, hoặc yêu cầu hủy đơn hàng.</p><p>Trường hợp đơn hàng của Quý khách đã được bàn giao cho hãng vận chuyển và đang trên đường giao hàng thì rất tiếc chúng tôi không thể hỗ trợ Quý khách cập nhập địa chỉ nhận hàng khác, hoặc hủy đơn hàng. Trong trường hợp này, Quý khách có thể từ chối nhận hàng.</p><h4><strong>9. Giá bán và thanh toán</strong></h4><p>Chúng tôi nỗ lực hết sức để cung cấp cho bạn thông tin đầy đủ và chính xác về hàng hóa, mô tả và giá cả, nhưng vẫn có thể xảy ra lỗi.</p><p>Nếu chúng tôi nhận thấy có bất kỳ lỗi nào về giá hàng hóa, chúng tôi sẽ thông báo cho bạn trong thời gian sớm nhất có thể và để bạn tự đưa ra quyết định về việc bạn có xác nhận đơn hàng với mức giá đúng hay hủy đơn hàng của mình.</p><p>Nếu chúng tôi không thể liên lạc với bạn trong vòng bảy ngày làm việc, đơn hàng của bạn sẽ bị hủy. Trong trường hợp như vậy, nếu bạn đã thanh toán đầy đủ cho đơn hàng của mình, bạn sẽ được hoàn tiền đầy đủ trong vòng 1 ngày làm việc.</p><p>Chúng tôi không bị ràng buộc phải tuân thủ đơn hàng nếu giá hiển thị trên trang web này không chính xác (kể cả sau khi đơn hàng của bạn đã được chấp nhận).</p><h4><strong>10. Quyền mua hàng</strong></h4><p>Chúng tôi bảo lưu quyền của mình để giới hạn số lượng của một số mặt hàng được mua bởi mỗi khách hàng theo quy định trên trang web của chúng tôi. Nếu chúng tôi nhận thấy bất kỳ đơn hàng nào vượt quá giới hạn, chúng tôi có quyền hủy đơn hàng đó mà không cần thông báo trước và bạn sẽ được hoàn tiền đầy đủ thông qua kênh thanh toán của mình.</p><h4><strong>11. Có khu vực hạn chế nào mà Giày HODU không giao hàng đến không?</strong></h4><p>Giày HODU có thể giao hàng đến mọi tỉnh thành, hải đảo và khu vực trong nước, thông qua&nbsp;liên kết với các nhà vận chuyển lớn, bao gồm: Bưu điện Việt Nam, Giao Hàng Nhanh, và ViettelPost để đảm bảo việc giao hàng được thực hiện nhanh chóng và đúng hẹn.</p><p>Tuy nhiên, một số sản phẩm đặc thù có thể có chính sách giao hàng riêng, mà sẽ được thông báo cụ thể trên trang thông tin của sản phẩm ấy.&nbsp;</p><h4><strong>12. Giày HODU có giao hàng đi nước ngoài không?</strong></h4><p>Rất tiếc, hiện nay Giày HODU chưa cung cấp dịch vụ này.</p><h4><strong>13. Giày HODU có giao hàng đến địa chỉ làm việc của tôi không?</strong></h4><p>Giày HODU sẽ giao hàng đến địa chỉ quý khách đã đăng ký tại trang thanh toán, không phân biệt đó là địa chỉ nhà riêng hay địa chỉ văn phòng làm việc.</p><h4><strong>14. Trường hợp nào nằm ngoài phạm vi cam kết của Giày HODU về việc không giao hàng đúng hẹn?</strong></h4><p>Các trường hợp sau đây nằm ngoài phạm vị cam kết của Giày HODU về việc không giao hàng đúng hẹn:</p><ul><li>Quý khách không cung cấp chính xác, đầy đủ địa chỉ giao hàng và thông tin liên lạc trong quá trình đặt hàng (phần "Thông tin Giao hàng")</li><li>Giày HODU nhiều lần liên hệ quý khách qua điện thoại, email nhưng không nhận được phản hồi.</li><li>Thời gian giao đến địa chỉ giao hàng đã được ấn định trước với quý khách nhưng quý khách không sẵn sàng để nhận hàng.</li><li>Giày HODU đã giao hàng đúng hẹn theo "Thông tin Giao hàng" nhưng quý khách để nhân viên giao hàng chờ quá 10 phút để nhận hàng và mọi nỗ lực của Giày HODU nhằm liên hệ với quý khách đều không thành công.</li><li>Những trường hợp bất khả kháng như thiên tai (bao gồm động đất, gió xoáy, tai nạn giao thông,...), hoặc trường hợp gián đoạn mạng lưới giao thông trên quy mô toàn quốc hay quy mô địa phương và những trục trặc cơ học xảy ra cho các phương tiện vận chuyển hay máy móc.</li></ul><h4><strong>15. Làm thế nào để tôi biết sản phẩm có chính sách giao hàng riêng?</strong></h4><p>Những sản phẩm có giới hạn về khu vực giao hàng đều có nhãn thông báo "Chỉ giao hàng tại ..." và thông tin lưu ý được ghi chú rõ trong phần chi tiết sản phẩm ấy.&nbsp;</p><h4><strong>16. Tôi phải làm gì nếu câu hỏi của tôi không được đề cập ở đây?</strong></h4><p>Nếu Quý khách không thể tìm thấy câu trả lời cho câu hỏi của mình tại đây, vui lòng liên hệ với chúng tôi tại mục<span>&nbsp;</span>Liên Hệ.</p><p>Các chuyên gia tư vấn của chúng tôi sẽ sẵn lòng giúp đỡ Quý khách.</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Dropdown End -->

                            <!-- Badges Start -->
                            <div class="col mt-4 pt-2" id="badges">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Đổi trả & Hoàn tiền </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <div class="content-page ">
                                            <h4><strong>1. Đổi trả &amp; hoàn tiền:</strong></h4><p>Vui lòng liên lạc với đội ngũ hỗ trợ của Giày HODU để được hỗ trợ</p><p>Thông tin liên hệ<br>Địa chỉ: 49 Tố Hữu - Hải Châu - Đà Nẵng<br>Điện thoại: 0931907058<br>Email: cskh@giayhodu.vn</p><h4><strong>2. Khi nào tôi được hoàn tiền?</strong></h4><p>Chúng tôi sẽ xử lý hoàn tiền cho Quý khách ngay sau khi sản phẩm bạn trả lại được kiểm tra bởi nhóm đảm bảo chất lượng của chúng tôi và được xác nhận rằng sản phẩm phù hợp với chính sách hoàn tiền của chúng tôi. Quy trình kiểm tra chất lượng có thể mất 1-7 ngày làm việc, mặc dù nhìn chung thời gian có thể ngắn hơn.</p><p>Sau khi yêu cầu hoàn tiền của Quý khách đã được duyệt, phải mất 1-2 ngày để Giày HODU hoàn tiền vào tài khoản thẻ, hay tài khoản ngân hàng của Quý khách.</p><p>Điều quan trọng là Quý khách đảm bảo cung cấp chi tiết tài khoản ngân hàng đầy đủ và chính xác (tên tài khoản, tên ngân hàng, số tài khoản chính xác) để tránh mọi sự chậm trễ không cần thiết do thông tin không chính xác.</p><p>Nếu Quý khách không có tài khoản ngân hàng, chúng tôi sẽ không thể xử lý hoàn tiền trực tiếp. Thay vào đó, Quý khách sẽ nhận được một mã giảm giá bằng với giá trị hoàn tiền để sử dụng cho lần mua hàng trực tuyến tiếp theo của mình.</p><p>Để biết thêm thông tin và đặc biệt là nếu Quý khách vẫn chưa được hoàn tiền trong vòng 21 ngày làm việc, vui lòng gọi cho Tổng Đài của chúng tôi và thông báo chi tiết về đơn hàng của Quý khách và về yêu cầu chưa được xử lý của Quý khách.</p><h4><strong>3. Làm thế nào để kiểm tra tình trạng đổi trả hàng?</strong></h4><p>Quý khách có thể theo dõi tình trạng đổi/trả hàng của mình bằng cách gọi điện về số Tổng Đài&nbsp;hoặc gửi yêu cầu hỗ trợ tại phần<span>&nbsp;</span>Liên Hệ</p><h4><strong>4. Sau bao lâu tôi có thể nhận được kết quả đổi trả hàng của tôi?</strong></h4><p>Việc gửi sản phẩm thay thế hoặc hoàn tiền chỉ được bắt đầu sau khi chúng tôi đã hoàn tất việc kiểm tra đánh giá sản phẩm quý khách gửi lại.&nbsp;<br>Quy trình đánh giá chất lượng sản phẩm này có thể cần từ 1-7 ngày làm việc.</p><h4><strong>5. Đã quá 14 ngày kể từ ngày nhận hàng, tôi có thể đổi trả hàng không?</strong></h4><p>Thời hạn cho phép đổi/trả của sản phẩm đã hết hiệu lực; vì vậy, rất tiếc chúng tôi không thể thực hiện yêu cầu của quý khách.<br>Quý khách vui lòng tham khảo thêm chính sách bảo hành chính hãng&nbsp;tại đây.</p><h4><strong>6. Giày HODU có thanh toán tiền phí vận chuyển cho sản phẩm đổi trả?</strong></h4><p>Quý khách được MIỄN PHÍ toàn bộ chi phí vận chuyển khứ hồi khi thực hiện đổi/trả sản phẩm, nhưng<span>&nbsp;</span><strong>không bao gồm</strong><span>&nbsp;</span>các trường hợp đổi trả sản phẩm với lý do sau: không ưng ý, đổi ý, không vừa.&nbsp;</p><h4><strong>7. Tôi phải làm gì nếu câu hỏi của tôi không được đề cập ở đây?</strong></h4><p>Nếu Quý khách không thể tìm thấy câu trả lời cho câu hỏi của mình tại đây, vui lòng liên hệ với chúng tôi tại mục<span>&nbsp;</span>Liên Hệ.</p><p>Các chuyên gia tư vấn của chúng tôi sẽ sẵn lòng giúp đỡ Quý khách.</p><p>&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Badges End -->

                            <!-- Alert Start -->
                            <div class="col mt-4 pt-2" id="alerts">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Khuyến Mại & Mã Giảm Giá </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <div class="content-page ">
                                            <h4><strong>1. Làm thế nào để sử dụng mã giảm giá (mã ưu đãi, mã tiền điện tử, voucher)?</strong></h4><p>Sau khi đồng ý điều khoản đặt mua và bấm nút Tiến Hành Đặt Mua ở trang Đơn Hàng (Giỏ Hàng), Quý khách nhập đầy đủ thông tin nhận hàng của mình ở trang thanh toán, và nhập mã của phiếu giảm giá vào ô "Mã giảm giá" và nhấn nút "Sử Dụng".</p><p><img src="https://file.hstatic.net/1000405402/file/hodu-voucher_c1e3bd9940354aef898ca0cb2c91f32e_1024x1024.png" data-mce-src="https://file.hstatic.net/1000405402/file/hodu-voucher_c1e3bd9940354aef898ca0cb2c91f32e_1024x1024.png"></p><h4><strong>2. Tại sao mã ưu đãi (mã tiền điện tử, voucher, mã giảm giá) của tôi không có hiệu lực?</strong></h4><p>Mã giảm giá chỉ có giá trị sử dụng đối với các sản phẩm nằm trong danh mục của chương trình khuyến mãi hoặc chương trình khuyến mại hoặc dành riêng cho một (một nhóm) khách hàng cụ thể, vì vậy hãy kiểm tra điều kiện sử dụng kèm theo của mã giảm giá. Ngoài ra, mã giảm giá cũng có thể hoặc không thể sử dụng chung với các chương trình khuyến mãi khác. Quý khách vui lòng xem kỹ điều kiện sử dụng của mã ưu đãi trước khi sử dụng.</p><h4><strong>3. Điều gì xảy ra với mã ưu đãi của tôi nếu tôi trả lại hàng? Hoặc nếu (một phần) đơn hàng của tôi bị hủy?</strong></h4><p>Mã khuyến mãi không áp dụng cho sản phẩm được giảm giá. Nếu Quý khách trả lại đơn hàng đã sử dụng mã khuyến mãi, giá trị của mã khuyến mãi sẽ không được hoàn trả. Mã của phiếu giảm giá sẽ không được thay thế. Mã khuyến mãi chỉ có hiệu lực trong một thời gian nhất định. Nếu bạn gặp bất kỳ vấn đề nào khi sử dụng mã, vui lòng liên hệ với chúng tôi.</p><h4><strong>4. Tôi phải làm gì nếu câu hỏi của tôi không được đề cập ở đây?</strong></h4><p>Nếu Quý khách không thể tìm thấy câu trả lời cho câu hỏi của mình tại đây, vui lòng liên hệ với chúng tôi tại mục<span>&nbsp;liên hệ.</span></p><p>Các chuyên gia tư vấn của chúng tôi sẽ sẵn lòng giúp đỡ Quý khách.</p><p><strong>Thông tin liên hệ:</strong><br><strong>Giày HODU</strong><br>Địa chỉ: 49 Tố Hữu - Hải Châu - Đà Nẵng<br>Điện thoại: 0931907058<br>Email: cskh@giayhodu.vn</p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Alert End -->

                            <!-- Accordions Start -->
                            <div class="col mt-4 pt-2" id="accordions">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0">Chính sách bảo mật</h4>
                                    </div>
        
                                    <div class="p-4">
                                        <div class="content-page ">
                                            <p>Chính sách bảo mật này nhằm giúp Quý khách hiểu về cách website thu thập và sử dụng thông tin cá nhân của mình thông qua việc sử dụng trang web, bao gồm mọi thông tin có thể cung cấp thông qua trang web khi Quý khách đăng ký tài khoản, đăng ký nhận thông tin liên lạc từ chúng tôi, hoặc khi Quý khách mua sản phẩm, dịch vụ, yêu cầu thêm thông tin dịch vụ từ chúng tôi.</p><p>Chúng tôi sử dụng thông tin cá nhân của Quý khách để liên lạc khi cần thiết liên quan đến việc Quý khách sử dụng website của chúng tôi, để trả lời các câu hỏi hoặc gửi tài liệu và thông tin Quý khách yêu cầu.</p><p><span class="wysiwyg-font-size-medium">Trang web của chúng tôi coi trọng việc bảo mật thông tin và sử dụng các biện pháp tốt nhất để bảo vệ thông tin cũng như việc thanh toán của khách hàng.&nbsp;</span></p><p><span class="wysiwyg-font-size-medium">Mọi thông tin giao dịch sẽ được bảo mật ngoại trừ trong trường hợp cơ quan pháp luật yêu cầu.</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Accordions End -->

                            <!-- Card Start -->
                            <div class="col mt-4 pt-2" id="cards">
                                <div class="component-wrapper rounded shadow">
                                    <div class="p-4 border-bottom">
                                        <h4 class="title mb-0"> Điều khoản dịch vụ </h4>
                                    </div>
        
                                    <div class="p-4">
                                        <div class="content-page ">
                                            <p><span class="wysiwyg-font-size-medium"><strong>1. Giới thiệu</strong></span></p><p><span class="wysiwyg-font-size-medium">Chào mừng quý khách hàng đến với website chúng tôi.</span></p><p><span class="wysiwyg-font-size-medium">Khi quý khách hàng truy cập vào trang website của chúng tôi có nghĩa là quý khách đồng ý với các điều khoản này. Trang web có quyền thay đổi, chỉnh sửa, thêm hoặc lược bỏ bất kỳ phần nào trong Điều khoản mua bán hàng hóa này, vào bất cứ lúc nào. Các thay đổi có hiệu lực ngay khi được đăng trên trang web mà không cần thông báo trước. Và khi quý khách tiếp tục sử dụng trang web, sau khi các thay đổi về Điều khoản này được đăng tải, có nghĩa là quý khách chấp nhận với những thay đổi đó.</span></p><p><span class="wysiwyg-font-size-medium">Quý khách hàng vui lòng kiểm tra thường xuyên để cập nhật những thay đổi của chúng tôi.</span></p><p><span class="wysiwyg-font-size-medium"><strong>2. Hướng dẫn sử dụng website</strong></span></p><p><span class="wysiwyg-font-size-medium">Khi vào web của chúng tôi, khách hàng phải đảm bảo đủ 18 tuổi, hoặc truy cập dưới sự giám sát của cha mẹ hay người giám hộ hợp pháp. Khách hàng đảm bảo có đầy đủ hành vi dân sự để thực hiện các giao dịch mua bán hàng hóa theo quy định hiện hành của pháp luật Việt Nam.</span></p><p><span class="wysiwyg-font-size-medium">Trong suốt quá trình đăng ký, quý khách đồng ý nhận email quảng cáo từ website. Nếu không muốn tiếp tục nhận mail, quý khách có thể từ chối bằng cách nhấp vào đường link ở dưới cùng trong mọi email quảng cáo.</span><span class="wysiwyg-font-size-medium"><strong></strong></span><span class="wysiwyg-font-size-medium"></span><span class="wysiwyg-font-size-medium"><strong></strong></span><span class="wysiwyg-font-size-medium"></span><span class="wysiwyg-font-size-medium"><strong></strong></span><span class="wysiwyg-font-size-medium"></span></p><p><span class="wysiwyg-font-size-medium"></span><span class="wysiwyg-font-size-medium"></span><br></p><p><span class="wysiwyg-font-size-medium"><strong>3. Thanh toán an toàn và tiện lợi</strong></span></p><p><span class="wysiwyg-font-size-medium">Người mua có thể tham khảo các phương thức thanh toán sau đây và lựa chọn áp dụng phương thức phù hợp:</span></p><p><span class="wysiwyg-font-size-medium"><strong><u>Cách 1</u></strong>: Thanh toán trực tiếp (người mua nhận hàng tại địa chỉ người bán)<br></span><span class="wysiwyg-font-size-medium"><strong><u>Cách 2</u></strong><strong>:</strong>&nbsp;Thanh toán sau (COD – giao hàng và thu tiền tận nơi)<br></span><span class="wysiwyg-font-size-medium"><strong><u>Cách 3</u></strong><strong>:</strong>&nbsp;Thanh toán online qua thẻ tín dụng, chuyển khoản</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div><!--end col-->
                            <!-- Card End -->

                        </div><!--end row-->
                    </div>
                </div>                
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->
@stop