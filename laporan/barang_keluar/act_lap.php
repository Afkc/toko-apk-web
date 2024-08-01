<doctype html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"/> 
        <script src="../bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="../bootstrap/js/bootstrap.min.js"></script>
        <style>
            /*custom css*/
            .pagination, .pager{
                margin-top: 0px
            }
            .table{
                margin-top: 50px;
            }
                      .th{ background-color:#00D9FF; font-size: 0.875em; font-weight: bold; }
                      .tr{font-size: 0.675em;}
                      
        </style>
    </head>
	
<?php 
 
$dari   = $_POST['dari']; 
$sampai = $_POST['sampai']; 

?>
<h2>Laporan Barang Terjual  </h2><br/>
<strong>dari :<?php echo $dari; ?> Sampai :<?php echo $sampai; ?></strong>
<table class="table" >
	<tr>
		<th>No.</th><th>Kode Transaksi</th> <th>Kasir</th> <th>ID Barang</th> <th>Nama Barang</th> <th>Jumlah</th><th>Harga</th><th>Harga Total</th><th>Tanggal</th>
	</tr>
	
<?php 
 
$dari   = $_POST['dari']; 
$sampai = $_POST['sampai']; 
  
include "../../config.php";
  $i="";
$query  = mysql_query ("SELECT *FROM trx_out WHERE tgl_trx BETWEEN '$dari' AND '$sampai'  ");
while ( $data 	= mysql_fetch_array ($query)) {
  
//Tampilkan data dari database  

  
 $i++; 
 $kd = $data['kd_trx'];
 $harga =  $data['harga']; 
 $jumlah =  $data['harga_total'];
 
 $jml_hrg = $harga *  $jumlah;
 
 
 ?>
<tr>
 <td><?php echo $i ;?></td>
 <td><?php echo $data['kd_trx']; ?></td>
 <td><?php echo $data['kasir']; ?></td>
 <td><?php echo $data['id_barang']; ?></td>
 <td><?php echo $data['nama_brg']; ?></td>
 <td><?php echo $data['jumlah']; ?></td>
 <td>Rp.<?php $harga = $data['harga']; echo number_format($harga,0,".","."); ?></td>
 <td>Rp.<?php $harga = $data['harga_total']; echo number_format($harga,0,".","."); ?></td>
 <td><?php echo $data['tgl_trx']; ?></td>
<?php } 
?>
</tr>
<tr>
	<?php $query  = mysql_query ("SELECT sum(harga_total) as total FROM trx_out WHERE tgl_trx BETWEEN '$dari' AND '$sampai'  ");
while ( $data 	= mysql_fetch_array ($query)) {
	$total = $data['total'];
}
	?>
	<td></td><td></td><td></td><td></td><td></td><td></td><td>Total</td>
	<td><strong>Rp.<?php  echo number_format($total,0,".","."); ?></td></strong></td><td></td>
</tr>

</table>

