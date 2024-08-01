<?php

include "../../config.php";

$id_barang = $_POST['id_barang'];
$kd_trx = $_POST['kd_trx'];
$kasir = $_POST['kasir'];
$nama_brg = $_POST['nama_brg'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$tgl_trx = $_POST['tgl_trx'];
$hrg_total =  $jumlah * $harga;

$sql1 = "INSERT INTO `trx_sementara` VALUES ('$kd_trx','$id_barang','$kasir','$nama_brg','$jumlah','$harga', '$hrg_total', '$tgl_trx')";
$sql2 = "INSERT INTO `trx_out` VALUES       ('$kd_trx','$id_barang','$kasir','$nama_brg','$jumlah','$harga', '$hrg_total', '$tgl_trx')";
$exc = mysql_query($sql1) or die(mysql_error()); // eksekusi perintah pertama $sql1
if($exc)

{ //jika benar perintah $exc 
mysql_query($sql2) or die(mysql_error()); // jalankan perintah $sql2 
}

if ($sql2) {		
	
	header("Location:trx.php"); 
	
	}







?>
