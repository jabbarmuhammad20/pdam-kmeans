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
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/tambah_debit_air" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="email">Userid</label>
                    <input type="integer" class="form-control" id="user_id" name="user_id" value="{{$users->id}}" readonly>
                  </div>
                      <!-- select -->
                      <div class="form-group">
                        <label>Bulan</label>
                        <select class="form-control" id="bulan" name="bulan">
                          <disabled><option value="-">-</option></disabled>
                          <option value="Januari">Januari</option>
                          <option value="Februari">Februari</option>
                          <option value="Maret">Maret</option>
                          <option value="April">April</option>
                          <option value="Mei">Mei</option>
                          <option value="Juni">Juni</option>
                          <option value="Juli">Juli</option>
                          <option value="Agustus">Agustus</option>
                          <option value="September">September</option>
                          <option value="November">November</option>
                          <option value="Desember">Desember</option>
                        </select>
                      </div>
               
                  <div class="form-group">
                    <label for="name">Debit Air</label>
                    <input type="number" class="form-control" id="debit_air" name="debit_air" placeholder="0">
                  </div>

                  <div class="form-group">
                    <label for="name">Keasaman</label>
                    <input type="number" class="form-control" id="keasaman" name="keasaman" placeholder="0">
                  </div>

                  <div class="form-group">
                    <label for="name">Keterangan</label>
                    <input type="text" class="form-control" id="ket" name="ket" placeholder="0">
                  </div>

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <input type="button" class="btn btn-seccondary" value="Kembali" onclick="history.back(-1)" /> 
                </div>

              </form>
            </div>
          </div>
        </div>
      </div>
@include('sweetalert::alert')
@endsection
