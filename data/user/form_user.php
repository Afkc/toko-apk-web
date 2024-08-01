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

<h3>Tambah Data User</h3>
<form method=post action=simpan_user.php>
 <table style='font-family:sans-serif'; class='table table-bordered'>
  <tr>
   <td>ID User</td>
   <td><input class=form-control type=text name=id></td>
  </tr>
  <tr>
   <td>Username</td>
   <td><input type=text class=form-control name=username></td>
  </tr>
  <tr>
   <td>Password</td>
   <td><input type=password class=form-control name=password></td>
  </tr>
  <tr>
   <td>Nama</td>
   <td><input type=text class=form-control name=nama></td>
  </tr>
  <tr>
   <td>Alamat</td>
   <td><input type=text class=form-control name=alamat></td>
  </tr>
  <tr>
   <td>Telepon</td>
   <td><input type=text class=form-control name=telepon></td>
  </tr>
  <tr>
   <td>Level</td>
   <td><input type=text class=form-control name=level></td>
  </tr>
  <tr>
   <td><input type=submit class='btn btn-primary' value=Simpan></td>
  </tr>
 </table>
</form>
";
?>
