<?php
$a 	= $_POST['no'];
$b 	= $_POST['nama'];
$c	= $_POST['harga'];
$d	= $_POST['jumlah'];
$e	= $_POST['total'];

include "koneksi.php";

$barang = mysql_query("select * from barang_masuk where no_trx='$a'");
$stok_awal = mysql_query("select jumlah from barang where nama_brg ='$b'");
$stok_akhir = $stok_awal + $d;

$jm_baris_query = mysql_num_rows($barang);

if($jm_baris_query==1)
{
	echo "Data Sudah Ada";
	exit;
	}
	else
	{
  
  $simpan = mysql_query("INSERT INTO `barang_masuk`(`no_trx`, `nama_barang`, `harga`, `jumlah`, `total`) VALUES ('$a','$b','$c','$d','$e')");
  $simpan_stok = ("UPDATE `barang` SET `jumlah`='$stok_akhir' WHERE `nama_brg`='$b'");
echo $stok_awal;
?>		
<script type=text/javascript>
  window.location='index.php';
</script>
<?php
}
?>
