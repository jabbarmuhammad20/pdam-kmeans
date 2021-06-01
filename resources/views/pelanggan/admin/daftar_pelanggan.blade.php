@extends('layouts.adminlte')
@section('content')
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Daftar pelanggan <a href="tambah_pelanggan"> Tambah </a> </h3>
            <!-- /.card-header -->
            <div class="card-body"> 
            <table id="daftar_pelanggan" class="table table-bordered table-hover">
                <thead>
                <tr>
                <th>#</th>
                <th>user_id</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Aksi</th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($users as $pelanggan)
                <tr>
                <td>{{$no++}}</td>
                <td>{{$pelanggan->id}}</td>
                <td>{{$pelanggan->name}}</td>
                <td>{{$pelanggan->email}}</td>
                <td><a href="#" type="button" class="btn btn-success btn-sm" title="Lihat"><i class="fa fa-search text-white"> Lihat</i></a>
                <a href="admin_editpelanggan/{{$pelanggan->id}}" type="button" class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-edit text-white"> Edit</i></a>
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
