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
            <h1 class="m-0">Tambah Pengguna</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/">Home</a></li>
              <li class="breadcrumb-item"><a href="/pengguna">Data Pengguna</a></li>
              <li class="breadcrumb-item active">Tambah Pengguna</li>
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
              <h3 class="card-title">Tambah Pengguna</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/pengguna/store" method="POST">
                @csrf
              <div class="card-body">
                <div class="form-group">
                  <label for="InputUsername">Username</label>
                  <input type="text" name="username" class="form-control" id="InputUsername" placeholder="Input Username">
                </div>
                <div class="form-group">
                  <label for="InputFullname">Fullname</label>
                  <input type="text" name="Fullname" class="form-control" id="InputFullname" placeholder="Input Fullname">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail">Email address</label>
                  <input type="email" name="email" class="form-control" id="InputEmail" placeholder="Input Email">
                </div>
                <div class="form-group">
                  <label for="InputPassword">Password</label>
                  <input type="password" name="password" class="form-control" id="InputPassword" placeholder="Input Password">
                </div>
                <div class="form-group">
                    <label>Custom Select</label>
                    <select class="custom-select" name="level">
                      <option value="">Pilih Role</option>
                      <option value="admin">Admin</option>
                      <option value="manajer">Manager</option>
                      <option value="pelanggan">Pengguna</option>
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