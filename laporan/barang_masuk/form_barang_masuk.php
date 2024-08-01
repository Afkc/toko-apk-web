<!doctype html>
<html>
    <head>
        <title>Pagination with Boostrap 3 - harviacode.com</title>
       <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css"/> 
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
echo "
<br/>
<h3>Form Tambah Data Barang Masuk</h3>
<form method=post action=simpan_barang_masuk.php>
 <table style='font-family:sans-serif'; class='table table-bordered'>
  <tr>
   <td>No Transaksi</td>
   <td><input class=form-control type=text name=no></td>
  </tr>
  <tr>
   <td>Nama Barang</td>
   <td>";
	include "koneksi.php";
	$barang = mysql_query("select nama_brg from barang");
	$j = mysql_num_rows($barang);	
	echo 	"<select name=nama>";
		for($a=1; $a<=$j; $a++)
		{
			$data = mysql_fetch_array($barang);
			echo "<option>$data[0]</option>";
		}
	echo	"</select>
   </td>
  </tr>
  <tr>
   <td>Harga Satuan</td>
   <td><input  class=form-control type=text name=harga></td>
  </tr>
  <tr>
   <td>Jumlah</td>
   <td><input class=form-control type=text name=jumlah></td>
  </tr>
  <tr>
   <td>Total</td>
   <td><input class=form-control type=text name=total></td>
  </tr>
  <tr>
   <td><input type=submit  class='btn btn-primary' value='Simpan'></td>
  </tr>
 </table>
</form>
";
?>
