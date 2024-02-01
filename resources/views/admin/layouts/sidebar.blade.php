<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
  <a href="index3.html" class="brand-link">
    <img src="{{ asset('admin/dist/img/AdminLTELogo.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
    <span class="brand-text font-weight-light">AdminLTE 3</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{ asset('admin/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">Alexander Pierce</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    {{-- <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div> --}}

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item {{ request()->routeIs('admin.admin-dashbord') ? 'menu-open' : '' }} ">
          <a href="{{ route('admin.admin-dashbord') }}" class="nav-link {{ request()->routeIs('admin.admin-dashbord') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
              <i class=""></i>
            </p>
          </a>
        </li>
        <li class="nav-item {{ request()->routeIs('admin.admin-kegiatan-mingguan') ? 'menu-open active' : '' }}">
          <a href="{{ route('admin.admin-kegiatan-mingguan') }}" class="nav-link {{ request()->routeIs('admin.admin-kegiatan-mingguan') ? 'active' : '' }}">
              <i class="nav-icon fas fa-edit"></i>
              <p>
                  Tambah Konten
                  <i class="fas fa-angle-left right"></i>
              </p>
          </a>
          <ul class="nav nav-treeview">
              <li class="nav-item">
                  <a href="#" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kegiatan Harian</p>
                  </a>
              </li>
              <li class="nav-item {{ request()->routeIs('admin.admin-kegiatan-mingguan') ? 'menu-open' : '' }}">
                  <a href="{{ route('admin.admin-kegiatan-mingguan') }}" class="nav-link {{ request()->routeIs('admin.admin-kegiatan-mingguan') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Kegiatan Mingguan</p>
                  </a>
              </li>
              <li class="nav-item {{ request()->routeIs('admin.admin-slide1') ? 'menu-open' : '' }}">
                  <a href="{{ route('admin.admin-slide1') }}" class="nav-link {{ request()->routeIs('admin.admin-slide1') ? 'active' : '' }}">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Slide 1</p>
                  </a>
              </li>
              <li class="nav-item">
                  <a href="pages/forms/validation.html" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Validation</p>
                  </a>
              </li>
          </ul>
      </li>
      
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-table"></i>
            <p>
              Tables
              <i class="fas fa-angle-left right"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="pages/tables/simple.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>Simple Tables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/tables/data.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>DataTables</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="pages/tables/jsgrid.html" class="nav-link">
                <i class="far fa-circle nav-icon"></i>
                <p>jsGrid</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-header">EXAMPLES</li>
        <li class="nav-item">
          <a href="{{ route('admin.logout') }}" class="nav-link">
            <i class="nav-icon  bi bi-box-arrow-left"></i>
            <p>LogOut</p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>