@extends('layouts.adminlte')
@section('content')
<section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Daftar Keuangan pelanggan</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Keuangan pelanggan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title"></h3>
            <!-- /.card-header -->
            <div class="card-body"> 
            <table id="daftar_pembayaran" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>#</th>
                <th>user_id</th>
                <th>Nama</th>
                <th>Debit Air</th>
                <th>Jumlah yang sudah dibayar</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($tranksaksi as $riwayat)
                <tr>
                <td>{{$no++}}</td>
                <td><center>{{$riwayat->user_id}}</center></td>
                <td>{{$riwayat->User->name}}</td>
                <td><center>{{$riwayat->in_debit}}</center></td>
                <td>{{$riwayat->sudah_dibayar}}</td>
                <td>
                <a href="#" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash text-white"> Hapus</a></td>
                </tr>
            @endforeach
                </tbody>
                </table>      
            </div>
            <!-- /.card-body -->
          </div>
        <!-- /.card -->
      </div>
    </div>
  </div>
@endsection
