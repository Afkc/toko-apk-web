<doctype html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css"/> 
        <script src="../bootstrap/js/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
       <script src="../bootstrap/js/bootstrap.min.js"></script>
        <style>
            /*custom css*/
            .pagination, .pager{
                margin-top: 0px
            }
            .table{
                margin-top: 200px;
            }
                      .th{ background-color:#00D9FF; font-size: 0.875em; font-weight: bold; }
                      .tr{font-size: 0.675em;}
                      
        </style>
    </head>
    <body>
		<center>
			 <table class="table">
       <form action="act_lap.php" method="post">
         <tr>
			<td>Dari</td><td><input type="date" class="form-control" name="dari"></td> 
			<td>Sampai :</td><td><input class="form-control" type="date" name="sampai"></td> 
			<td><input type="submit" name="Input" value="GO" class="btn btn-success"
				id="input"   /></td>
       </tr>
       
       </form>
       </table>
       </center>
    </body>
</html>

