<?php
$con = mysql_connect("localhost", "root", "");

if(!$con){
	echo "Cant connect to database";
}
$search = $_POST['txtsearch'];
mysql_select_db("rent", $con);

$check = mysql_query("SELECT COUNT('userid') FROM user WHERE (fname='".$search."' || lname='".$search."' || mname='".$search."') && activate='Yes'");
$pages = ceil(mysql_result($check, 0)/15);
$jump_page = (isset($_GET['page'])) ? (int)$_GET['page']: 1;
$first = ($jump_page-1) * 15;



$result = mysql_query("SELECT * FROM user WHERE activate='Yes' LIMIT $first, 15");
$count = 1;
$prev = $jump_page - 1;
$next = $jump_page + 1;


$result = mysql_query("SELECT * FROM user WHERE (fname='".$search."' || lname='".$search."' || mname='".$search."') && activate='Yes'");
$count = 1;
echo '<div id="prof">';
while ($row = mysql_fetch_array($result)){
	$userID = $row[0];
	$fname = $row[1];
	$lname =  $row[2];
	$mname = $row[3];

	if($count%2 == 1) {	
		echo'<div class="first">
			<div class="col-xs-3">
				<a href="#"><img src="images/profile.png">
			</div>

			<div class="col-xs-3">
				<label>'.$fname.'</label>
			</div>

			<div class="col-xs-3">
				<label>'.$lname.'</label>
			</div>

			<div class="col-xs-2">
				<label>'.$mname.'</label>
			</div>
			</a>

			<div class="col-xs-1">
				<a href="deleteuser.php?id='.base64_encode($userID).'"> <i class="glyphicon glyphicon-remove"></i></a>
			</div>

			
		</div>';
	}else if($count%2 == 0){
		echo '<div class="second">
				<div class="col-xs-3">
					<a href="#"><img src="images/profile.png"></a>
				</div>

				<div class="col-xs-3">
					<label>'.$fname.'</label>
				</div>

				<div class="col-xs-3">
					<label>'.$lname.'</label>
				</div>

				<div class="col-xs-2">
					<label>'.$mname.'</label>
				</div>

				<div class="col-xs-1">
					<a href="deleteuser.php?id='.base64_encode($userID).'"> <i class="glyphicon glyphicon-remove"></i></a>
				</div>
			</div>';
	}

	$count++;

}

echo'</div>';


if($pages == 1){

}else{
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