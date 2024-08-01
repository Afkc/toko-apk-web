<?php
include "../koneksi.php";
		
        $user_name  = $_POST ['user_name'];
        $password = $_POST ['password'];
        $gender = $_POST ['gender'];
        $birth = $_POST ['birth'];
        $phone = $_POST ['phone'];
        $email = $_POST['email'];
        $tenant_cd = $_POST ['tenant_cd'];
        $hak_akses = $_POST ['hak_akses'];
        $user_id = $_POST ['user_id'];
        
            
 $query = mysql_query ("update mslogin as a inner join mstenant as b set a.user_name='$user_name', password='$password', a.gender='$gender', a.birth='$birth', a.phone='$phone', a.email='$email',
							 a.tenant_cd='$tenant_cd', a.hak_akses='$hak_akses' WHERE a.user_id='$user_id' and b.flag_status = 2 and b.tenant_cd = '$tenant_cd'   ")or die(mysql_error());
		if ($query) 
		{
			 header('location:index.php?message=update');
	}
	
	//city='$city', address='$address', kavling='$kavling', pos_cd='$pos_cd', ph_no='$ph_no',
	//											fax_no='$fax_no', flag_status='$flag_status', create_date='$create_date', update_date='$update_date'	
	?>
