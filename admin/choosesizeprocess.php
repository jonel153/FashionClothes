<?php
if(isset($_POST['submit'])){
	$size = $_POST['size'];
	$colorID = $_POST['colorID'];
	$prodID = $_POST['prodID'];
	echo $colorID . "wew";
	echo $prodID . "wew1";
	$con = mysql_connect("localhost", "root", "");
	if(!$con){
		die("Error!");
	}

	mysql_select_db("rent", $con);

	foreach ($size as $sizes => $value) {
		$result = mysql_query("SELECT * FROM sizetbl");

		$row = mysql_num_rows($result) + 1;
		if($row < 10 && $row > 0){
			$sizeid = "size-"."000"."".$row;
		}else if($row < 100 && $row > 9){
			$sizeid = "size-"."00"."".$row;
		}else if($row < 1000 && $row > 99){
			$sizeid = "size-"."0"."".$row;
		}else {
			$sizeid = "size-".$row;	
		}

		$addsize = "INSERT INTO sizetbl (sizeID, colorID, size) VALUES('$sizeid', '$colorID', '$value')";
		if (!mysql_query($addsize, $con)){
		echo "error! images".mysql_error();
		}
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
	echo '<div class="alert alert-success">
				<strong>Do you want add another color for this product?<a href="choosecolor.php?id='.base64_encode($prodID).'" class="btn btn-success">Yes</a> <a href="product.php" class="btn btn-success">No</a></strong>
			</div>';		


}
?>