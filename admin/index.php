<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
<style>
  .rad{
    border-radius: 20px;
  }

  </style>
  <?php include "head.php"; ?>
  <body class="hold-transition skin-purple sidebar-mini">
    <div class="wrapper">

      <?php include "header.php"; ?>
      <!-- Left side column. contains the logo and sidebar -->
      <?php include "menu.php"; ?>

<?php include "waktu.php"; ?>
      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            Dashboard
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
           <?php $tampil=mysqli_query($koneksi, "select * from tenaga_kerja order by id desc");
                        $total=mysqli_num_rows($tampil);
                    ?>
            <div class="col-lg-3 col-xs-6" >
              <!-- small box -->
              <div class="small-box rad bg-aqua">
                <div class="inner">
                  <h3><?php echo $total; ?></h3>
                  <p>Tenaga kerja</p>
                </div>
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <a href="tenaga_kerja.php" class="small-box-footer rad">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
            
            <?php $tampil1=mysqli_query($koneksi, "select * from jenis_tenaga_kerja order by id_jenis_tenaga_kerja desc");
                        $total1=mysqli_num_rows($tampil1);
                    ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box rad bg-green">
                <div class="inner">
                  <h3><?php echo $total1; ?><!--<sup style="font-size: 20px">%</sup>--></h3>
                  <p>Jenis Tenaga Ahli</p>
                </div>
                <div class="icon">
                  <i class="fa fa-cubes"></i>
                </div>
                <a href="jenis_tenaga_kerja.php" class="small-box-footer rad">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          <!-- /.row -->
          <!-- Main row -->
          <?php $tampil1=mysqli_query($koneksi, "select * from admin order by id_admin desc");
                        $total1=mysqli_num_rows($tampil1);

                    ?>
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box rad bg-blue">
                <div class="inner">
                  <h3><?php echo $total1; ?><!--<sup style="font-size: 20px">%</sup>--></h3>
                  <p>User dan Admin</p>
                </div>
                <div class="icon">
                  <i class="fa fa-users"></i>
                </div>
                <a href="admin.php" class="small-box-footer rad">More info <i class="fa fa-arrow-circle-right"></i></a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
          <!-- Main row -->
          
         
            </section><!-- right col -->
          </div><!-- /.row (main row) -->

        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <?php include "footer.php"; ?>

      <?php include "sidecontrol.php"; ?>
      <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
      <div class="control-sidebar-bg"></div>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- jQuery UI 1.11.4 -->
    <script src="../css/jquery-ui.min.js"></script>
    <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
    <script>
      $.widget.bridge('uibutton', $.ui.button);
    </script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <!-- Morris.js charts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="../plugins/morris/morris.min.js"></script>
    <!-- Sparkline -->
    <script src="../plugins/sparkline/jquery.sparkline.min.js"></script>
    <!-- jvectormap -->
    <script src="../plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
    <script src="../plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- jQuery Knob Chart -->
    <script src="../plugins/knob/jquery.knob.js"></script>
    <!-- daterangepicker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
    <script src="../plugins/daterangepicker/daterangepicker.js"></script>
    <!-- datepicker -->
    <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>
    <!-- Bootstrap WYSIHTML5 -->
    <script src="../plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
    <!-- Slimscroll -->
    <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="../plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../dist/js/app.min.js"></script>
    <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
    <script src="../dist/js/pages/dashboard.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="../dist/js/demo.js"></script>
  </body>
</html>
