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
            <h1 class="m-0">Edit Data Buku</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/buku">Data Buku</a></li>
              <li class="breadcrumb-item active">Edit Buku</li>
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
            <form action="/buku/{{ $buku->id }}" method="POST">
                @method('put')
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="InputNamaBuku">Nama Buku</label>
                  <input type="text" name="nama_buku" class="form-control" id="InputUsername" placeholder="Input Nama Buku" value="{{ $buku->nama_buku }}">
                </div>
                <div class="form-group">
                  <label for="InputPenerbit">Penerbit / Penulis</label>
                  <input type="text" name="penerbit" class="form-control" id="InputPenerbit" placeholder="Input Penerbit / Penulis" value="{{ $buku->penerbit }}">
                </div>
                <div class="form-group">
                    <label>Custom Select</label>
                    <select class="custom-select" name="kategori">
                      <option value="">Pilih Kategori</option>
                      <option value="Fiksi" @if ($buku->kategori == "Fiksi") selected @endif>Fiksi</option>
                      <option value="Non-Fiksi"  @if ($buku->kategori == "Non-Fiksi") selected @endif>Non-Fiksi</option>
                      <option value="Romance"  @if ($buku->kategori == "Romance") selected @endif>Romance</option>
                      <option value="Pendidikan"  @if ($buku->kategori == "Pendidikan") selected @endif>Pendidikan</option>
                      <option value="Horor"  @if ($buku->kategori == "Horor") selected @endif>Horor</option>
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