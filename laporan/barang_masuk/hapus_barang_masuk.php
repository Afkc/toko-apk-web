<?php
$kiriman = $_GET["data"];

echo $kiriman;
 
include "koneksi.php";
 
$hapus = mysql_query("DELETE FROM `barang_masuk` WHERE no_trx = '".$kiriman."'");
 
if ($hapus)
 {
?>

<script type=text/javascript>
 alert ('Data Berhasil di Hapus');
 window.location='index.php';
</script>

<?php
}
else
{
?>
<script type=text/javascript>
 alert ('Data Gagal di Hapus');
 window.location='index.php';
</script>
<?php
}
?>
