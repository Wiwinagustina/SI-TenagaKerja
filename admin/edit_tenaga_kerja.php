<?php include "session.php"; ?>
<!DOCTYPE html>
<html>
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
          Tenaga Kerja

        </h1>
        <ol class="breadcrumb">
          <li><a href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a></li>
          <li class="active"> Tenaga Kerja</li>
        </ol>
      </section>

      <!-- Main content -->
      <section class="content">
        <!-- Main row -->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-12 connectedSortable">

            <!-- TO DO List -->
            <div class="box box-primary">
              <div class="box-header">
                <i class="ion ion-clipboard"></i>
                <h3 class="box-title">Edit Data Tenaga Kerja</h3>
                <div class="box-tools pull-right">
                  <!-- <form action='admin.php' method="POST">
    	             <div class="input-group" style="width: 230px;">
                      <input type="text" name="qcari" class="form-control input-sm pull-right" placeholder="Cari Usename Atau Nama">
                      <div class="input-group-btn">
                        <button type="submit" class="btn btn-sm btn-default tooltips" data-placement="bottom" data-toggle="tooltip" title="Cari Data"><i class="fa fa-search"></i></button>
                        <a href="admin.php" class="btn btn-sm btn-success tooltips" data-placement="bottom" data-toggle="tooltip" title="Refresh"><i class="fa fa-refresh"></i></a>
                      </div>
                    </div>
                    </form> -->
                </div>
              </div><!-- /.box-header -->
              <?php
              $kd = $_GET['id'];
              $sql = mysqli_query($koneksi, "SELECT * FROM tenaga_kerja WHERE id='$kd'");
              if (mysqli_num_rows($sql) == 0) {
                header("Location: tenaga_kerja.php");
              } else {
                $row = mysqli_fetch_assoc($sql);
              }
              if (isset($_POST['update'])) {

                $namafolder = "gambar_admin/"; //tempat menyimpan file

                if (!empty($_FILES["nama_file"]["tmp_name"])) {

                  $jenis_gambar = $_FILES['nama_file']['type'];
                  $id          = $_POST['id'];
                  $nama          = $_POST['nama'];
                  $status = $_POST['status'];
                  $jenis_tenaga_kerja = $_POST['jenis_tenaga_kerja'];
                  $email   = $_POST['email'];
                  $no_telp       = $_POST['no_telp'];
                  $no_rek  = $_POST['no_rek'];
                  $pendidikan  = $_POST['pendidikan'];
                  $pendidikan_nonformal  = $_POST['pendidikan_nonformal'];
                  $keahlian      = $_POST['keahlian'];
                  $alamat      = $_POST['alamat'];
                  $pengalaman_kerja        = $_POST['pengalaman_kerja'];


                  if ($jenis_gambar == "image/jpeg" || $jenis_gambar == "image/jpg" || $jenis_gambar == "image/gif" || $jenis_gambar == "image/png") {
                    $gambar = $namafolder . basename($_FILES['nama_file']['name']);
                    if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar)) {
                      $sql = "UPDATE tenaga_kerja SET nama='$nama', status='$status', jenis_tenaga_kerja='$jenis_tenaga_kerja', email='$email', no_telp='$no_telp', no_rek='$no_rek', pendidikan='$pendidikan', pendidikan='$pendidikan_nonformal', keahlian='$keahlian',  alamat='$alamat',  pengalaman_kerja='$pengalaman_kerja', gambar='$gambar' WHERE id='$id'";
                      $res = mysqli_query($koneksi, $sql) or die(mysqli_error());
                      //echo "Gambar berhasil dikirim ke direktori".$gambar;
                      echo "<script>alert('Data Tenaga Ahli berhasil dimasukan!'); window.location = 'tenaga_kerja.php'</script>";
                    } else {
                      echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><p>Gambar gagal dikirim</p></div>';
                    }
                  } else {
                    echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Jenis gambar yang anda kirim salah. Harus .jpg .gif .png</div>';
                  }
                } else {
                  echo '<div class="alert alert-warning alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Anda Belum Memilih Gambar</div>';
                }
              }



              //if(isset($_GET['pesan']) == 'sukses'){
              //	echo '<div class="alert alert-success alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>Data berhasil disimpan.</div>';
              //}
              ?>
              <div class="box-body">
                <form class="form-horizontal style-form" action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Id Tenaga Kerja</label>
                    <div class="col-sm-4">
                      <input name="id" type="text" id="id" class="form-control" placeholder="Tidak perlu di isi" value="<?php echo $row['id']; ?>" autofocus="on" readonly="readonly" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">NIK</label>
                    <div class="col-sm-4">
                      <input name="nik" type="number" id="nik" class="form-control" placeholder="NIK" value="<?php echo $row['nik']; ?>" autocomplete="off" required />

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nama Tenaga Kerja</label>
                    <div class="col-sm-4">
                      <input name="nama" type="text" id="nama" class="form-control" placeholder="Nama Tenaga Kerja" value="<?php echo $row['nama']; ?>" autocomplete="off" required />

                    </div>
                  </div>
                  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-4">
                              <select name="status" id="status" class="form-control select2" required>
                              <option value="<?php echo $row['status']; ?>" >   <?php echo $row['status']; ?> </option>
                              <option value="Aktif"> Aktif </option>
                              <option value="Nonaktif"> Nonaktif </option>
                              </select>
                              
                             </div>
                          </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">NPWP</label>
                    <div class="col-sm-4">
                      <input name="npwp" type="number" id="npwp " class="form-control" placeholder="NPWP" value="<?php echo $row['npwp']; ?>" autocomplete="off" required />

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No Rekening</label>
                    <div class="col-sm-4">
                      <input name="no_rek" type="text" id="no_rek" class="form-control" placeholder="No Rekening" value="<?php echo $row['no_rek']; ?>" autocomplete="off" required />

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Email</label>
                    <div class="col-sm-4">
                      <input type='text' class="form-control" name='email' id="email" placeholder='email' value="<?php echo $row['email']; ?>" autocomplete='off' required='required' />

                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Jenis Tenaga Kerja</label>
                    <div class="col-sm-4">
                      <select name="jenis_tenaga_kerja" id="jenis_tenaga_kerja" class="form-control select2" required>
                        <option value="<?php echo $row['jenis_tenaga_kerja']; ?>"><?php echo $row['jenis_tenaga_kerja']; ?></option>

                        <?php
                        $query2 = "select * from jenis_tenaga_kerja order by id_jenis_tenaga_kerja";
                        $tampil = mysqli_query($koneksi, $query2) or die(mysqli_error());
                        while ($data1 = mysqli_fetch_array($tampil)) {
                        ?>



                          <option value="<?php echo $data1['jenis_tenaga_kerja']; ?>">
                             <?php echo $data1['jenis_tenaga_kerja']; ?>
                          </option>
                        <?php } ?>

                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">No Telepon</label>
                    <div class="col-sm-4">
                      <input type="number" name="no_telp" id="no_telp" value="<?php echo $row['no_telp']; ?>" class="form-control" required="required">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Pendidikan</label>
                    <div class="col-sm-4">
                      <input type="text" name="pendidikan" id="pendidikan" value="<?php echo $row['pendidikan']; ?>" class="form-control" required="required">
                    </div>
                  </div>
                  <div class="form-group">
                  <label class="col-sm-2 col-sm-2 control-label">Pendidikan Non Formal</label>
                    <div class="col-sm-4">
                      <input type="text" name="pendidikan_nonformal" id="pendidikan_nonformal" value="<?php echo $row['pendidikan_nonformal']; ?>" class="form-control" required="required">
                  </div>
                        </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">alamat</label>
                    <div class="col-sm-4">
                      <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $row['alamat']; ?>" required="required">
                      <class="form-control" required="required">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">keahlian</label>
                    <div class="col-sm-4">
                      <input type="text" name="keahlian" id="keahlian" class="form-control" value="<?php echo $row['keahlian']; ?>" required="required">
                    </div>
                  </div>
                  <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pengalaman Kerja</label>
                              <div class="col-sm-4">
                              <select name="pengalaman_kerja" id="pengalaman_kerja" class="form-control select2" required>
                              <option value="<?php echo $row['pengalaman_kerja']; ?>" >   <?php echo $row['pengalaman_kerja']; ?> </option>
                              <option value="Belum Bekerja"> Belum Bekerja </option>
                              <option value="1 - 3 Tahun"> 1 - 3 Tahun </option>
                              <option value="3 - 5 Tahun"> 3 - 5 Tahun </option>
                              <option value="5 - 7 Tahun"> 5 - 7 Tahun </option>
                              <option value="7 - 10 Tahun"> 7 - 10 Tahun </option>
                              </select>
                              
                             </div>
                          </div>

                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Gambar</label>
                    <div class="col-sm-4">
                      <h6>Gambar Lama</h6>
                    <img width="200px" height="200px" value="<?php echo $row['gambar']; ?>" src="<?php echo $row['gambar']; ?>" />
                  
                      <input name="nama_file" type="file" id="nama_file" class="form-control" placeholder="Password" text="<?php echo $row['gambar']; ?>" value="<?php echo $row['gambar']; ?>"autocomplete="off" src="<?php echo $row['gambar']; ?>" />
                      <input name="x" id="x" type="hidden" src="<?php echo $row['gambar']; ?>" />
                       
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label"></label>
                    <div class="col-sm-10">
                      <input type="submit" name="update" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
                      <a href="tenaga_kerja.php" class="btn btn-sm btn-danger">Batal </a>
                    </div>
                  </div>
                </form>
              </div><!-- /.box-body -->
            </div><!-- /.box -->

          </section><!-- /.Left col -->
        </div><!-- /.row (main row) -->

      </section><!-- /.content -->
    </div><!-- /.content-wrapper -->
    <?php include "footer.php"; ?>

    <?php include "sidecontrol.php"; ?>
    <!-- Add the sidebar's background. This div must be placed
           immediately after the control sidebar -->
    <div class="control-sidebar-bg"></div>
  </div><!-- ./wrapper -->


  <script src="../plugins/jQuery/jQuery-2.1.4.min.js"></script>
  <!-- Bootstrap 3.3.5 -->
  <script src="../bootstrap/js/bootstrap.min.js"></script>
  <!-- DataTables -->
  <script src="../plugins/datatables/jquery.dataTables.min.js"></script>
  <script src="../plugins/datatables/dataTables.bootstrap.min.js"></script>
  <!-- SlimScroll -->
  <script src="../plugins/slimScroll/jquery.slimscroll.min.js"></script>
  <!-- FastClick -->
  <script src="../plugins/fastclick/fastclick.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../dist/js/app.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="../dist/js/demo.js"></script>

  <script src="../plugins/datepicker/bootstrap-datepicker.js"></script>

  <script src="../plugins/select2/select2.full.min.js"></script>

  <script>
    //options method for call datepicker
    $(".input-group.date").datepicker({
      autoclose: true,
      todayHighlight: true
    });
  </script>

  <script>
    $(function() {
      $(".select2").select2();
    });
  </script>
</body>

</html>
