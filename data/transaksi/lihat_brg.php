
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


 <?php 
 include "../../config.php";
 $id = $_POST['id'];
 $kd_trx = $_POST['kd_trx'];
 $kasir = $_POST['kasir'];
 $tgl = $_POST['tgl_trx'];
 ;
 
 

$query  = mysql_query ("SELECT *FROM barang where id_barang = '$id'");
while ( $data 	= mysql_fetch_array ($query)) {
  
//Tampilkan data dari database

/*
 
id_barang
nama_brg
harga


*/

?>
<table>
<form action="act_trx.php" method="POST">
<input type="hidden" name="kd_trx" value="<?php echo $kd_trx; ?>" >	
<input type="hidden" name="kasir" value="<?php echo $kasir; ?>" >
<input type="hidden" name="tgl_trx" value="<?php echo $tgl; ?>" >	
	<tr>
		<th>  ID Barang</th> <th> Nama Barang</th> 
		<th> Harga Asal</th> <th>Harga Jual</th> <th> Jumlah</th> <th></th>
	</tr>	
	  <tr> 
		 <td>
    <input type="text" class="form-control input-sm" name="id_barang" size="10" value="<?php echo $data['id_barang'];?>" ReadOnly>
        </td>
        <td>
    <input type="text" class="form-control input-sm" name="nama_brg" size="30" value="<?php echo $data['nama_brg'];?>" ReadOnly>
	  </td>	
     <td>
    <input type="text" class="form-control input-sm" name="--" value="<?php echo $data['harga'];?>" ReadOnly>
    </td> 
    <td>
    <input type="text" class="form-control input-sm" name="harga" value="<?php echo $data['harga'];?>" >
    </td>
     <td>
   <input class="form-control input-sm" name="jumlah" size="2"  value="1" type="text">
    </td> <td>
    <button type="submit" class="btn btn-Success">Simpan <span class="glyphicon glyphicon-send"></button>
   <a href="trx.php" class="btn btn-Danger"> Batal <span class="glyphicon glyphicon-remove"></a>
  </td>
</form> 
</tr>
</table>
<?PHP

}
?>

<hr color="#0000FF" size="5" width="100%">

<table class="table">
	<tr>
		<th>No.</th><th>Nama Barang</th> <th>Harga Barang</th> <th>Jumlah</th> <th>Jumlah Harga</th>
	</tr>
	
<?php 
  
include "../../config.php";
  $i="";
$query  = mysql_query ("SELECT *FROM trx_sementara ");
while ( $data 	= mysql_fetch_array ($query)) {
  
//Tampilkan data dari database

  
 $i++; 
 $kd = $data['kd_trx'];
 $harga =  $data['harga']; 
 $jumlah =  $data['jumlah'];
 
 $jml_hrg = $harga *  $jumlah;
 
 
 ?>




<tr>
 <td><?php echo $i ;?></td>
 <td><?php echo $data['nama_brg']; ?></td>
  <td>Rp.<?php $harga = $data['harga']; echo number_format($harga,0,".","."); ?></td>
  <td><?php echo $data['jumlah']; ?></td>
  <td>Rp.<?php echo  number_format($jml_hrg,0,".","."); ?></td>


<?php } 


 $query1 = mysql_query ("SELECT sum(hrg_total) as total FROM trx_sementara ");
  while ( $data1 	= mysql_fetch_array ($query1)) {
		$total = $data1['total'];		}

?>

</tr>
<tr>
	<td></td><td></td><td></td><td><b>Total Bayar</b></td><td><b>Rp.<?php echo number_format($total,0,".", ".");?></b></td>
</tr>
<tr>
	<td>
	<a href="cetak.php" class="btn btn-Success"> Cetak <span class="glyphicon glyphicon-print"></a>
   </td>
   <td>
   <a href="batal_trx.php?data=<?php echo  $kd; ?>" class="btn btn-Danger"> Batal <span class="glyphicon glyphicon-Trash"></a> 
   </td>
</tr>
</table>
