@extends('layouts.adminlte')
@section('content')
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Tambah Debit Air</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/tambah_pelangganStore" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}

                  <div class="form-group">
                    <label for="email">Userid</label>
                    <input type="integer" class="form-control" id="user_id" name="user_id" value="{{$users->id}}" readonly>
                  </div>

                  <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$users->name}}" readonly>
                  </div>

                  <div class="form-group">
                    <label for="name">Debit Air</label>
                    <input type="number" class="form-control" id="debit_air" name="debit_air" placeholder="">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
@include('sweetalert::alert')
@endsection
