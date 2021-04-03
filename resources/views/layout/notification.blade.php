@if(\Session::has('success'))
    <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Thành công!</strong> {{ \Session::get('success') }}
    </div>
@endif

@if(\Session::has('danger'))
    <div class="alert alert-danger alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>

        <strong>Thất bại!</strong> {{ \Session::get('danger') }}
    </div>
@endif
@if(\Session::has('warning'))
    <div class="alert alert-warning alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Cảnh báo!</strong> {{ \Session::get('warning') }}
    </div>
@endif