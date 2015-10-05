<?php


	$con = mysql_connect("localhost", "root", "");
	$id =base64_decode($_REQUEST['id']);
	if(!$con){
		die("Error!");
	}


	$result = "UPDATE user SET activate='No' WHERE userid='$id'";
	mysql_select_db("rent", $con);
	if (!mysql_query($result, $con)){
		echo "error!".mysql_error();

	}else {
		echo '<link rel="stylesheet" type="text/css" href="styles/global.css" />

	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

	  <script src="scripts/jquery-1.11.3.min.js"></script>

	<script type="text/javascript" src="scripts/general.js">
		
	</script>';
	header("Refresh:4 url=/bootstrap/FashionClothes/admin/");
}
	echo "The product Deleted successfully!...You will redirect to Product page in 5 seconds...";
	
	include("sidebar.php");







?>