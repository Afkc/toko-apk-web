<script type=text/javascript>
	
 function pesan_hapus(dt)
	{
		var pesan = confirm('Anda yakin akan menghapus data?');
		if (pesan)
		{
	      window.location='hapus_barang.php?data='+dt;
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
                      .tr{font-size: 0.675em;}
                      
        </style>
    </head>
    <body>
        <?php
//        includekan fungsi paginasi
//        silahkan di komen atau di hapus saja baris yang tidak ingin digunakan
        include 'pagination.php';
        include '../../barcode/barcode_generator/barcode128.php';
        //include 'paging/pagination2.php';
        //include 'paging/pagination3.php';
       // include 'paging/pagination4.php';
       // include 'paging/pagination5.php';

//        pagination config start
        $q = isset($_REQUEST['q']) ? urldecode($_REQUEST['q']) : ''; // untuk keyword pencarian
        $page = isset($_GET['page']) ? intval($_GET['page']) : 1; // untuk nomor halaman
        $adjacents = isset($_GET['adjacents']) ? intval($_GET['adjacents']) : 3; // khusus style pagination 2 dan 3
        $rpp = 15; // jumlah record per halaman

        $db_link = mysqli_connect('localhost', 'root', '', 'toko'); // sesuaikan username dan password mysqli anda
        $sql = "SELECT * FROM barang WHERE nama_brg LIKE '%$q%' OR id_barang LIKE '%$q%' ORDER BY nama_brg"; // query silahkan disesuaikan
        $result = mysqli_query($db_link, $sql); // eksekusi query

        $tcount = mysqli_num_rows($result); // jumlah total baris
        $tpages = isset($tcount) ? ceil($tcount / $rpp) : 1; // jumlah total halaman
        $count = 0; // untuk paginasi
        $i = ($page - 1) * $rpp; // batas paginasi
        $no_urut = ($page - 1) * $rpp; // nomor urut
        $reload = $_SERVER['PHP_SELF'] . "?q=" . $q . "&amp;adjacents=" . $adjacents; // untuk link ke halaman lain
//        pagination config end
        ?>
        <div>

            <!--judul -->
            <div class="row">
                <div class="col-md-12">
                    <h1>Tabel Barang</h1>
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
                                <th class="th">ID Barang</th>
                                <th class="th">Nama Barang</th>
                                <th class="th">Jenis Barang</th>
                                <th class="th">Ukuran</th>
                                <th class="th">Warna</th>
                                <th class="th">ID Supplier</th>
                                <th class="th">Harga</th>
                                <th class="th">Jumlah</th>
                                <th class="th">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            while (($count < $rpp) && ($i < $tcount)) {
                                mysqli_data_seek($result, $i);
                                $data = mysqli_fetch_array($result);
                                ?>
                                <tr class="tr">
                                    <td width="40px">
                                        <?php echo ++$no_urut; ?> 
                                    </td>
                                    <td>
                                        <?php echo $data ['id_barang']; ?> 
                                    </td>
                                     <td>
                                        <?php echo $data ['nama_brg']; ?> 
                                    </td>
                                     <td>
                                        <?php echo $data ['jenis_barang']; ?> 
                                    </td>
                                     <td>
                                        <?php echo $data ['ukuran']; ?> 
                                    </td>
                                     <td>
                                        <?php echo $data ['warna']; ?> 
                                    </td>
                                     <td>
                                        <?php echo $data ['id_suplier']; ?> 
                                    </td>
                                     <td>
                                        <?php echo $data ['harga']; ?> 
                                    </td>
                                     <td>
                                        <?php echo $data ['jumlah']; ?>
                                    </td>
                                    <td width="150px" class="text-center">
									<div class="btn-group btn-group-justified">
										<a href=cetak_barcode.php?data=<?php echo $data ['id_barang']; ?>><button type="button" class="btn btn-default" > <span class="glyphicon glyphicon-barcode"></span></button></a>
                                        <a href=mutakhir_barang.php?data=<?php echo $data ['id_barang']; ?>><button type="button" class="btn btn-info" > <span class="glyphicon glyphicon-pencil"></span></button></a>
                                        <a  href=hapus_barang.php?data=<?php echo $data ['id_barang']; ?>><button type="button" class="btn btn-danger" onClick="return confirm('Apakah anda akan menghapus barang ini?');"  ><span class="glyphicon glyphicon-trash"></span></button></a>
                                    </div>
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
                    <a href=form_barang.php> <input class="btn btn-primary" type=button value="+ Tambah Data Barang"></a>
                </div>
            </div>
        </div> <!-- container -->       
    </body>
</html>

