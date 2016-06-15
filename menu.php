<aside class="main-sidebar">
  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- search form -->
    <form action="#" method="get" class="sidebar-form">
      <div class="input-group">
        <input type="text" name="cari" class="form-control" placeholder="Cari...">
            <span class="input-group-btn">
              <button type="submit" name="cari" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
      </div>
    </form>
    <!-- /.search form -->
    <!-- sidebar menu: : style can be found in sidebar.less -->
    <ul class="sidebar-menu">
      <li class="header">NAVIGASI</li>
      <li class="active treeview">
        <a href="dashboard.php">
          <i class="fa fa-dashboard"></i> <span>DASHBOARD</span>
        </a>
      </li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-envelope"></i> <span>SURAT</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
          <li><a href="?page=inbox_add"><i class="glyphicon glyphicon-pencil"></i> TULIS SURAT </a></li>
          <li><a href="?page=inbox"><i class="glyphicon glyphicon-save"></i> SURAT MASUK </a></li>
          <li><a href="?page=outbox"><i class="glyphicon glyphicon-open"></i> SURAT KELUAR </a></li>
        </ul>
      </li>
      <li class="treeview">
      <a href="">
      <i class="fa fa-gears"></i> <span>PENGATURAN</span>
      <i class="fa fa-angle-left pull-right"></i></a>
        <ul class="treeview-menu">
          <li><a href=""><i class="glyphicon glyphicon-user"></i> PENGGUNA </a></li>
          <li><a href=""><i class="glyphicon glyphicon-briefcase"></i> KATEGORI </a></li>
        </ul>
      </li>
      <li class="treeview">
        <a href="">
          <i class="fa fa-user"></i> <span>KONTAK</span>
          <i class="fa fa-angle-left pull-right"></i></a>
          <ul class="treeview-menu">
            <li><a href=""><i class="fa fa-user-plus"></i> TAMBAH KONTAK </a></li>
            <li><a href=""><i class="fa fa-list-alt"></i> LIST KONTAK </a></i></li>
          </ul>
        </li>

      <li>
        <a href="login.html">
          <i class="glyphicon glyphicon-log-out"></i><span> KELUAR </span>
        </a>
      </li>
    </ul>
  </section>
  <!-- /.sidebar -->
</aside>
