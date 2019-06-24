<?php
include "koneksi.php";
$id = $_GET['id'];
$sql = mysqli_query($db,"DELETE FROM tbl_pemesanan WHERE id = $id");
	if ($sql) {
		header("location:daftar_pemesanan.php");
	}else{
		echo "gagal dihapus coy";
	}
?>