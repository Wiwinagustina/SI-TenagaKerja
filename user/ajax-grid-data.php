<?php
/* Database connection start */
include "koneksi.php";
/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 => 'id',
    1 => 'nama', 
	2 => 'jenis_tenaga_kerja',
	3 => 'email',
	4 => 'no_telp',
	5 => 'pendidikan',
    6 => 'keahlian',
	7 => 'alamat',
	8 => 'pengalaman',
);

// getting total number records without any search
$sql = "SELECT id, nama, jenis_tenaga_kerja, email, no_telp, pendidikan, keahlian, alamat, pengalaman";
$sql.=" FROM tenaga_kerja";
$query=mysqli_query($conn, $sql) or die("ajaxin-grid-data.php: get tenaga_kerja");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
	// if there is a search parameter
	$sql = "SELECT id, nama, jenis_tenaga_kerja, email, no_telp, pendidikan, keahlian, alamat, pengalaman";
	$sql.=" FROM tenaga_kerja";
	$sql.=" WHERE id LIKE '".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
	$sql.=" OR nama LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR jenis_tenaga_kerja LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR email LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR no_telp LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR pendidikan LIKE '".$requestData['search']['value']."%' ";
    $sql.=" OR keahlian LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR alamat LIKE '".$requestData['search']['value']."%' ";
	$sql.=" OR pengalaman LIKE '".$requestData['search']['value']."%' ";
	$query=mysqli_query($conn, $sql) or die("ajax-grid-data.php: get tenaga_kerja");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
	$query=mysqli_query($conn, $sql) or die("ajaxin-grid-data.php: get tenaga_kerja"); // again run query with limit
	
} else {	

	$sql = "SELECT id, nama, jenis_tenaga_kerja, email, no_telp, pendidikan, keahlian, alamat, pengalaman";
	$sql.=" FROM tenaga_kerja";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($conn, $sql) or die("ajaxin-grid-data.php: get tenaga_kerja");   
	
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["id"];
    $nestedData[] = $row["nama"];
	$nestedData[] = $row["jenis_tenaga_kerja"];
	$nestedData[] = $row["keahlian"];
	$nestedData[] = $row["pengalaman"];
	$nestedData[] = $row["pendidikan"];
    $nestedData[] = '<td><center>
                     <a href="detail_tenaga_kerja.php?id='.$row['id'].'"  data-toggle="tooltip" title="View Detail" class="btn btn-sm btn-success"> <i class="glyphicon glyphicon-search"></i> </a>
                    
	                 </center></td>';		
	
	$data[] = $nestedData;
    
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
