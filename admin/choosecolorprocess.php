<?php
if ($_POST){
	$prodid = $_POST['prodID'];
	$color = $_POST['color'];
	$con = mysql_connect("localhost", "root", "");
	if(!$con){
		die("Error!");
	}

	mysql_select_db("rent", $con);

	$result = mysql_query("SELECT * FROM color");

	$row = mysql_num_rows($result) + 1;



	if($row < 10 && $row > 0){
		$colorid = "color-"."000"."".$row;
	}else if($row < 100 && $row > 9){
		$colorid = "color-"."00"."".$row;
	}else if($row < 1000 && $row > 99){
		$colorid = "color-"."0"."".$row;
	}else {
		$colorid = "color-".$row;
	}

	echo $prodid;

	$addpic = "INSERT INTO color (colorID, prodID, colorname) VALUES('$colorid', '$prodid', '$color')";

	if (!mysql_query($addpic, $con)){
		echo "error! images".mysql_error();

	}else {
		
	}


	mkdir("../images/product/$prodid/$color", 0777, true);

	echo $_FILES['fpic']['name'];

	$fronttemp = $_FILES['fpic']['tmp_name'];

	move_uploaded_file($fronttemp, "../images/product/$prodid/$color/front.jpeg");

	$backtemp = $_FILES['bpic']['tmp_name'];

	move_uploaded_file($backtemp, "../images/product/$prodid/$color/back.jpeg");

	$lefttemp = $_FILES['lpic']['tmp_name'];

	move_uploaded_file($lefttemp, "../images/product/$prodid/$color/left.jpeg");

	$righttemp = $_FILES['rpic']['tmp_name'];

	move_uploaded_file($righttemp, "../images/product/$prodid/$color/right.jpeg");


	
	//header("Refresh:20; url=/bootstrap/FashionClothes/admin/newproduct.php");
	$result = mysql_query("SELECT * FROM images");

	$row = mysql_num_rows($result) + 1;

	if($row < 10 && $row > 0){
		$imgID = "img-"."000"."".$row;
	}else if($row < 100 && $row > 9){
		$imgID = "img-"."00"."".$row;
	}else if($row < 1000 && $row > 99){
		$imgID = "img-"."0"."".$row;
	}else {
		$imgID = "img-".$row;		
	}
	
	$addpic = "INSERT INTO images (imgID, prodID, imageLocation, imageType) VALUES('$imgID', '$prodid', 'images/product/$prodid/$color/front.jpeg', 'Front')";
	
		if (!mysql_query($addpic, $con)){
			echo "error! images".mysql_error();

		}else {
			echo "success front";
		}


	$result = mysql_query("SELECT * FROM images");

	$row = mysql_num_rows($result) + 1;

	if($row < 10 && $row > 0){
		$imgID = "img-"."000"."".$row;
	}else if($row < 100 && $row > 9){
		$imgID = "img-"."00"."".$row;
	}else if($row < 1000 && $row > 99){
		$imgID = "img-"."0"."".$row;
	}else {
		$imgID = "img-".$row;		
	}
		$addpic = "INSERT INTO images (imgID, prodID, imageLocation, imageType) VALUES('$imgID', '$prodid', 'images/product/$prodid/$color/back.jpeg', 'Back')";
		
		if (!mysql_query($addpic, $con)){
			echo "error!".mysql_error();
		}else {	
			echo "success back";
		}


	$result = mysql_query("SELECT * FROM images");

	$row = mysql_num_rows($result) + 1;

	if($row < 10 && $row > 0){
		$imgID = "img-"."000"."".$row;
	}else if($row < 100 && $row > 9){
		$imgID = "img-"."00"."".$row;
	}else if($row < 1000 && $row > 99){
		$imgID = "img-"."0"."".$row;
	}else {
		$imgID = "img-".$row;			
	}
	
	$addpic = "INSERT INTO images(imgID, prodID, imageLocation, imageType) VALUES('$imgID', '$prodid', 'images/product/$prodid/$color/left.jpeg', 'Left')";
		
	if (!mysql_query($addpic, $con)){
		echo "error!".mysql_error();

	}else {
		echo "success left";
	}


	$result = mysql_query("SELECT * FROM images");

	$row = mysql_num_rows($result) + 1;

	if($row < 10 && $row > 0){
		$imgID = "img-"."000"."".$row;
	}else if($row < 100 && $row > 9){
		$imgID = "img-"."00"."".$row;
	}else if($row < 1000 && $row > 99){
		$imgID = "img-"."0"."".$row;
	}else {
		$imgID = "img-".$row;		
	}

	$addpic = "INSERT INTO images (imgID, prodID, imageLocation, imageType) VALUES('$imgID', '$prodid', 'images/product/$prodid/$color/right.jpeg', 'Right')";
	
	if (!mysql_query($addpic, $con)){
		echo "error!".mysql_error();

	}else {
		
	}



	header("Refresh:5;url=choosesize.php?color=".base64_encode($colorid)."&prodID=".base64_encode($prodid));
	echo '<link rel="stylesheet" type="text/css" href="styles/global.css" />
			<script src="js/bootstrap.min.js" type="text/javascript"></script>
			<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
				<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
				<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			<script src="scripts/jquery-1.11.3.min.js"></script>
			<script type="text/javascript" src="scripts/general.js"></script>';
	
	include("sidebar.php");
	echo '<div class="alert alert-success">
				<strong>Product successfully added!. You will redirect in 3 seconds....</strong>
			</div>';
		
	
		

	


}else{
	
}

?>