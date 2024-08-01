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
<h3>Form Tambah Data Barang</h3>
<form method=post action=simpan_barang.php>
 <table style='font-family:sans-serif'; class='table table-bordered'>
   <tr>
   <td>Nama Barang</td>
   <td><input  class=form-control type=text name=nama></td>
  </tr>
  <tr>
   <td>Jenis Barang</td>
   <td><input  class=form-control type=text name=jenis></td>
  </tr>
  <tr>
   <td>Ukuran</td>
   <td><input class=form-control type=text name=ukuran></td>
  </tr>
  <tr>
   <td>Warna</td>
   <td><input class=form-control type=text name=warna></td>
  </tr>
  <tr>
   <td>ID Supplier</td>
   <td><input  class=form-control type=text name=id_supplier></td>
  </tr>
  <tr>
   <td>Harga</td>
   <td><input class=form-control type=text name=harga></td>
  </tr>
  <tr>
   <td>Jumlah</td>
   <td><input class=form-control type=text name=jumlah></td>
  </tr>
  <tr>
   <td><input type=submit  class='btn btn-primary' value='Simpan'></td>
  </tr>
   <tr>
   <td>ID Barang / Barcode</td>
   <td><input class=form-control type=text name=id_barang></td>
  </tr>
 </table>
</form>
";
?>
