<?php
session_start();
if ($_SESSION['level'] == "User") {
	include "../conn.php";
} else if ($_SESSION['level'] == "Superuser") {
	header('location:../index.php');
} else if ($_SESSION['level'] == "Admin") {
	header('location:../index.php');
} 
?>
