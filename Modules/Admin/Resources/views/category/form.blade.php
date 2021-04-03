<form action="" method="post">
    @csrf
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <div class="form-group">
                <label for="name"> Tên danh mục:</label>
                <input type="text" class="form-control" placeholder="Tên danh mục" value="{{ old('name',isset($category->c_name) ? $category->c_name : '') }}" name="name" >
                @if($errors->has('name'))<span class="error-text">{{ $errors->first('name') }}</span>
                @endif
            <button type="submit" class="btn btn-success"> Lưu thông tin</button>
        </div>
    </div>
</form>
