<?php
include "session.php";
// Fungsi header dengan mengirimkan raw data excel
header("Content-type: application/vnd-ms-excel");
 
// Mendefinisikan nama file ekspor "hasil-export.xls"
header("Content-Disposition: attachment; filename=Tenaga_kerja.xls");
 
																  
											//	$sql = mysqli_query($koneksi, "SELECT * FROM t_inventoryitems WHERE f_partcode='$id'");
		
			?>
	  
 
	<h3>Data Tenaga Kerja</h3>
	  
	<!-- <table>
	
			<tr>
			 <td width="0px">Plant :</td>  <td><?php //echo $plantname ?></td> 
			 <td width="0px">From : <?php //echo date("d-m-Y",strtotime($_GET['date1'])) ?></td>  
			 <td width="0px">Until : <?php //echo date("d-m-Y",strtotime($_GET['date2'])) ?></td> 
			 
		 </tr>
	</table>-->	
    <table>
	
			<tr>
			
			 <td width="0px">Tanggal : <?php echo date("d-m-Y") ?></td>  
			 
			 
		 </tr>
	</table>	
		 
		<table bordered="1">  
			<thead bgcolor="eeeeee" align="center">
			<tr bgcolor="eeeeee" >
               <th>No</th>
			   <th>Id</th>
	   <th>Nama</th>
       <th>Jenis Tenaga Kerja</th>
	   <th>No Telepon</th>
	   <th>Email</th>
       <th>Keahlian</th>
       <th>Pengalaman</th>
       <th>Pendidikan</th>
			  </tr>
			</thead>
			<tbody>
	 	
					
		</tbody>

		</div>
    </div>
</div>
   <?php
	//query menampilkan data
	$sql = mysqli_query($koneksi, "SELECT * FROM tenaga_kerja");
	$no = 1;
	while($rowshow = mysqli_fetch_assoc($sql)){
		echo '
		<tr>
			<td>'.$no.'</td>
			<td>'.$rowshow['id'].'</td>
			<td>'.$rowshow['nama'].'</td>
			<td>'.$rowshow['jenis_tenaga_kerja'].'</td>
            <td>'.$rowshow['no_telp'].'</td>
            <td>'.$rowshow['email'].'</td>
            <td>'.$rowshow['keahlian'].'</td>
			<td>'.$rowshow['pengalaman'].'</td>
			<td>'.$rowshow['pendidikan'].'</td>
		</tr>
		';
		$no++;
	}
	
						
					 ?>
  </table>   