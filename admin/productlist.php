<?php
$con = mysql_connect("localhost", "root", "");

if(!$con){
	echo "Cant connect to database";
}

mysql_select_db("rent", $con);

$result = mysql_query("SELECT * FROM product");
$count = 1;
echo '<div id="prof" class="row">';
while ($row = mysql_fetch_array($result)){
	$prodID = $row[0];
	$name = $row[1];
	$price =  $row[2];
	$picID =  $row[3];
	$category = $row[4];
	$color =  $row[5];
	$size =  $row[6];
	$type =  $row[7];
	$quantity = $row[8];
	$status = $row[9];

	if($count%2 == 1) {	
		echo'<div class="first">
			<div class="col-xs-3">
			
				<label>'.$name.'</label>
			</div>

			<div class="col-xs-3">
				<label>&#8369;'.$price.'</label>
			</div>

			<div class="col-xs-3">
				<label>'.$category.'</label>
			</div>

			<div class="col-xs-2">
				<label>'.$quantity.'</label>
			</div>

			<div class="col-xs-1">
				<label> <a href="editproduct.php?name='.base64_encode($name).'&category='.base64_encode($category).'"><i class="glyphicon glyphicon-pencil"></i></label>
			</div>
			
			
		</div>';
	}else if($count%2 == 0){
		echo '<div class="second">
				<div class="col-xs-3">
					
					<label>'.$name.'</label>
				</div>

				<div class="col-xs-3">
					<label>&#8369;'.$price.'</label>
				</div>

				<div class="col-xs-3">
					<label>'.$category.'</label>
				</div>

				<div class="col-xs-2">
					<label>'.$quantity.'</label>
				</div>

				<div class="col-xs-1">
					<label> <a href="editproduct.php?name='.base64_encode($name).'&category='.base64_encode($category).'"><i class="glyphicon glyphicon-pencil"></i></label>
				</div>
			
			</div>';
	}

	$count++;

}

echo'</div>';
	
?>