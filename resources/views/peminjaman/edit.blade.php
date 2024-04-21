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
            <h1 class="m-0">Edit Data Peminjaman</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/peminjaman">Data Peminjaman</a></li>
              <li class="breadcrumb-item active">Edit Data Peminjaman</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        {{-- Form Edit --}}
        <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">Edit Data</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/peminjaman/{{ $peminjaman->id }}" method="POST">
                @method('put')
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="InputPeminjam">Nama Peminjamn</label>
                  <input type="text" name="peminjam" class="form-control" id="InputPeminjam" placeholder="Input Nama Peminjamn" value="{{ $peminjaman->peminjam }}">
                </div>
                <div class="form-group">
                  <label for="InputNamaBuku">Nama Buku</label>
                  <input type="text" name="namabuku" class="form-control" id="InputUsername" placeholder="Input Nama Buku" value="{{ $peminjaman->namabuku }}">
                </div>
                <div class="form-group">
                    <label>Custom Select</label>
                    <select class="custom-select" name="status">
                      <option value="">Pilih Kategori</option>
                      <option value="disimpan" @if ($peminjaman->status == "disimpan") selected @endif>Disimpan</option>
                      <option value="dipinjam"  @if ($peminjaman->status == "dipinjam") selected @endif>Dipinjam</option>
                      <option value="dikembalikan"  @if ($peminjaman->status == "dikembalikan") selected @endif>Dikembalikan</option>
                    </select>
                  </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" name="submit" value="save" class="btn btn-success">Simpan</button>
              </div>
            </form>
          </div>
        {{-- Form Edit --}}

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