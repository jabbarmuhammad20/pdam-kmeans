@extends('layouts.adminlte')
@section('content')
{!! Toastr::message() !!} 
<!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Konfirmasi Pembayaran</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" action="/admin_konfirmasiKeuangan" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Userid</label>
                    <input type="text" class="form-control" id="user_id" name="user_id" value="{{$users->id}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Nama Pelanggan</label>
                    <input type="text" class="form-control" value="{{$users->name}}" readonly>
                  </div>
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
                    <label for="exampleInputEmail1">Debit Air</label>
                    <input type="text" class="form-control" name="in_debit" value="{{$users->debit_air}}" readonly>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jumlah Pembayaran</label>
                    <input type="text" class="form-control" name="sudah_dibayar" value="{{$users->debit_air*$users->hrg}}" readonly>
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Konfirmasi</button>
                  <input type="button" class="btn btn-seccondary" value="Kembali" onclick="history.back(-1)" /> 
                </div>
              </form>
            </div>
            @include('sweetalert::alert')
            @endsection