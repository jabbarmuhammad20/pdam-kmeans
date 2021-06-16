@extends('layouts.adminlte')
@section('content')
{!! Toastr::message() !!}

      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Akun      
                <button type="button" class="btn btn-default" data-toggle="modal" data-target="#modal-default">
                  Format Pengisian
                </button></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="demo-form2"data-parsley-validate class="form-horizontal form-label-left" action="/admin_updatepelanggan/{{$pelanggan->id}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                {{ method_field('PUT') }}

                <div class="card-body">
                  <div class="form-group">
                    <label for="role">role</label>
                    <input type="text" class="form-control" id="role" name="role" value="{{$pelanggan->role}}">
                  </div>

                  <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{$pelanggan->email}}">
                  </div>

                  <div class="form-group">
                    <label for="name">Username</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{$pelanggan->name}}">
                  </div> 
              </div>
            </div>
          </div>
        </div>
      </div> 


      <div  class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Edit Dataku</h3>
              </div>
                <div class="card-body">
                  <div class="form-group">
                  <label for="nik">NIK</label>
                    <input type="number" class="form-control" id="nik" name="nik" value="{{$pelanggan->nik}}">
                  </div>

                  <div class="form-group">
                    <label for="kk">KK</label>
                    <input type="number" class="form-control" id="kk" name="kk" value="{{$pelanggan->kk}}">
                  </div>

                  <div class="form-group">
                    <label for="tem_lahir">Tempat Lahir</label>
                    <input type="text" class="form-control" id="tem_lahir" name="tem_lahir" value="{{$pelanggan->tem_lahir}}">
                  </div> 
                  
                  <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir" value="{{$pelanggan->tgl_lahir}}">
                  </div> 

                  <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" name="alamat" value="{{$pelanggan->alamat}}">
                  </div> 
              </div>   
            </div>
  </div>
            </div>     
            </div>

      <div  class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Debit Air</h3>
              </div>
                <div class="card-body">
                  <div class="form-group">
                  <label for="nik">Debit Air</label>
                    <input type="number" class="form-control" id="debit_air" name="debit_air" value="{{$pelanggan->debit_air}}">
                  </div>

                  <div class="form-group">
                    <label for="hrg_debit">Ukuran Meter</label>
                    <input type="number" class="form-control" id="uk_meter" name="uk_meter" value="{{$pelanggan->uk_meter}}">
                  </div>

                  <div class="form-group">
                    <label for="hrg_debit">Harga /debit</label>
                    <input type="number" class="form-control" id="hrg" name="hrg" value="{{$pelanggan->hrg}}">
                  </div>

                  <div class="form-group">
                    <label for="tem_lahir">Belum Dibayar</label>
                    <input type="text" class="form-control" id="belum_bayar" name="belum_bayar" value="{{$pelanggan->belum_bayar}}">
                  </div> 
                  

              </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <button type="reset" class="btn btn-default">Reset</button>
                  <button type="cancel" class="btn btn-danger">Cancel</button>
                </div>
              </form>
            </div>
          </div>
        </div>     
      </div>
            
    <div class="modal fade" id="modal-default">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Format Pengisian</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>- role = hanya boleh di isi oleh admin/pelanggan <br>
              - Email = Masukan email pelanggan/admin<br>
              - Username = Masukan Email pelanggan </p>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary">Save changes</button>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
@endsection