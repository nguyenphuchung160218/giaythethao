@extends('admin::layouts.master')

@section('content')
    <div id="page-wrapper">
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Bài Viết
                    </h1>
                    <ol class="breadcrumb">
                        <li class="">
                            <i class="fa fa-dashboard"></i> Trang Chủ
                        </li>
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Bài Viết
                        </li>
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Chỉnh Sửa
                        </li>
                    </ol>
                </div>
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    @include('admin::article.form')
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>

@stop
