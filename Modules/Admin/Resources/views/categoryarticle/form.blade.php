<form action="" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
                <label for="name"> Tên danh mục:</label>
                <input type="text" class="form-control" placeholder="Tên danh mục" value="{{ old('name',isset($a_category->c_name_article) ? $a_category->c_name_article : '') }}" name="name" >
                @if($errors->has('name'))<span class="error-text">{{ $errors->first('name') }}
                </span><br>
                @endif
            <button type="submit" class="btn btn-success"> Lưu thông tin</button>
        </div>
    </div>
</form>
