<?php
if(isset($_POST['submit'])){
	$sizeID = $_POST['size'];
	$colorID = $_POST['colorID'];
	$prodID = $_POST['prodID'];
	$quantity = $_POST['quantity'];

	include("databaseconnection.php");


	$result = mysql_query("SELECT * FROM productmovementtbl");

	$row = mysql_num_rows($result) + 1;
	if($row < 10 && $row > 0){
		$transactionid = "prod-move-"."000"."".$row;
	}else if($row < 100 && $row > 9){
		$transactionid = "prod-move"."00"."".$row;
	}else if($row < 1000 && $row > 99){
		$transactionid = "prod-move"."0"."".$row;
	}else {
		$transactionid = "prod-move-".$row;
	}

	$date = date("Y-m-d:i:sa");
	
	$result = "INSERT INTO productmovementtbl (prodmoveID, sizeID, quantity, dateandtime, adminID) VALUES('$transactionid', '$sizeID', '$quantity', '$date', 'admin-0001')";
	if (!mysql_query($result, $con)){
		echo "error! images".mysql_error();
	}

	//header("Refresh:5;url=choosesize.php?color=".base64_encode($colorid))	;
	echo '<link rel="stylesheet" type="text/css" href="styles/global.css" />
			<script src="js/bootstrap.min.js" type="text/javascript"></script>
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			<script src="scripts/jquery-1.11.3.min.js"></script>
			<script type="text/javascript" src="scripts/general.js"></script>';
	
	include("sidebar.php");
	echo $prodID;
	echo '<div class="alert alert-success">
				<strong><a href="addcolor.php?id='.base64_encode($prodID).'" class="btn btn-success">Clikc here to add color</a><br>
				<form action="addsize.php" method="POST"><input type="hidden" name="color" value="'.$colorID.'">
				<input type="hidden" name="prodID" value="'.$prodID.'">
				<input type="hidden" name="color" value="'.$colorID.'">
				<input type="submit" name="submit" class="btn btn-success" value="Click here to add size"></strong>
				</form>

				<a href="addcolor.php" class="btn btn-success">Clikc here to add color</a>
			</div>';


}
?>