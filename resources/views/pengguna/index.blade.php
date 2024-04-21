@extends('include.master')

@section('content')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Data Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Data Pengguna</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        {{-- Tabel Pengguna --}}
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Pengguna</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Username</th>
                <th>Fullname</th>
                <th>Email</th>
                <th>Level</th>
                <th>Tindakan</th>
              </tr>
              </thead>
              @foreach ($pengguna as $pg)
              <tbody>
              <tr>
                <td>{{ $pg->username }}</td>
                <td>{{ $pg->fullname }}</td>
                <td>{{ $pg->email }}</td>
                <td>{{ $pg->level }}</td>
                <td>
                  <a href="/pengguna/{{ $pg->id }}/edit"><button type="button" class="btn btn-warning">Edit</button></a> 
                    <form action="/pengguna/{{ $pg->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit" value="Delete">Hapus</button>
                    </form>
                </td>
              </tr>
              </tbody>
              @endforeach
            </table>
            <a href="/pengguna/tambah"><button type="button" class="btn btn-primary">Tambah</button></a>
          </div>
          <!-- /.card-body -->
        </div>
        {{-- Tabel Pengguna --}}

        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
@endsection
