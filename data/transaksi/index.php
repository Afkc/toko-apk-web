
<?PHP


error_reporting(0);
session_start();
if(!isset($_SESSION['username'])){
    die("Anda belum login");//jika belum login jangan lanjut
}
?>


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
            .th{ background-color:#00D9FF; font-size: 0.875em; font-weight: bold; }
            
            
            #logo{width:300px; float:left}
*{margin:0 auto; padding:0}
 
body{background:#FFFFFF;
    font-family:verdana; font-size:10px; color:#4c4e55;
    }
#container{width:95%; height:1369px;
    background:url('bg.jpg') no-repeat;
    }
#header{height: 150px;
    border: px solid #00FF64;
    }
#center{float:left; width: 100%; height:610px; margin:3px; padding:3px;
    border:0px solid #009900;
    }
    
#sidebar_kanan{float:left; width:445px; height:600px; margin:3px 0;
    padding: 3px; border: 1px solid #FF0000;
    }

#detail{float:left; width:440px; height:600px; margin:3px 0;
    padding: 3px; border: 0px;
    }    
    p {
   color: #FFFFFF;
}
            
            </style>
    </head>
<body>
	
	<!-- No Tansaksi Auto -->
	
	
	<?php
include "../../config.php";
 	
//mencari nilai tertinggi di field id dengan menggunakan perintah SQL MAX
$no="SELECT MAX(no_trx) AS maxID FROM No_trx";

$hasil=mysql_query($no);
$data=mysql_fetch_array($hasil);
$idmax=$data['maxID'];

//membuat nomor unik baru, perintah sprintf untuk menjadikan string menjadi 5 digit (00001)
$nomor=$idmax++;

$no_transaksi="".sprintf("%08s",$idmax); //untuk kode awal dapat disesuaikan sendiri
?>

	
	
<div id="container">
    <div id="header"> 
     <br/> 
    
     <form action="dlt_trx.php">
        <button type="submit" class="btn btn-Danger btn-block btn-lg">Transaksi Baru <span class="glyphicon glyphicon-shopping-cart"></span><span class="glyphicon glyphicon-shopping-cart"></span><span class="glyphicon glyphicon-shopping-cart"></span></button>
    </form>
    <br/>   <br/>
   <form action="lihat_brg.php" method="post" target="lihat">
   <table border="0px" align="left" style="background-color:#FFFFFF;font-size:14px;font-family:'Roboto',Arial,Helvetica,sans-serif;color:#34495E;border-radius:30px;">
	   <tr>
		   <td>Kode Transaksi</td><td><p>&nbsp;&nbsp;:&nbsp;&nbsp;</p></td><td> <input class="form-control" type="text" value="TR<?php echo $no_transaksi;?>" name="kd_trx" id="sel1" ReadOnly></td> <td><p color="#FFFFFF">...................................................
		   ..........................</p></td><td>Tanggal Transaksi</td><td><p>&nbsp;&nbsp;:&nbsp;&nbsp;</p></td><td><input class="form-control" type="text" value="<?php echo date("Y-m-d"); ?>" name="tgl_trx" ReadOnly> </td>
	   </tr> 
	   <tr>
			<td><p></p></td>
	   </tr>
	   <tr>
		   <td>Barcode</td> <td><p>&nbsp;&nbsp;:&nbsp;&nbsp;</p></td>
		   <td>
		
				<div class="input-group" >
				  <input class="form-control" type="text" name="id" id="sel1" placeholder="barcode ">
                      <span class="input-group-btn" >
                          <button class="btn btn-primary" type="submit">Cari</button>
                          <button class="btn btn-Warning" type="reset">Reset</button>
                       </span>
                </div>
            </td> 
            <td><p>..........</p></td> <td>Kasir</td> <td><p>&nbsp;&nbsp;:&nbsp;&nbsp;</p></td> <td><input class="form-control" type="text" name="kasir" id="sel1"  value="<?PHP ECHO $_SESSION['username']; ?>" readOnly></td>
             </tr>   
             </form>
                            
   </table>                    
    <br/>


    </div>
   <hr color="#0000FF" size="5" width="100%">
    <div id="center"> <iframe name="lihat" src="trx.php" id="center" ></iframe> </div>
    
   <!-- Update No transaksi -->
<?php
$tampil = "SELECT no_trx FROM No_trx where id = '1' ";
   $sql = mysql_query ($tampil);
   $data = mysql_fetch_array ($sql);
   $tambah = $data['no_trx']+1;
   $update = "UPDATE No_trx set no_trx = '$tambah' where id = '1'  ";
   $sql1 = mysql_query ($update);
?>
 
    
</div>
</body>
</html>
</body>
