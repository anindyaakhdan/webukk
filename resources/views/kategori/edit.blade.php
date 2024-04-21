@extends('include.master')

@section('content')
    <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Edit Data Kategori Buku</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/kategori">Kategori Buku</a></li>
              <li class="breadcrumb-item active">Edit Kategori Buku</li>
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
            <form action="/kategori/{{ $kategori->id }}" method="POST">
                @method('put')
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="InputKategori">Kategori Buku</label>
                  <input type="text" name="kategori" class="form-control" id="InputKategori" placeholder="Input Username" value="{{ $kategori->kategori }}">
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
@endsection