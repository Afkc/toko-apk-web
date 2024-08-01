<?php
$a 	= $_POST['id'];
$b 	= $_POST['nama'];
$c	= $_POST['alamat'];
$d	= $_POST['telepon'];

include "../../config.php";

$mutakhir = mysql_query("UPDATE `suplier` SET `nm_sp`='$b',`alamat_sp`='$c',`tlp_sp`='$d' WHERE `id_sp`='$a'");					

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
