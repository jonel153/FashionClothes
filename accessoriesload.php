<?php
$con = mysql_connect("localhost", "root", "");
if(!$con){
	die("Could not connect");
}else{
	
}

mysql_select_db("rent", $con);



$result = mysql_query('SELECT * FROM product WHERE category="Accessories"');

$count = 1;
	while($row = mysql_fetch_array($result)){


		if($count % 2 == 1){
			echo "<div class='col-xs-3 col-xs-offset-1'>
							<div class='row'>
								<div class='col-xs-12'>";

			echo "<a href='#''><img class='topsale' src='".$row[3]."'> <br />";
			echo "<label class='name'>".$row[1]."</label><br />";
			echo "<label class='payment'>&#8369;".$row[2]."</label></a>";
			echo "</div> </div> </div>";
		}else{
			echo "<div class='col-xs-3 col-xs-offset-1'>
							
								<div class='col-xs-12'>";

			echo "<a href='#''><img class='topsale' src='".$row[3]."'>";
			echo "<label class='name'>".$row[1]."</label><br />";
			echo "<label class='payment'>&#8369;".$row[2]."</label></a>";
			echo "</div> </div>";
		}

		$count++;
		
	}

?>

