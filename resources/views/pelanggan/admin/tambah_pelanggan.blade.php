@extends('layouts.adminlte')
@section('content')
{!! Toastr::message() !!}
<section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Pelanggan</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/tambah_pelangganStore" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                <div class="card-body">
                  <div class="form-group">
                    <label for="role">role</label>
                    <input type="text" class="form-control" id="role" name="role" placeholder="role">
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email">
                  </div>

                  <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="name">
                  </div>

                  <div class="form-group">
                    <label for="name">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="">
                  </div>

                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
@endsection
