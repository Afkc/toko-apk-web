<script type=text/javascript>
	
 function pesan_hapus(dt)
	{
		var pesan = confirm('Anda yakin akan menghapus data?');
		if (pesan)
		{
	      window.location='hapus_user.php?data='+dt;
		}
		else
		{
			window.location='index.php';
		}
	}
</script>

<doctype html>
<html>
    <head>
        <title></title>
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
            .th{ background-color:#00D9FF; font-size: 0.875em; font-weight: bold; }
        </style>
    </head>
    </head>
    <body>
        <?php
//        includekan fungsi paginasi
//        silahkan di komen atau di hapus saja baris yang tidak ingin digunakan
        include 'pagination.php';
        //include 'paging/pagination2.php';
        //include 'paging/pagination3.php';
       // include 'paging/pagination4.php';
       // include 'paging/pagination5.php';

//        pagination config start
        $q = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : ''; // untuk keyword pencarian
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // untuk nomor halaman
        $adjacents = isset($_GET['adjacents']) ? intval($_GET['adjacents']) : 3; // khusus style pagination 2 dan 3
        $rpp = 5; // jumlah record per halaman

        $db_link = mysqli_connect('localhost', 'root', '', 'toko'); // sesuaikan username dan password mysqli anda
        $sql = "SELECT * FROM user WHERE username LIKE '%$q%' ORDER BY username"; // query silahkan disesuaikan
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
                    <h1>Tabel User</h1>
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
                <div class="col-md-12">
                    <table class="table table-bordered">
                         <thead>
                            <tr>
								<th class="th">No</th>
                                <th class="th">ID User</th>
                                <th class="th">Username</th>
                                <th class="th">Password</th>
                                <th class="th">Nama</th>
                                <th class="th">Alamat</th>
                                <th class="th">Telepon</th>
                                <th class="th">Level</th>
                                <th class="th">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while (($count < $rpp) && ($i < $tcount)) {
                                mysqli_data_seek($result, $i);
                                $data = mysqli_fetch_array($result);
                                ?>
                                <tr>
                                    <td width="80px">
                                        <?php echo ++$no_urut; ?> 
                                    </td>
                                    <td>
                                        <?php echo $data ['id_user']; ?> 
                                    </td>
                                     <td>
                                        <?php echo $data ['username']; ?> 
                                    </td>
                                    <td>
                                        <?php echo $data ['password']; ?> 
                                    </td>
                                     <td>
                                        <?php echo $data ['nama']; ?> 
                                    </td>
                                     <td>
                                        <?php echo $data ['alamat']; ?>
                                     </td>
                                     <td>
                                        <?php echo $data ['no_tlp']; ?>
                                     </td>
                                     <td>
                                        <?php echo $data ['level']; ?>
                                     </td>
                                    <td width="120px" class="text-center">
                                        <a href=mutakhir_user.php?data=<?php echo $data ['id_user']; ?>><button type="button" class="btn btn-info" > <span class="glyphicon glyphicon-pencil"></span></button></a>
                                        <a onclick='pesan_hapus(<?php echo $data ['id_user']; ?>);'><button type="button" class="btn btn-danger" ><span class="glyphicon glyphicon-trash"></span></button></a>
                                    </td>
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
                    <a href=form_user.php> <input type=button class="btn btn-primary" value="+ Tambah Data User"></a>
                </div>
            </div>

        </div> <!-- container -->
        
       
    </body>
</html>

