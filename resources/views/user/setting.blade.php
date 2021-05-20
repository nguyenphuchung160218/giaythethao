@extends('user.layout')
@section('content_user')
    <div class="col-lg-8 col-12">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-left text-center">Thông Tin Cá Nhân :</h5>           
                <form action="{{ route('updateInfo') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="mt-3 text-md-left text-center d-sm-flex">
                        <img id="out_img" src="{{ get_data_user('web','avatar')!=null ? asset(pare_url_file(get_data_user('web','avatar'))) : asset('image/unnamed.png') }}" class="avatar float-md-left avatar-medium rounded-circle shadow mr-md-4" alt="">                                             
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Thêm Ảnh</label>
                                <div class="position-relative">                                 
                                    <input type="file" id="input_img" name="avatar" class="form-control">
                                </div>
                            </div>
                        </div><!--end col-->   
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Họ Tên</label>
                                <div class="position-relative">
                                    <i data-feather="user" class="fea icon-sm icons"></i>
                                    <input name="name" id="first" type="text" class="form-control pl-5" value="{{ $user->name }}" placeholder="First Name :">
                                </div>
                            </div>
                        </div><!--end col-->                       
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Email</label>
                                <div class="position-relative">
                                    <i data-feather="mail" class="fea icon-sm icons"></i>
                                    <input name="email" id="email" type="email" class="form-control pl-5" value="{{ $user->email }}" placeholder="Your email :">
                                </div>
                            </div> 
                        </div><!--end col-->
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label>Số Điện Thoại :</label>
                                <div class="position-relative">
                                    <i data-feather="phone" class="fea icon-sm icons"></i>
                                    <input name="number" id="number" type="number" class="form-control pl-5" value="{{ $user->phone }}" placeholder="Phone :">
                                </div>
                            </div>
                        </div><!--end col-->
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Địa Chỉ</label>
                                <div class="position-relative">
                                    <i data-feather="map-pin" class="fea icon-sm icons"></i>
                                    <input name="address" id="occupation" type="text" class="form-control pl-5" value="{{ $user->address }}" placeholder="Occupation :">
                                </div>
                            </div> 
                        </div><!--end col-->
                    </div><!--end row-->
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="submit" id="submit" name="send" class="btn btn-primary" value="Lưu Thay Đổi">
                        </div><!--end col-->
                    </div><!--end row-->
                </form><!--end form-->

                @if($user->provider==null)
                <div class="row">                    
                    <div class="col-md-12 mt-4 pt-2"> 
                        <h5>Thay đổi mật khẩu :</h5>
                        <form method="post" action="{{ route('updatePassword') }}">
                            @csrf
                            <div class="row mt-4">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Mật khẩu cũ :</label>
                                        <div class="position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control pl-5" name="password" placeholder="Old password" >
                                            <span class="form-message">
                                                @if($errors->has('passsword'))
                                                <span class="text-danger">
                                                    {{ $errors->first('passsword') }} 
                                                </span>
                                                 @endif
                                            </span>
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Mật khẩu mới :</label>
                                        <div class="position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control pl-5" name="newpassword" placeholder="New password" >
                                            
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>Nhập lại mật khẩu mới :</label>
                                        <div class="position-relative">
                                            <i data-feather="key" class="fea icon-sm icons"></i>
                                            <input type="password" class="form-control pl-5" name="repassword" placeholder="Re-type New password" required="">
                                        </div>
                                    </div>
                                </div><!--end col-->

                                <div class="col-lg-12 mt-2 mb-0">
                                    <button type="submit" class="btn btn-primary">Lưu thay đổi</button>
                                </div><!--end col-->
                            </div><!--end row-->
                        </form>
                    </div><!--end col-->
                </div><!--end row-->
            </div>
        </div>
        @endif

        <div class="rounded shadow mt-4">
            <div class="p-4 border-bottom">
                <h5 class="mb-0 text-danger">Xóa Tài Khoản :</h5>
            </div>

            <div class="p-4">
                <h6 class="mb-0">Bạn có muốn xóa tài khoản không? Vui lòng nhấn nút "Xóa" bên dưới</h6>
                <div class="mt-4">
                    <a href="{{ route('get.user.destroy',$user->id) }}" onclick="return confirm('Bạn chắc chắn muốn xóa tài khoản này?');" class="btn btn-danger">Xóa Tài Khoản</a>
                </div><!--end col-->
            </div>
        </div>
    </div><!--end col-->
@stop
@section('script')
    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#out_img').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]); // convert to base64 string
            }
        }

        $("#input_img").change(function() {
            readURL(this);
        });
    </script>
@stop
