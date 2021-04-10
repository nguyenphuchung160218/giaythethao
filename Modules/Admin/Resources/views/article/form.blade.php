<form action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="row">
        <div class="col-sm-7">
            <div class="form-group">
                <label for="pro_name"> Tên bài viết:</label>
                <input type="text" class="form-control" placeholder="Tên bài viết" value="{{ old('a_name',isset($article->a_name) ? $article->a_name : '') }}" name="a_name" >
                @if($errors->has('a_name'))
                    <span class="error-text">
                        {{ $errors->first('a_name') }}
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name"> Nội dung:</label>
                <textarea class="form-control" id="a_content" cols="30" rows="3" placeholder="Mô tả ngắn sản phẩm" name="a_content">{{ old('a_content',isset($article->a_content) ? $article->a_content : '') }}</textarea>
                @if($errors->has('a_content'))
                    <span class="error-texta{{ $errors->first('a_content') }}"/>
                    </span>
                @endif
            </div>
            <div class="form-group">
                <label for="name"> Title:</label>
                <input type="text" class="form-control" placeholder="Title" value="{{ old('a_title_seo',isset($article->a_title_seo) ? $article->a_title_seo : '') }}" name="a_title_seo" >
            </div>
            <div class="form-group">
                <label for="name"> Mô tả:</label>
                <input type="text" class="form-control" placeholder="Mô tả" value="{{ old('a_description',isset($article->a_description) ? $article->a_description : '') }}" name="a_description" >
            </div>         
        </div>
         <div class="col-sm-4">   
            <div class="form-group">
                <label for="name"> Danh mục bài viết</label>
                <select name="a_category_id" id="" class="form-control">
                    <option>--Thuộc danh mục--</option>
                    @if(isset($categories))
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" {{ old('a_category_id',isset($article->a_category_id) ? $article->a_category_id : '') == $category->id ? "selected='selected'" : "" }}>{{ $category->c_name_article }}</option>
                        @endforeach
                    @endif
                </select>

                @if($errors->has('a_category_id'))
                    <span class="error-text">
                        {{ $errors->first('a_category_id') }}
                    </span>
                @endif
            </div>
        </div>
        <div class="col-sm-4">
            <div class="form-group">
                <img id="out_img" src="{{ asset('image/unnamed.png') }}" style="height: 300px;width: 100%">
            </div>
            <div class="form-group">
                <label for="name"> Hình ảnh:</label>
                <input type="file" id="input_img" name="avatar" class="form-control">
            </div>
        </div>      
    </div>
    <button type="submit" class="btn btn-success"> Lưu thông tin</button>

</form>
@section('script')
    <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
    <script>
        CKEDITOR.replace('a_content');
    </script>
@stop
