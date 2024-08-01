


<doctype html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/> 
        <link rel="stylesheet" href="style.css">
        <script src="../bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="../bootstrap/js/bootstrap.min.js"></script>
		<style>
            /*custom css*/
            .pagination, .pager{
                margin-top: 0px
            }
            .table{
                margin-top: 20px;
            }
            </style>

<table class="table">
	<tr>
		<th>No.</th><th>Nama Barang</th> <th>Jumlah</th> <th>Harga</th>
	</tr>
	
<?php 
  
include "../../config.php";
  $i="";
$query  = mysql_query ("SELECT *FROM trx_sementara ");
while ( $data 	= mysql_fetch_array ($query)) {
  
//Tampilkan data dari database

  
 $i++; ?>



<tr>
 <td><?php echo $i ;?></td>
 <td><?php echo $data['nama_brg']; ?></td>
 <td><?php echo $data['jumlah']; ?></td>
 <td><?php echo $data['harga']; ?></td>

<?php } ?>
</tr>
</table>
