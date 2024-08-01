
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
 
 /*
 $id = $_POST['id'];
 $kd_trx = $_POST['kd_trx'];
 $kasir = $_POST['kasir'];
 $tgl = $_POST['tgl_trx'];
 ;
 
 */

?>
<table>
<form action="#" method="POST">
	<tr>
		<th>  ID Barang</th> <th> Nama Barang</th> 
		<th> Harga Asal</th> <th>Harga Jual</th> <th> Jumlah</th> <th></th>
	</tr>	
	  <tr> 
		 <td>
    <input type="text" class="form-control input-sm" name="id_barang"  ReadOnly>
        </td>
        <td>
    <input type="text" class="form-control input-sm" name="nama_brg" size="15"  ReadOnly>
	  </td>	
     <td>
    <input type="text" class="form-control input-sm" name="--"  ReadOnly>
    </td> 
    <td>
    <input type="text" class="form-control input-sm" name="harga" ReadOnly>
    </td>
     <td>
   <input class="form-control input-sm" name="jumlah" size="4" type="text" ReadOnly>
    </td> <td>
    <button type="submit" class="btn btn-Success" Disabled>Simpan <span class="glyphicon glyphicon-send"></button>
    <button type="Reset" class="btn btn-Danger" Disabled>Batal <span class="glyphicon glyphicon-remove"></button>
  </td>
</form> 
</tr>
</table>

<hr color="#0000FF" size="5" width="100%">



<table class="table" >
	<tr>
		<th>No.</th><th>Nama Barang</th> <th>Harga Barang</th> <th width="150px">Jumlah</th> <th>Jumlah Harga</th>
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
<form action="cetak.php" method="post">
<tr>
	<td>
	<button type="submit" class="btn btn-Success"> Cetak <span class="glyphicon glyphicon-print"></button>	
	
   </td>
   <td>
   <a href="batal_trx.php?data=<?php echo  $kd; ?>" class="btn btn-Danger"> Batal <span class="glyphicon glyphicon-Trash"></a>
   </td>
   <td>
	   </td>
   <td>
	   Bayar :<input type="text" class="form-control input-sm" id="txt1" value="0" name="txt1" onkeyup="sum();" />
 
   </td>
 
   <td>Kembali :
   <input class="form-control input-sm" type="text" id="txt3" value="0" name="txt3"/>

   </td>

	
</tr>
</table>
<input type="hidden" class="form-control input-sm" id="txt2"  value="<?php echo $total;?>" onkeyup="sum();" />
</form>
<!-- Hitung -->

<script>
function sum() {
      var txtFirstNumberValue = document.getElementById('txt1').value;
      var txtSecondNumberValue = document.getElementById('txt2').value;
      var result = parseInt(txtFirstNumberValue) - parseInt(txtSecondNumberValue);
      if (!isNaN(result)) {
         document.getElementById('txt3').value = result;
      }
}


</script>

