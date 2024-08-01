<?php
	include('barcode128.php'); // include php barcode 128 class
	// design our barcode display
	echo '<div style="border:1px double #333; padding:5px;margin:5px auto;width:100%;">';
	echo bar128(stripslashes($_POST['barcode']));
	echo '</div>';
?>