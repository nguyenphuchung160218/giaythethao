@extends('admin::layouts.master')
@section('content')
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Dashboard <small>Statistics Overview</small>
              </h1>
              <ol class="breadcrumb">
                  <li class="active">
                      <i class="fa fa-dashboard"></i> Dashboard
                  </li>
              </ol>
          </div>
      </div>
      <!-- /.row -->
      <div class="table-responsive">
          <h3>Quản lý danh mục <a href="" ><i class="fa fa-plus-circle"></i></a> </h3>
          <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
              <thead>
              <tr>
                <th class="th-sm">Stt

                </th>
                <th class="th-sm">Tên danh mục

                </th>
                <th class="th-sm">Tiêu đề

                </th>           
                <th class="th-sm">Hiện trang chủ

                </th>
                <th class="th-sm">Trạng thái

                </th>
                <th class="th-sm">Thao tác

                </th>
              </tr>
              </thead>
              <tbody>
                  <tr>
                      <td></td>
                      <td></td>
                      <td></td>
                      <td>
                          <a href=""></a>
                      </td>
                      <td>
                          <a href=""></a>
                      </td>
                      <td>
                          <a class="btn btn-info" style="font-size: 12px;" href=""><i class="fa fa-pencil"></i> Cập nhật</a>
                          <a class="btn btn-danger" style="font-size: 12px;" href=""><i class="fa fa-trash"></i> Xóa</a>
                      </td>
                  </tr>
              </tbody>
          </table>
      </div>
      <!-- /.row -->

  </div>
  <!-- /.container-fluid -->
@stop
