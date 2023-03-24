<aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?php echo $_SESSION['gambar']; ?>" height="200" width="200" style="border: 2px solid white;" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $_SESSION['nama']; ?></p>
              <a href="index.php"><i class="fa fa-circle text-success"></i> <?php echo $_SESSION['email']; ?></a>
            </div>
          </div><br />
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="active treeview">
              <a href="index.php">
                <i class="fa fa-dashboard"></i> <span>Dashboard</span>
              </a>
            </li>
            
            <li>
              <a href="#">
                <i class="fa fa-street-view"></i> <span>Tenaga Kerja</span> <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="tenaga_kerja.php"><i class="fa fa-list-alt"></i> Tenaga Kerja</a></li>
                <li><a href="tenaga_kerja_exportxls.php"><i class="fa fa-download"></i> Export Data Excel</a></li>
              </ul>
            </li>
            
            <li class="treeview">
              <a href="#">
                <i class="fa fa-building"></i> <span>Jenis Tenaga Kerja</span>
                <i class="fa fa-angle-left pull-right"></i>
              </a>
              <ul class="treeview-menu">
                <li><a href="jenis_tenaga_kerja.php"><i class="fa fa-briefcase"></i> Data Jenis Tenaga Kerja</a></li>
              </ul>
            </li>
            
            
            
            
           
        <!-- /.sidebar -->
      </aside>