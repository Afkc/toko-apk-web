<?php
$a 	= $_POST['id'];
$b 	= $_POST['username'];
$c	= $_POST['password'];
$d	= $_POST['nama'];
$e	= $_POST['alamat'];
$f	= $_POST['telepon'];
$g	= $_POST['level'];


include "../../config.php";

$user = mysql_query("select * from user where id_user='$a'");

$jm_baris_query = mysql_num_rows($user);

if($jm_baris_query==1)
{
	echo "Data Sudah Ada";
	exit;
	}
	else
	{
  
  $simpan = mysql_query("INSERT INTO `user`(`id_user`, `username`, `password`, `nama`, `alamat`, `no_tlp`, `level`) VALUES ('$a','$b','$c','$d','$e','$f','$g')");					

?>		
<script type=text/javascript>
  alert('data berhasil disimpan');
  window.location='index.php';
</script>
<?php
}
?>
