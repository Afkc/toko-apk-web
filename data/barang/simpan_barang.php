<?php
$a 	= $_POST['id_barang'];
$b 	= $_POST['nama'];
$c	= $_POST['jenis'];
$d	= $_POST['ukuran'];
$e	= $_POST['warna'];
$f	= $_POST['id_supplier'];
$g	= $_POST['harga'];
$h	= $_POST['jumlah'];

include "../../config.php";

$barang = mysql_query("select * from barang where id_barang='$a'");

$jm_baris_query = mysql_num_rows($barang);

if($jm_baris_query==1)
{
	echo "Data Sudah Ada";
	exit;
	}
	else
	{
  
  $simpan = mysql_query("INSERT INTO `barang`(`id_barang`, `nama_brg`, `jenis_barang`, `ukuran`, `warna`, `id_suplier`, `harga`, `jumlah`) VALUES ('$a','$b','$c','$d','$e','$f','$g','$h')");					

?>		
<script type=text/javascript>
  window.location='index.php';
</script>
<?php
}
?>
