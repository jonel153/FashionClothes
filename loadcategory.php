<?php
$con = mysql_connect("localhost", "root", "");
if(!$con){
	die("Could not connect");
}else{
	
}

mysql_select_db("rent", $con);

if ($category == "All"){
	$result = mysql_query('SELECT * FROM product');
}else if($category == "Necklace" || $category == "Rings" || $category == "Earings"){
	$result = mysql_query('SELECT * FROM product WHERE type="'.$category.'"');
}else {
	$result = mysql_query('SELECT * FROM product WHERE category="'.$category.'"');
}


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

