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
                <th>Debit Air</th>
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
                <td>X</td>
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
