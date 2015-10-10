<?php
$con = mysql_connect("localhost", "root", "");
if(!$con){
	echo "Cant connect to database";
}

mysql_select_db("rent", $con);

$check = mysql_query("SELECT COUNT('prodID') FROM product WHERE activate='Yes'");
$pages = ceil(mysql_result($check, 0)/15);
$jump_page = (isset($_GET['page'])) ? (int)$_GET['page']: 1;
$first = ($jump_page-1) * 15;



$result = mysql_query("SELECT prodID, name, price FROM product WHERE activate='Yes' LIMIT $first, 15");
$count = 1;
$prev = $jump_page - 1;
$next = $jump_page + 1;


echo '<div id="prof">';
while ($row = mysql_fetch_array($result)){
	$prodID = $row[0];
	$name = $row[1];
	$price =  $row[2];
	
	
	if($count%2 == 1) {	
		echo'<div class="first">
			<div class="col-xs-3">
			
				<label>'.$prodID.'</label>
			</div>

			<div class="col-xs-3">
				<label>'.$name.'</label>
			</div>

			<div class="col-xs-3">
				<label>&#8369;'.$price.'</label>
			</div>

			<div class="col-xs-1">
				<label><a href="addcolor.php?id='.base64_encode($prodID).'"><i class="glyphicon glyphicon-pencil"></i></a></label>&nbsp &nbsp <a href="delete.php?id='.base64_encode($prodID).'"> <i class="glyphicon glyphicon-remove"></i></a>
			</div>
			
			
		</div>';
	}else if($count%2 == 0){
		echo '<div class="second">
				<div class="col-xs-3">
			
					<label>'.$prodID.'</label>
				</div>

				<div class="col-xs-3">
					<label>&#8369;'.$name.'</label>
				</div>

				<div class="col-xs-3">
					<label>'.$price.'</label>
				</div>

				<div class="col-xs-1">
					<label> <a href=addcolor.php?id='.base64_encode($prodID).'"><i class="glyphicon glyphicon-pencil"></i></a></label>&nbsp &nbsp <a href="delete.php?id='.base64_encode($prodID).'"> <i class="glyphicon glyphicon-remove"></i></a>
				</div>
				
				</div>';
	}

	$count++;

}

echo'</div>';

if($pages == 1){

}else {
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