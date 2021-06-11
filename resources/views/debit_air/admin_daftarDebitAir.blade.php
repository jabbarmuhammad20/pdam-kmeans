@extends('layouts.adminlte')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar Penggunaan Debit Air <a href="admin_tambahDebitAir"> Tambah </a> </h3>
            <!-- /.card-header -->
            <div class="card-body"> 
            <table id="daftar_pelanggan" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>#</th>
                <th>Nama</th>
                <th>Debit Air</th>
                <th>Keasaman</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($users as $pelanggan)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$pelanggan->name}}</td>
                <td>{{$pelanggan->debit_air}}</td>
                <td>{{$pelanggan->debit_air}}</td>
                <td><a href="admin_tambahDebitAir/{{$pelanggan->id}}" type="button" class="btn btn-primary btn-sm" title="Tambah Debit Air"><i class="fa fa-plus text-white"> Tambah Debit Air</i></a>
                    <a href="#" type="button" class="btn btn-success btn-sm" title="Lihat"><i class="fa fa-search text-white"> Lihat</i></a>
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
