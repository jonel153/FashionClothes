<?php
if ($_POST){
	$name = htmlspecialchars(trim(ucwords(stripslashes($_POST['pname']))));
	$price = htmlspecialchars(trim(ucwords(stripslashes($_POST['price']))));
	$category = htmlspecialchars(trim(ucwords(stripslashes($_POST['category']))));
	$subcategory = htmlspecialchars(trim(ucwords(stripslashes($_POST['subcategory']))));
	
	echo $category ." ". $subcategory;
	$con = mysql_connect("localhost", "root", "");
	if(!$con){
		die("Error!");
	}

	mysql_select_db("rent", $con);

	$result = mysql_query("SELECT * FROM product");

	$row = mysql_num_rows($result) + 1;

	if($row < 10 && $row > 0){
		$prodid = "prod-"."000"."".$row;
		

	}else if($row < 100 && $row > 9){
		$prodid = "prod-"."00"."".$row;
		
		
	}else if($row < 1000 && $row > 99){
		$prodid = "prod-"."0"."".$row;
		
		
	}else {
		$prodid = "prod-".$row;
		
	}

	echo $prodid;



	$result = "INSERT INTO product (prodid, name, price, categoryID, subcategoryID, activate) VALUES('$prodid', '$name', '$price', '$category', '$subcategory', 'Yes')";
	
	if (!mysql_query($result, $con)){
		echo "error! product".mysql_error();

	}else {

		header("Refresh:5;url=choosecolor.php?id=".base64_encode($prodid));
		include("sidebar.php");
		echo '<div class="alert alert-success">
					<strong>Product successfully added!. You will redirect in 3 seconds....</strong>
				</div>';
		
		echo '<link rel="stylesheet" type="text/css" href="styles/global.css" />
		<script src="js/bootstrap.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<script src="scripts/jquery-1.11.3.min.js"></script>
		<script type="text/javascript" src="scripts/general.js"></script>';


	}


}

?>
