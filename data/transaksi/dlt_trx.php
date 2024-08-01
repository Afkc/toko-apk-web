<?php
 include "../../config.php";

 $query1 = mysql_query ("DELETE FROM trx_sementara ");
 
 $query2 = mysql_query ("DELETE FROM batal_jual");
 
 
if ($query1) {		
	
	header("Location:index.php"); 
	
	}

?>
