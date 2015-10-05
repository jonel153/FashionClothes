<?php

if ($_POST){
	$id = htmlspecialchars(trim(ucwords(stripslashes($_POST['id']))));
	$name = htmlspecialchars(trim(ucwords(stripslashes($_POST['pname']))));
	$price = htmlspecialchars(trim(ucwords(stripslashes($_POST['price']))));
	$category = htmlspecialchars(trim(ucwords(stripslashes($_POST['category']))));
	$color = htmlspecialchars(trim(ucwords(stripslashes($_POST['color']))));
	$size = htmlspecialchars(trim(ucwords(stripslashes($_POST['size']))));
	$type = htmlspecialchars(trim(ucwords(stripslashes($_POST['subcategory']))));
	$quantity = htmlspecialchars(trim(ucwords(stripslashes($_POST['quantity']))));
	$status = htmlspecialchars(trim(ucwords(stripslashes($_POST['status']))));

	$con = mysql_connect("localhost", "root", "");

	if(!$con){
		die("Error!");
	}


	/*mkdir("../images/product/$prodid", 0777, true);

	echo $_FILES['fpic']['name'];

	$fronttemp = $_FILES['fpic']['tmp_name'];

	move_uploaded_file($fronttemp, "../images/product/$prodid/front.jpeg");

	$backtemp = $_FILES['bpic']['tmp_name'];

	move_uploaded_file($backtemp, "../images/product/$prodid/back.jpeg");

	$lefttemp = $_FILES['lpic']['tmp_name'];

	move_uploaded_file($lefttemp, "../images/product/$prodid/left.jpeg");

	$righttemp = $_FILES['rpic']['tmp_name'];

	move_uploaded_file($righttemp, "../images/product/$prodid/right.jpeg");
	*/

	//$result = "INSERT INTO product (prodid, name, price, category, color, size, type, quantity, status) VALUES('$prodid', '$name', '$price', '$category', '$color', '$size', '$type', '$quantity', '$status')";
	$result = "UPDATE product SET name='$name', price=$price, category='$category', color='$color', size=$size, type='$type', quantity=$quantity, status='$status' WHERE prodID='$id'";
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

		
		//header("Refresh:20; url=/bootstrap/FashionClothes/admin/newproduct.php");
		/*$result = mysql_query("SELECT * FROM images");

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
		
		$addpic = "INSERT INTO images (imgID, prodID, imageLocation, imageType) VALUES('$imgID', '$prodid', 'images/product/$prodid/front.jpeg', 'Front')";
		
			if (!mysql_query($addpic, $con)){
				echo "error!".mysql_error();

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
			$addpic = "INSERT INTO images (imgID, prodID, imageLocation, imageType) VALUES('$imgID', '$prodid', 'images/product/$prodid/back.jpeg', 'Back')";
			
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
			$addpic = "INSERT INTO images (imgID, prodID, imageLocation, imageType) VALUES('$imgID', '$prodid', 'images/product/$prodid/left.jpeg', 'Left')";
			
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
			$addpic = "INSERT INTO images (imgID, prodID, imageLocation, imageType) VALUES('$imgID', '$prodid', 'images/product/$prodid/right.jpeg', 'Right')";
			
			if (!mysql_query($addpic, $con)){
				echo "error!".mysql_error();

			}else {
				echo "success right";
			}
		*/

		header("Refresh:5;url=product.php");
		include("sidebar.php");
		echo '<div class="alert alert-success">
					<strong>Product updated successfully!. You will redirect in 3 seconds....</strong>
				</div>';


		
	
		

	}


}else{
	echo $_FILES['fpic']['name'];
	//header("Location:index.php");
}

?>