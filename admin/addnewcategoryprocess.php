<?php
$category = $_POST['category'];

$connect = mysql_connect("localhost","root","");

	if(!$connect){
		die("Couldnt connect! Contact your administrator".mysql_error());
	}

	mysql_select_db("rent", $connect);

	$sql = "SELECT * FROM categorytbl";
	$result = mysql_query($sql);
	$row = mysql_num_rows($result) + 1;

	if($row < 10 && $row > 0){
		$categoryid = "category"."-"."0"."".$row;
		
	}else if($row < 100 && $row > 9){
		$categoryid = "category"."-"."".$row;
		
	}


	$add = "INSERT INTO categorytbl (categoryID, category) VALUES('$categoryid','$category')";
	if(!mysql_query($add, $connect)){
		echo "Error";
	}

	include("sidebar.php");
	//header("Refresh:4; url=/bootstrap/FashionClothes/admin/choosecategory.php");
	echo '<div class="alert alert-success">
				<strong>Do you want add another Category?<a href="addnewcategory.php" class="btn btn-success">Yes</a> <a href="choosecategory.php" class="btn btn-success">No</a></strong>
			</div>';
	
	echo '<link rel="stylesheet" type="text/css" href="styles/global.css" />
			<script src="js/bootstrap.min.js" type="text/javascript"></script>
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			<script src="scripts/jquery-1.11.3.min.js"></script>
			<script type="text/javascript" src="scripts/general.js"></script>';


?>