@extends('user.layout')
@section('content_user')
    <div class="col-lg-8 col-12">
        <div class="card border-0 rounded shadow">
            <div class="card-body">
                <h5 class="text-md-left text-center">Bài Đăng :</h5>

                <form method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row mt-4">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <label for="pro_name"> Tên quán:</label>
                                <input type="text" class="form-control" placeholder="Tên sản phẩm" value="{{ old('sto_name',isset($store->sto_name) ? $store->sto_name : '') }}" name="sto_name" >
                                @if($errors->has('sto_name'))
                                    <span class="error-text">
                                        {{ $errors->first('sto_name') }}
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                            <label for="name"> Tiêu đề:</label>
                            <input type="text" class="form-control" placeholder="Tiêu đề" value="{{ old('sto_title',isset($store->sto_title) ? $store->sto_title : '') }}" name="sto_title" >
                            </div>
                        </div>
                        <div class="col-lg-12">         
                            <div class="form-group">
                            <label for="name"> Mô tả:</label>
                            <input type="text" class="form-control" placeholder="Mô tả ngắn" value="{{ old('sto_description',isset($store->sto_description) ? $store->sto_description : '') }}" name="sto_description" >
                            </div>
                        </div>  
                        <div class="col-lg-6">  
                            <div class="form-group">
                            <label for="name"> Danh mục:</label>
                            <select name="sto_category_id" id="" class="form-control">
                                <option>--Chọn danh mục--</option>
                                @if(isset($categories))
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"  {{ old('sto_category_id',isset($store->sto_category_id) ? $store->sto_category_id : '') == $category->id ? "selected='selected'" : "" }}>{{ $category->c_name }}</option>
                                    @endforeach
                                @endif
                            </select>

                            @if($errors->has('sto_category_id'))
                                <span class="error-text">
                                    {{ $errors->first('sto_category_id') }}
                                </span>
                            @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label for="name"> Khu vực:</label>
                            <select name="sto_area_id" id="" class="form-control">
                                <option>--Chọn khu vực--</option>
                                @if(isset($areas))
                                    @foreach($areas as $area)
                                        <option value="{{ $area->id }}"  {{ old('sto_area_id',isset($store->sto_area_id) ? $store->sto_area_id : '') == $area->id ? "selected='selected'" : "" }}>{{ $area->area_name }}</option>
                                    @endforeach
                                @endif
                            </select>

                            @if($errors->has('sto_area_id'))
                                <span class="error-text">
                                    {{ $errors->first('sto_area_id') }}
                                </span>
                            @endif
                            </div>  
                        </div>    
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label for="pro_price"> Giá Trung Bình:</label>
                            <input type="text" name="sto_price" class="form-control" placeholder="Giá sản phẩm" value="{{ old('sto_price',isset($store->sto_price) ? $store->sto_price : '') }}">
                            @if($errors->has('sto_price'))
                                <span class="error-text">
                                    {{ $errors->first('sto_price') }}
                                </span>
                            @endif
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                            <label for="name"> Địa chỉ:</label>
                            <input type="text" name="sto_address" class="form-control" placeholder="" value="{{ old('sto_address',isset($store->sto_address) ? $store->sto_address : '') }}">
                            </div>
                        </div>                                                                                          
                        <div class="col-lg-12">
                            <div class="form-group">
                            <label for="name"> Nội dung:</label>
                            <textarea class="form-control" id="content" cols="30" rows="3" placeholder="Mô tả ngắn sản phẩm" name="sto_content">{{ old('sto_content',isset($store->sto_content) ? $store->sto_content : '') }}</textarea>
                            @if($errors->has('sto_content'))
                                <span class="error-text">
                                    {{ $errors->first('sto_content') }}
                                </span>
                            @endif
                            </div>
                        </div>
                        <div class="col-lg-12">       
                            <div class="form-group">
                                <img id="out_img" src="{{ asset('image/unnamed.png') }}" style="height: 300px;width: 100%">
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                            <label for="name"> Hình ảnh:</label>
                            <input type="file" id="input_img" name="avatar" class="form-control">
                            </div>
                        </div>

                    </div><!--end row-->
                    <div class="row">
                        <div class="col-sm-12">
                            <input type="submit" id="submit" name="send" class="btn btn-primary" value="Đăng">
                        </div><!--end col-->
                    </div><!--end row-->
                </form><!--end form-->
           
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
