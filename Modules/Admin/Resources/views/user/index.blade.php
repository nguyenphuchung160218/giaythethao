@extends('admin::layouts.master')
@section('content')
  <div class="container-fluid">

      <!-- Page Heading -->
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">
                  Dashboard <small>Quản lý khách hàng</small>
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
          <h3>Quản lý khách hàng </h3>
          <table id="dtBasicExample" class="table table-striped table-sm" cellspacing="0" width="100%">
              <thead>
              <tr>
                <th class="th-sm">Stt

                </th>
                <th class="th-sm">Tên khách hàng
                </th>
                <th class="th-sm">Email

                </th>           
                <th class="th-sm">Địa Chỉ

                </th>
                <th class="th-sm">SDT

                </th>
                <th class="th-sm">Loại đăng nhập

                </th>
                <th class="th-sm">Thao tác

                </th>
              </tr>
              </thead>
              <tbody>
              @if(isset($users))
                @foreach($users as $user) 
                <tr>
                  <td>{{$user->id}}</td>
                  <td>{{$user->name}}</td>
                  <td>{{$user->email}}</td>
                  <td>{{$user->address}}</td>
                  <td>{{$user->phone}}</td>
                  <td>{{$user->provider}}</td>
                  <td>
                    <a class="btn btn-danger" style="font-size: 12px;" href="{{ route('admin.action.user',['delete',$user->id]) }}"><i class="fa fa-trash"></i> Delete</a>
                  </td>
                </tr>  
                    @endforeach
                @endif
              </tbody>
          </table>
      </div>
      <!-- /.row -->

  </div>
  <!-- /.container-fluid -->
@stop
