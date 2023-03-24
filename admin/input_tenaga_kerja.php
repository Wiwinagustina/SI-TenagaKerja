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
            <li class="active">Tenaga Kerja</li>
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
                  <h3 class="box-title">Input Tenaga Kerja</h3>
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
                if(isset($_POST['input'])){
			$namafolder="gambar_admin/"; //tempat menyimpan file
      $namafolder1="file_referensi/"; 
      
     
              $jenis_gambar=$_FILES['nama_file']['type'];
              $id           = $_POST['id'];
              $nik          = $_POST ['nik'];
              $nama          = $_POST['nama'];
              $status          = $_POST['status'];
              $npwp         = $_POST['npwp'];
              $no_rek      = $_POST['no_rek'];
              $jenis_tenaga_kerja = $_POST['jenis_tenaga_kerja'];
              $email        = $_POST['email'];
              $no_telp      = $_POST['no_telp'];
              $pendidikan      = $_POST['pendidikan'];
              $pendidikan_nonformal     = $_POST['pendidikan_nonformal'];
              $pengalaman_kerja     = $_POST['pengalaman_kerja'];
              $keahlian       = $_POST['keahlian'];
              $alamat        = $_POST['alamat'];
    
              
          
    		
          $gambar = $namafolder . basename($_FILES['nama_file']['name']);		
          $referensi = $namafolder1 . basename($_FILES['referensi']['name']);	
          if (move_uploaded_file($_FILES['nama_file']['tmp_name'], $gambar) AND move_uploaded_file($_FILES['referensi']['tmp_name'], $referensi) ) {
            $sql="INSERT INTO tenaga_kerja (id, nik, nama, status, npwp, no_rek, jenis_tenaga_kerja, email, no_telp, pendidikan, pendidikan_nonformal, keahlian, pengalaman_kerja, alamat, referensi, gambar) VALUES
                  ('$id', '$nik', '$nama', '$status', '$npwp', '$no_rek', '$jenis_tenaga_kerja', '$email', '$no_telp', '$pendidikan', '$pendidikan_nonformal', '$keahlian', '$pengalaman_kerja', '$alamat', '$referensi', '$gambar')";
            $res=mysqli_query($koneksi, $sql) or die (mysqli_error());
           
                  echo "<script>Swal.fire(
                    'Good job!',
                    'You clicked the button!',
                    'success'
                  ); window.location = 'tenaga_kerja.php'</script>";	   
          } else {
            echo '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button><p>Gambar gagal dikirim</p></div>';
         }
        }
    
  
			?>
                <div class="box-body">
                <form class="form-horizontal style-form" action="input_tenaga_kerja.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
                <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Id Tenaga Kerja</label>
                              <div class="col-sm-4">
                                  <input name="id" type="text" id="id" class="form-control" placeholder="Tidak perlu di isi" value="<?php $a="J"; $b=rand(1,100); $c=$a.$b; echo $c; ?>" autofocus="on" readonly="readonly" />
                              </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NIK</label>
                              <div class="col-sm-4">
                            <input name="nik" type="number" id="nik" class="form-control" placeholder="NIK" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Nama Tenaga Kerja</label>
                              <div class="col-sm-4">
                            <input name="nama" type="text" id="nama" class="form-control" placeholder="Nama Karyawan" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Status</label>
                              <div class="col-sm-4">
                              <select name="status" id="status" class="form-control select2" required>
                              <option value=""> --- Status Tenaga Kerja --- </option>
                              <option value="Aktif"> Aktif </option>
                              <option value="Nonaktif"> Nonaktif </option>
                              </select>
                              
                             </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">NPWP</label>
                              <div class="col-sm-4">
                            <input name="npwp" type="number" id="npwp" class="form-control" placeholder="NPWP" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Rekening</label>
                              <div class="col-sm-4">
                            <input name="no_rek" type="text" id="no_rek" class="form-control" placeholder="No Rekening" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Email</label>
                              <div class="col-sm-4">
                              <input type='text' class="form-control" name='email' id="email" placeholder='email' autocomplete='off' required='required' />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Jenis Tenaga Kerja</label>
                              <div class="col-sm-4">
                              <select name="jenis_tenaga_kerja" id="jenis_tenaga_kerja" class="form-control select2" required>
                              <option value=""> --- Pilih Jenis Tenaga Kerja --- </option>
                              <?php 
                    $query2="select * from jenis_tenaga_kerja order by id_jenis_tenaga_kerja";
                    $tampil=mysqli_query($koneksi, $query2) or die(mysqli_error());
                    while($data1=mysqli_fetch_array($tampil))
                    {
                    ?>
                              
                                  
							
							<option value="<?php echo $data1['jenis_tenaga_kerja'];?>"><?php echo $data1['id_jenis_tenaga_kerja'];?> - <?php echo $data1['jenis_tenaga_kerja'];?></option>
						    <?php } ?>
                              
                              </select> 
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">No Telepon</label>
                              <div class="col-sm-4">
                           <input type="number" name="no_telp" id="no_telp" class="form-control" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pendidikan</label>
                              <div class="col-sm-4">
                           <input type="text" name="pendidikan" id="pendidikan" class="form-control" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pendidikan Non Formal</label>
                              <div class="col-sm-4">
                           <input type="text" name="pendidikan_nonformal" id="pendidikan_nonformal" class="form-control" required="required">
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">alamat</label>
                              <div class="col-sm-4">
                           <input type="text" name="alamat" id="alamat" class="form-control" required="required">
                            </div>
                         
                          </div>
                        
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">&nbsp</label>
                              <div class="col-sm-4">
                              <label>Enter Something And Press <kbd>Tab</kbd> Or <kbd>Space</kbd></label>
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Keahlian</label>
                                        <div class="col-sm-4">
                                        <div class="myContainer" style="width: 600px;"></div>
                                  <input type="text" name="keahlian" id="keahlian" class="inputTags" hidden/>
                              </div>
                              <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
                              <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
                              <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
                              <script src="../dist/js/taginput.js"></script>
                              <script>
                                  $('.myContainer').TagsInput({
                                      tagInputPlaceholder:'Add',
                                      tagHiddenInput: $('.inputTags'),
                                      tagContainerBorderColor: '#d3d3d3',
                                      tagBackgroundColor: '#222',
                                      tagColor: '#fff',
                                      tagBorderColor: '#688eac'
                                  });
                              </script>
                              <script type="text/javascript">

                            var _gaq = _gaq || [];
                            _gaq.push(['_setAccount', 'UA-36251023-1']);
                            _gaq.push(['_setDomainName', 'jqueryscript.net']);
                            _gaq.push(['_trackPageview']);

                            (function() {
                              var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
                              ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
                              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
                            })();

                          </script>
                        
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Pengalaman Kerja</label>
                              <div class="col-sm-4">
                              <select name="pengalaman_kerja" id="pengalaman_kerja" class="form-control select2" required>
                              <option value=""> --- Lama Pengalaman Kerja --- </option>
                              <option value="Belum Bekerja"> Belum Bekerja </option>
                              <option value="1 - 3 Tahun"> 1 - 3 Tahun </option>
                              <option value="3 - 5 Tahun"> 3 - 5 Tahun </option>
                              <option value="5 - 7 Tahun"> 5 - 7 Tahun </option>
                              <option value="7 - 10 Tahun"> 7 - 10 Tahun </option>
                              </select>
                              
                             </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">referensi</label>
                              <div class="col-sm-4">
                            <input name="referensi" type="file" id="referensi" class="form-control" placeholder="Password" autocomplete="off" required />                      
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label">Gambar</label>
                              <div class="col-sm-4">
                            <input name="nama_file" type="file" id="nama_file" class="form-control" placeholder="Password" autocomplete="off" required />
                              
                            </div>
                          </div>
                          <div class="form-group">
                              <label class="col-sm-2 col-sm-2 control-label"></label>
                              <div class="col-sm-10">
                                  <input type="submit" name="input" value="Simpan" class="btn btn-sm btn-primary" />&nbsp;
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
	$(".input-group.date").datepicker({ autoclose: true, todayHighlight: true });
	
    </script>

  <script>
     $(function () {
    $(".select2").select2();
    });


    </script>
  </body>
</html>
