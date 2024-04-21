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
            <h1 class="m-0">Tambah Peminjaman</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/peminjaman">Data Peminjaman</a></li>
              <li class="breadcrumb-item active">Tambah Peminjaman</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        
        {{-- Form Tambah --}}
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Tambah Peminjaman</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/peminjaman/store" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="InputNamaBuku">Nama Buku</label>
                  <input type="text" name="namabuku" class="form-control" id="InputNamaBuku" placeholder="Input Nama Buku">
                </div>
                <div class="form-group">
                  <label for="InputPeminjam">Penerbit / Penerbit Buku</label>
                  <input type="text" name="peminjam" class="form-control" id="InputPeminjam" placeholder="Input Nama Peminjam">
                </div>
                <div class="form-group">
                    <label>Custom Select</label>
                    <select class="custom-select" name="kategori">
                      <option value="">Pilih Kategori Buku</option>
                      <option value="Fiksi">Fiksi</option>
                      <option value="Non-Fiksi">Non Fiksi</option>
                      <option value="Romance">Romance</option>
                      <option value="Pendidikan">Pendidikan</option>
                      <option value="Horor">Horor</option>
                    </select>
                  </div>
                <div class="form-group">
                    <label>Custom Select</label>
                    <select class="custom-select" name="status">
                      <option value="">Pilih Status Buku</option>
                      <option value="disimpan">Disimpan</option>
                      <option value="dipinjam">Dipinjam</option>
                      <option value="dikembalikan">Dikembalikan</option>
                    </select>
                  </div>
              </div>
              <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" name="submit" value="save" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
        {{-- Form Tambah --}}

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