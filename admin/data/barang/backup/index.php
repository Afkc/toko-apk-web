<!doctype html>
<html>
    <head>
        <title>Pagination with Boostrap 3 - harviacode.com</title>
        <link rel="stylesheet" href="bootstrap.min.css"/>
        <style>
           /*custom css*/
            .pagination, .pager{
                margin-top: 0px
            }
            .table{
                margin-top: 20px;
            }
            .th{ background-color:#00D9FF; font-size: 0.775em; font-weight: bold; 
		  }
		  .tr {
			   font-size: 0.775em; font-weight: bold; 
			  }
		    .tr:hover td {background:#CCCCCC;}s
        </style>
    </head>
    <body>
		
		
 <?php
session_start();
//cek apakah user sudah login
if(!isset($_SESSION['user_name'])){
    die("Anda belum login");//jika belum login jangan lanjut
}
//User id

if(!isset($_SESSION['user_id'])){
    die("Anda belum login");//jika belum login jangan lanjut
}
//cek level user
if($_SESSION['hak_akses']!="Admin"){
    die("Anda bukan user");//jika bukan admin jangan lanjut
}
?>

        <?php
//        includekan fungsi paginasi
//        silahkan di komen atau di hapus saja baris yang tidak ingin digunakan
        include 'pagination1.php';
        include 'pagination2.php';
        include 'pagination3.php';
        include 'pagination4.php';
        include 'pagination5.php';

//        pagination config start
        $q = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : ''; // untuk keyword pencarian
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // untuk nomor halaman
        $adjacents = isset($_GET['adjacents']) ? intval($_GET['adjacents']) : 3; // khusus style pagination 2 dan 3
        $rpp = 5; // jumlah record per halaman

        $db_link = mysqli_connect('localhost', 'root', '', 'tenant_access'); // sesuaikan username dan password mysqli anda
        $sql = "SELECT * FROM mslogin as a inner join mstenant as b ON a.tenant_cd = b.tenant_cd   WHERE a.user_name LIKE '%$q%' ORDER BY a.user_id"; // query silahkan disesuaikan
        $result = mysqli_query($db_link, $sql); // eksekusi query

        $tcount = mysqli_num_rows($result); // jumlah total baris
        $tpages = isset($tcount) ? ceil($tcount / $rpp) : 1; // jumlah total halaman
        $count = 0; // untuk paginasi
        $i = ($page - 1) * $rpp; // batas paginasi
        $no_urut = ($page - 1) * $rpp; // nomor urut
        $reload = $_SERVER['PHP_SELF'] . "?q=" . $q . "&amp;adjacents=" . $adjacents; // untuk link ke halaman lain
//        pagination config end
        ?>
        <div class="container">

            <!--judul -->
            <div class="row">
                <div class="col-md-12">
                   <h3><b><u>Data User</u></b></h3>
                </div>
            </div>

            <!--form pencarian-->
            <div class="row">
                <div class="col-md-8">
                </div>
                <div class="col-md-4">
                    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
                        <div class="input-group">
							
                            <input type="text" class="form-control" placeholder="Search for..." name="q" value="<?php echo $q ?>">
                            <span class="input-group-btn">
                                <?php
                                if ($q <> '')
                                {
                                    ?>
                                    <a class="btn btn-default" href="<?php echo $_SERVER['PHP_SELF'] ?>">Reset</a>
                                    <?php
                                }
                                ?>
                                <button class="btn btn-primary" type="submit">Go!</button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>

            <!--tabel-->
            <div class="row">
                <div class="table-responsive">
                    <table class="table .table-hover">
                        <thead>
                            <tr>
                                <th class="th">No.</th>
								<th class="th">USER ID</th>
								<th class="th">USERNAME</th>
								<th class="th">GENDER</th>
								<th class="th">BIRTH</th>
								<th class="th">PHONE</th>
								<th class="th">EMAIL</th>
								<th class="th">TENANT NAME</th>
								<th class="th">ACCESS</th>
																

                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while (($count < $rpp) && ($i < $tcount)) {
                                mysqli_data_seek($result, $i);
                                $data = mysqli_fetch_array($result);
                                ?>
                                <tr class="tr">
                                    <td width="10px">
                                        <?php echo ++$no_urut; ?> 
                                    </td>

                                    
										
										 <td><a  class="btn btn-info btn-sm" href="edit.php?id=<?php echo $data['user_id']; ?> "> <?php echo $data['user_id']; ?>  </a> </td>
										 <td><?php echo $data['user_name']; ?></td>
										 <td><?php echo $data['gender']; ?></td>
										 <td><?php echo $data['birth']; ?></td>
										 <td><?php echo $data['phone']; ?></td>
										 <td><?php echo $data['email'];?></td>
										 <td><?php echo $data['name']; ?></td>
										 <td><?php $data['hak_akses']; switch ($data['hak_akses']) { case $data['hak_akses']=1 : echo "Active";  break; case $data['hak_akses']=2 : echo "Approve";  break; case $data['hak_akses']=3 : echo "Reject";  break; case $data['hak_akses']=4 : echo "Delete";  break; } ?></td>
																													 
                                </tr>
                                <?php
                                $i++;
                                $count++;
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>

            <!--pagination-->
            <div class="row">
                <div class="col-md-12">
                    <!--silahkan di komen atau di hapus saja baris yang tidak ingin digunakan-->
                    <?php echo paginate_one($reload, $page, $tpages); ?>
                    <?php //echo paginate_two($reload, $page, $tpages, $adjacents); ?>
                    <?php // echo paginate_three($reload, $page, $tpages, $adjacents); ?>
                    <?php //echo paginate_four($reload, $page, $tpages); ?>
                    <?php echo paginate_five($reload, $page, $tpages); ?>
                </div>
            </div>

        </div> <!-- container -->
    </body>
</html>

<!--harviacode.com-->
