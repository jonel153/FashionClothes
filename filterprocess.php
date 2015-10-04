<?php
$category = $_POST['category'];
$con = mysql_connect("localhost", "root", "");
if(!$con){
	die("Could not connect");
}else{
	
}
if($category == "Male"){
	$subcategory = $_POST['subcategorymale'];
}else if($category == "Female"){
	$subcategory = $_POST['subcategoryfemale'];
}else if($category == "Accessories"){
	$subcategory = $_POST['subcategoryacc'];
}

$color = $_POST['checkred'];

$low = $_POST['low'];
$high = $_POST['high'];
$size = $_POST['sizerange'];

echo $low." wew";
mysql_select_db("rent", $con);
$result = mysql_query('SELECT * FROM product WHERE category="'.$category.'" && type="'.$subcategory.'" && color="'.$color.'" && price >='.$low.' && price <='.$high.' && size='.$size.' && activate="Yes"' );



$count = 1;
	while($row = mysql_fetch_array($result)){

		
		$id = base64_encode($row[0]);	
			echo "<div class='col-xs-4'>
							<div class='row' id='odd'>
								<div class='col-xs-12'>";

			echo "<a href=\"view.php?view=$id\"><img class='img-thumbnail' src='".$row[3]."'> <br /><br />";
			echo "<label class='name'>".$row[1]."</label><br />";
			echo "<label class='payment'>&#8369;".$row[2]."</label></a>";
			echo "</div> </div> </div>";
			

		$count++;
		
	}


?>

