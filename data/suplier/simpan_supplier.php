<?php
$a 	= $_POST['id'];
$b 	= $_POST['nama'];
$c	= $_POST['alamat'];
$d	= $_POST['telepon'];

include "../../config.php";

$supplier = mysql_query("select * from suplier where id_sp='$a'");

$jm_baris_query = mysql_num_rows($supplier);

if($jm_baris_query==1)
{
	echo "Data Sudah Ada";
	exit;
	}
	else
	{
  
  $simpan = mysql_query("INSERT INTO `suplier`(`id_sp`, `nm_sp`, `alamat_sp`, `tlp_sp`) VALUES ('$a','$b','$c','$d')");					

?>		
<script type=text/javascript>
  alert('data berhasil disimpan');
  window.location='index.php';
</script>
<?php
}
?>
