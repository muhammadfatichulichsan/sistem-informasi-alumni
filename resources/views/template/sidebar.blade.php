<section class="sidebar">
      <!-- search form -->
      <form action="{{ route('pencarian') }}" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="query1" class="form-control" placeholder="Search..." required="">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        
        <li class="header">MAIN NAVIGATION</li>
          @if(Auth::check())
          @if(auth()->user()->is_admin == true)
          <li>
          <a href="{{ route('admin') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
          </a>
        </li>
            <li class="treeview">
          <a href="#">
            <i class="fa fa-user"></i>
            <span>Admin</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-sign-in"></i> Buat Pengumuman</a></li>
            <li><a href="{{ route('post.create') }}"><i class="fa fa-plus"></i> Buat Lowongan</a></li>
            <li><a href="{{ route('jurusan.create') }}"><i class="fa fa-plus"></i> Tambah Jurusan</a></li>
            <li><a href="{{ route('import.excel') }}"><i class="fa fa-plus"></i> Tambah Data Alumni</a></li>
            <li><a href="{{ route('cetak') }}"><i class="fa fa-plus"></i> Cetak Laporan</a></li>
          </ul>
        </li>
          @endif
          @endif
          <li>
          <a href="{{ route('data') }}">
            <i class="fa fa-dashboard"></i> <span>Semua Alumni</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-bullhorn"></i>
            <span>Pengumuman</span>
            <span class="pull-right-container">
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('post.index') }}"><i class="fa fa-sign-in"></i> Lowongan Pekerjaan</a></li>
            <li><a href="{{ route('pengumuman.index')}}"><i class="fa fa-plus"></i> Pengumuman Admin</a></li>
          </ul>
        </li>
    </section>