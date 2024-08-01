<?php
$a 	= $_POST['no'];
$b 	= $_POST['nama'];
$c	= $_POST['harga'];
$d	= $_POST['jumlah'];
$e	= $_POST['total'];

include "koneksi.php";

$mutakhir = mysql_query("UPDATE `barang_masuk` SET `nama_barang`='$b',`harga`='$c',`jumlah`='$d',`total`='$e' WHERE `no_trx`='$a'");					

if ($mutakhir)
 {
?>
<script type=text/javascript>
 alert ('Data Berhasil di Mutakhirkan');
 window.location='index.php';
</script>
<?php
}
?>
