@extends('include.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Buku</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Data Buku</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        {{-- Tabel Buku --}}
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Buku</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama Buku</th>
                <th>Kategori</th>
                <th>Penerbit / Penulis</th>
                <th>Tindakan</th>
              </tr>
              </thead>
              @foreach ($buku as $bk)
              <tbody>
              <tr>
                <td>{{ $bk->nama_buku }}</td>
                <td>{{ $bk->kategori }}</td>
                <td>{{ $bk->penerbit }}</td>
                <td>
                  <a href="/buku/{{ $bk->id }}/edit"><button type="button" class="btn btn-warning">Edit</button></a> 
                    <form action="/buku/{{ $bk->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit" value="Delete">Hapus</button>
                    </form>
                </td>
              </tr>
              </tbody>
              @endforeach
            </table>
            <a href="/buku/tambah"><button type="button" class="btn btn-primary">Tambah</button></a>
          </div>
          <!-- /.card-body -->
        </div>
      {{-- Tabel Kategori --}}
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection