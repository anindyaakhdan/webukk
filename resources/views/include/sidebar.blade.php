<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('img/logo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Adam's Library</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('img/me.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Akhdan</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/home" class="nav-link {{ (request()->is('/')) ? 'active' : '' }}">
                  <i class="fa fa-home"></i>
                  <p>Home</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/buku" class="nav-link {{ (request()->is('/buku')) ? 'active' : '' }}">
                  <i class="fa fa-list"></i>
                  <p>Data Buku</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/kategori" class="nav-link {{ (request()->is('/kategori')) ? 'active' : '' }}">
                  <i class="fa fa-list"></i>
                  <p>Data Kategori</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/pengguna" class="nav-link {{ (request()->is('/pengguna')) ? 'active' : '' }}">
                  <i class="fa fa-user"></i>
                  <p>Data Pengguna</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="/peminjaman" class="nav-link">
                  <i class="fa fa-book-open"></i>
                  <p>Data Peminjaman</p>
                </a>
              </li>
              <li class="nav-item">
                <form action="{{ route('logout') }}" method="post">
                  @csrf
                <a href="{{ route('logout') }}" class="nav-link">
                  
                  <i class="fa fa-power-off"></i>
                  <p>Logout</p>
                </a>
              </form>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>