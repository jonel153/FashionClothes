<?php
$con = mysql_connect("localhost", "root", "");

if(!$con){
	echo "Cant connect to database";
}

mysql_select_db("rent", $con);

$result = mysql_query("SELECT * FROM user");
$count = 1;
echo '<div id="prof" class="row">';
while ($row = mysql_fetch_array($result)){
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

			<div class="col-xs-3">
				<label>'.$mname.'</label>
			</div>
			</a>
			
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

				<div class="col-xs-3">
					<label>'.$mname.'</label>
				</div>
			</div>';
	}

	$count++;

}

echo'</div>';
	
?>