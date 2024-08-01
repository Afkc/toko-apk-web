
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Edit User </title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="main_menu_files/css3menu1/style.css" type="text/css" /><style type="text/css">._css3m{display:none}</style>

    <!-- Le styles -->
		<link href="style.css" rel="stylesheet" media="screen">
	    <link href="../assets/css/bootstrap.css" rel="stylesheet" media="screen">
        <link href="../assets/css/bootstrap-responsive.min.css" rel="stylesheet" media="screen">
		 <link href="../assets/css/bootstrap.min.css" rel="stylesheet" media="screen">
    <style>
      body {
        padding-top: 10px; /* 60px to make the container go all the way to the bottom of the topbar */
      }
      th{ background-color:#00D9FF;
		  }
    </style>
    <link href="../assets/css/bootstrap-responsive.css" rel="stylesheet">
 <link rel="apple-touch-icon-precomposed" sizes="144x144" href="../assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
      <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
         <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">
              <link rel="shortcut icon" href="../assets/ico/favicon.png">
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>
	
	<script src="../assets/js/bootstrap.min.js"></script>
	
	
 
  </head>	




<?php 
include "koneksi.php";
$name = $_GET['id'];

$query = mysql_query("select * from mslogin as a inner join mstenant as b ON a.tenant_cd = b.tenant_cd  where a.user_id='$name' ") or die(mysql_error());

$data = mysql_fetch_array($query);

$status_tenant = $data['flag_status']; 
$alert =  "
<div class='alert alert-danger'>
 <strong>Warning!</strong> Please approve tenant before approve user!.
</div>";

$alert1 =  "
<div class='alert alert-danger'>
 <strong>Warning!</strong> Tenant Rejected!.
</div>";


$alert2 =  "
<div class='alert alert-danger'>
 <strong>Warning!</strong> Tenant Deleted!.
</div>";




if ($status_tenant == "1") {
   echo $alert;
} if($status_tenant == "3") {
  echo  $alert1; 
}  
  if($status_tenant == "4") {
  echo  $alert2;
  
}
	else {
  echo  " ";
}

?>

<center>
	<form method="post" action="update.php"  target="isi" >
<table cellpadding="7" cellspacing="0" border="0" class="" >
<tr>
	<td> User ID </td><td>&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;</td><td> <input type="text" value="<?php echo$data['user_id']; ?>" name="user_id" readOnly> </b> </td>
</tr>
<tr>
	<td> Username </td><td>&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;</td><td> <input type="text" name="user_name" value="<?php echo $data['user_name']; ?>" readOnly> </td>
</tr>
<tr>
	<td> Password </td><td>&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;</td><td> <input type="password" name="password" value="<?php echo $data['password']; ?>" readOnly> </td>
</tr>
<tr>
	<td> Gender </td> <td>&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;</td><td> 
	<input type="text" name="gender" value="<?php echo$data['gender']; ?>" readOnly> 
	</td>
</tr>
<tr>
	<td> Birth </td><td>&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;</td> <td>
   
      <input type="text" name="birth" value="<?php echo$data['birth']; ?>" readOnly></input>
     
    
 </td> <tr/>
 
 <tr>
	<td>Email </td> <td>&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;</td> <td> <input type="text" name="email" value="<?php echo $data['email']; ?>" readOnly> </td>
 </tr>
 <tr>
	<td> Mobile Phone </td><td>&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;</td><td> <input type="text" name="phone" value="<?php echo$data['phone']; ?>" readOnly> </td>
</tr>
<tr>
	<td> Status </td> <td>&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;</td><td> <div class="form-group">
  
   <?php $status_tenant = $data['flag_status'];  
		 $akses = $data['hak_akses'];				
					$select1 = "<select class='form-control' id='sel1' value='$akses' name='hak_akses'>";
					$select2 = "<select class='form-control' id='sel1' value='$akses' name='hak_akses' style='color:#FF0022;' >";
					       
					
						if ($status_tenant == 1 ) { echo $select2; } else if ($status_tenant == 3)  { echo $select2;  }else if ($status_tenant == 4)  { echo $select2;  } else {echo $select1; }
					
					?>	
					 	
  <!-- <select class="form-control" id="sel1" name="hak_akses" > -->
	<option value="<?php echo $data['hak_akses']; ?>" ><?php $data['hak_akses']; switch ($data['hak_akses']) { case $data['hak_akses']=1 : echo "Active";  break; case $data['hak_akses']=2 : echo "Approve";  break; case $data['hak_akses']=3 : echo "Reject";  break; case $data['hak_akses']=4 : echo "Delete";  break;  } ?></option>
				<?php  $akses = $data['hak_akses'];
					   $tampil=mysql_query("SELECT  *FROM  usr_akses where id <>'$akses' ORDER BY id ");
					   while($r=mysql_fetch_array($tampil)){
					   echo "<option value='$r[id]'>$r[akses]</option>";
					   }
					   echo "</select>"; ?>
</div> </td>
</tr>



 <input type="hidden" name="tenant_cd" value="<?php echo $data['tenant_cd']; ?>" >
  
 
 <tr><td  align="right" > <input type="submit" name="Input" value="SAVE" class="btn btn-success"
	id="input" onClick='validTextbox();'/>
</form></td> <form name="opsi" method="post" action="delete.php"> <td align="left" colspan="2">
<input type="hidden" name="id" value="<?php echo $data['user_id']; ?>">
<input type="hidden" name="tc" value="<?php echo $data['tenant_cd']; ?>">
<button type="submit" class="btn btn-success" onClick="return confirm('Are you sure you want to delete this?');">DELETE</button></form> </td></tr>
</center>
