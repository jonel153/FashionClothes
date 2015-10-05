<?php
$con = mysql_connect("localhost", "root", "");

if(!$con){
	echo "Cant connect to database";
}

mysql_select_db("rent", $con);
$search = $_POST['txtsearch'];

$check = mysql_query("SELECT COUNT('prodID') FROM product WHERE name='".$search."' && activate='Yes'");
$pages = ceil(mysql_result($check, 0)/15);
$jump_page = (isset($_GET['page'])) ? (int)$_GET['page']: 1;
$first = ($jump_page-1) * 15;



$result = mysql_query("SELECT * FROM product WHERE name='".$search."' && activate='Yes' LIMIT $first, 15");
$count = 1;
$prev = $jump_page - 1;
$next = $jump_page + 1;


echo '<div id="prof">';
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
				<label> <a href="editproduct.php?name='.base64_encode($name).'&price='.base64_encode($price).'&category='.base64_encode($category).'&subcategory='.base64_encode($type).'&color='.base64_encode($color).'&size='.base64_encode($size).'&quantity='.base64_encode($quantity).'&status='.base64_encode($status).'&id='.base64_encode($prodID).'"><i class="glyphicon glyphicon-pencil"></i></a></label>&nbsp &nbsp <a href="delete.php?id='.base64_encode($prodID).'"> <i class="glyphicon glyphicon-remove"></i></a>
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
					<label> <a href="editproduct.php?name='.base64_encode($name).'&price='.base64_encode($price).'&category='.base64_encode($category).'&subcategory='.base64_encode($type).'&color='.base64_encode($color).'&size='.base64_encode($size).'&quantity='.base64_encode($quantity).'&status='.base64_encode($status).'&id='.base64_encode($prodID).'"><i class="glyphicon glyphicon-pencil"></i></a></label>&nbsp &nbsp<a href="delete.php?id='.base64_encode($prodID).'"> <i class="glyphicon glyphicon-remove"></i></a>
				</div>
			
			</div>';
	}

	$count++;

}



if($pages == 1){


}else{
	
	echo'</div>';

	echo '<div id="page"><ul class="pagination">';

	if($jump_page > 1){
	echo "<li><a href='product.php?page=$prev'>Prev</a></li>";
	}


	if($jump_page >= 1){
		for($a = 1; $a <= $pages; $a++){
			echo($a==$jump_page)?'<li><a href="?page='.$a.'">'.$a.'</a></li>':'<li><a href="?page='.$a.'">'.$a.'</a></li>';
		}
	}


	if($jump_page < $pages){
		echo "<li><a href='product.php?page=$next'>Next</a></li>";
	}
	echo '</ul></div>';
}

	
?>