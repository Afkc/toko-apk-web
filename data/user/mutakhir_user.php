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

$user=mysql_query("select * from user where id_user='$kiriman'");

$data_user = mysql_fetch_array($user);

echo "
<form action=simpan_mutakhir_user.php method=post>
<table style='font-family:sans-serif'; class='table table-bordered'>
 
  <tr>
   <td>ID User</td>
   <td><input class=form-control type=text name=id value='$data_user[0]' readonly></td>
  </tr>
  <tr>
   <td>Username</td>
   <td><input class=form-control type=text name=username value='$data_user[1]'></td>
  </tr>
  <tr>
   <td>Password</td>
   <td><input class=form-control type=text name=password value='$data_user[2]'></td>
  </tr>
  <tr>
   <td>Nama</td>
   <td><input class=form-control type=text name=nama value='$data_user[3]'></td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td><input  class=form-control type=text name=alamat value='$data_user[4]'></td>
  </tr>
  <tr>
   <td>Telepon</td>
   <td><input class=form-control type=text name=telepon value='$data_user[5]'></td>
  </tr>
  <tr>
   <td>Level</td>
   <td><input class=form-control type=text name=level value='$data_user[6]'></td>
  </tr>
  <tr>
   <td><input type=submit  class='btn btn-primary' value='Simpan Mutakhir'></td>
   <td><a href=index.php><input class='btn btn-danger' type=button value=Batal></a></td>
  </tr>
 </table>
</form>";
?>
