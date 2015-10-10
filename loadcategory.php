<?php
$con = mysql_connect("localhost", "root", "");
if(!$con){
	die("Could not connect");
}else{
	
}

mysql_select_db("rent", $con);

if ($category == "All"){
	$result = mysql_query('SELECT * FROM product');
	while($row = mysql_fetch_assoc($result)){
		$prodID = $row['prodID'];
		$name = $row['name'];
		$price = $row['price'];

		$sql = mysql_query('SELECT a.name, a.price, b.colorname, c.size, d.quantity, a.prodID, b.colorID, c.sizeID FROM product as a, color as b, sizetbl as c, productmovementtbl as d WHERE (b.prodID="'.$prodID.'" && a.activate="Yes") && b.colorID = c.colorID && c.sizeID = d.sizeID');
		$wew = mysql_num_rows($sql);
		
		if ($wew > 0) {

			echo $prodID;

			$colors = mysql_query('SELECT colorname FROM color WHERE prodID ="'.$prodID.'"');
			while($colorrow = mysql_fetch_assoc($colors)){
				$colorname = $colorrow['colorname'];
				$id = base64_encode($prodID);	
				echo "<div class='col-xs-4'>
								<div class='row' id='odd'>
									<div class='col-xs-12'>";
				$color = base64_encode($colorname);
				echo "<a href=\"view.php?view=$id&color=$color\"><img class='img-thumbnail' src='images/product/".$prodID."/".$colorname."/front.jpeg'> <br /><br />";
				echo "<label class='name'>".$name."</label><br />";
				echo "<label class='payment'>".$colorname."</label></a><br>";
				echo "<label class='payment'>&#8369;".$price."</label>";
				echo "</div> </div> </div>";

			}
			
		}
	}
	

}else if($category == "Necklace" || $category == "Rings" || $category == "Earings"){
	$result = mysql_query('SELECT * FROM product WHERE type="'.$category.'"');
}else {
	$result = mysql_query('SELECT * FROM product WHERE category="'.$category.'"');
}


/*$count = 1;
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
		
	}*/

?>

