<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  @include('include.head')
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  <!-- Navbar -->
  @include('include.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('include.sidebar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Peminjaman Buku</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/home">Home</a></li>
              <li class="breadcrumb-item active">Peminjaman</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        {{-- Tabel Kategori --}}
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Peminjaman</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
              <tr>
                <th>Nama Peminjam</th>
                <th>Nama Buku</th>
                <th>Kategori Buku</th>
                <th>Status</th>
                <th>Tindakan</th>
              </tr>
              </thead>
              @foreach ($peminjaman as $pj)
              <tbody>
              <tr>
                <td>{{ $pj->peminjam }}</td>
                <td>{{ $pj->namabuku }}</td>
                <td>{{ $pj->kategori }}</td>
                <td>{{ $pj->status }}</td>
                <td>
                  <a href="/peminjaman/{{ $pj->id }}/edit"><button type="button" class="btn btn-warning">Edit</button></a> 
                    <form action="/peminjaman/{{ $pj->id }}" method="POST">
                      @csrf
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit" value="Delete">Hapus</button>
                    </form>
                </td>
              </tr>
              </tbody>
              @endforeach
            </table>
            <a href="/peminjaman/tambah"><button type="button" class="btn btn-primary">Tambah</button></a>
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

  <!-- Main Footer -->
  @include('include.footer')
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

@include('include.script')
</body>
</html>