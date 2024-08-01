<!doctype html>
<html>
    <head>
        <title>Toko AMU OFFICIAL</title>
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
echo " <h3>Form Tambah Data Suplier</h3>
<form method=post action=simpan_supplier.php>
 <table style='font-family:sans-serif'; class='table table-bordered'>
  <tr>
   <td>ID Supplier</td>
   <td><input class=form-control type=text name=id></td>
  </tr>
  <tr>
   <td>Nama Supplier</td>
   <td><input class=form-control type=text name=nama></td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td><input class=form-control type=text name=alamat></td>
  </tr>
  <tr>
   <td>Telepon</td>
   <td><input  class=form-control type=text name=telepon></td>
  </tr>
  <tr>
    <td><input type=submit  class='btn btn-primary' value='Simpan'></td>
  </tr>
 </table>
</form>
";
?>
