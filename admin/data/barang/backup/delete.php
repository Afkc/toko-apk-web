
<?php
include "koneksi.php";
 
$id = $_POST['id'];
$tc = $_POST['tc'];

 
$query = mysql_query("update mslogin set hak_akses ='3' where user_id='$id'") or die(mysql_error());
 
if ($query) {
			 header('location:index.php?message=delete');
	}
		
 ?>
