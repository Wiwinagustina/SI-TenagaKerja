<?php
// Panggil koneksi database
require_once "koneksi.php";
include "head.php";

if (isset($_GET['id_admin'])) {

	$id = $_GET['id_admin'];
	$query = mysqli_query($conn, "DELETE FROM admin WHERE id_admin='$id'");

	if ($query) {
		// jika berhasil tampilkan pesan berhasil delete data
		header('location: admin.php?alert=4');
        
	} else {
		// jika gagal tampilkan pesan kesalahan
		header('location: index.php?alert=1');
	}	
}							
?>