<?php
 include '../../barcode/barcode_generator/barcode128.php';
$kiriman = $_GET['data'];

?>


  <style>
            .table{
                margin: 2cm 4cm 3cm 4cm;
             }
            
  </style>
<center>
  <table class="table"  >
      <tr> <td> <?php echo bar128(stripslashes($kiriman)); ?></td> </tr>
  </table>
  </center>
