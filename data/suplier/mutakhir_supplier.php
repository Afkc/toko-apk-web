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
$kiriman = $_GET['data'];

include "../../config.php";

$supplier=mysql_query("select * from suplier where id_sp='$kiriman'");

$data_supplier = mysql_fetch_array($supplier);

echo "
<form action=simpan_mutakhir_supplier.php method=post>
 <table style='font-family:sans-serif'; class='table table-bordered'>
  <tr>
   <td>ID Supplier</td>
   <td><input type=text  class=form-control name=id value='$data_supplier[0]' readonly></td>
  </tr>
  <tr>
   <td>Nama Supplier</td>
   <td><input type=text class=form-control name=nama value='$data_supplier[1]'></td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td><input type=text class=form-control name=alamat value='$data_supplier[2]'></td>
  </tr>
  <tr>
   <td>Telepon</td>
   <td><input type=text class=form-control name=telepon value='$data_supplier[3]'></td>
  </tr>
  <tr>
   <td><input type=submit class='btn btn-primary' value='Simpan Mutakhir'></td>
   <td><a href=index.php><input class='btn btn-danger' type=button value=Batal></a></td>
  </tr>
 </table>
</form>";
?>
