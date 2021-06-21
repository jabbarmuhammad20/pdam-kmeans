@extends('layouts.adminlte')
@section('content')  
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-12">
            <h1>DAFTAR PELANGGAN</h1>
          </div>
          <div class="col-sm-12">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Daftar Pelanggan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title"> <a href="tambah_pelanggan" class="btn btn-primary btn-sm" title="Tambah Pelanggan/akun"> <i class="fa fa-plus text-white"></i> Tambah</a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <table id="daftar_pelanggan1" class="table table-bordered table-hover">
                <thead>
                <tr> 
                <th>#</th>
                <th>user_id</th>
                <th><center> Nama</center></th>
                <th><center> Email</center></th>
                <th><center> Aksi</center></th>
                </tr>
                </thead>
                <tbody>
                @php $no = 1; @endphp
                @foreach($users as $pelanggan)
                <tr>
                <td>{{$no++}}</td>
                <td><center>{{$pelanggan->id}}</center></td>
                <td>{{$pelanggan->name}}</td>
                <td>{{$pelanggan->email}}</td>
                <td> <center>
                <a href="admin_lihatPelanggan/{{$pelanggan->id}}" type="button" class="btn btn-success btn-sm" title="Lihat"><i class="fa fa-search text-white"> Lihat</i></a>
                <a href="admin_editpelanggan/{{$pelanggan->id}}" type="button" class="btn btn-warning btn-sm" title="Edit"><i class="fa fa-edit text-white"> Edit</i></a>
                <a href="admin_deletedpelanggan/{{$pelanggan->id}}" type="button" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data?')"><i class="fa fa-trash text-white"> Hapus</a>
                </center></td>
                </tr>
                @endforeach
                </tbody>
                </table>      
                </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
            </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@include('sweetalert::alert')
@endsection