<?php
$con = mysql_connect("localhost", "root", "");
if(!$con){
	die("Could not connect");
}else{
	echo "connect ok!";
}

mysql_select_db("rent", $con);



$result = mysql_query('SELECT * FROM product');

echo "<table border='1px'>
		<tr>";
	while($row = mysql_fetch_array($result)){
		echo "<td>";

			echo "<img src='".$row[3]."' width='200px' height='200px'> <br />";
			echo $row[1]."<br />";
			echo $row[2]."</td>";
	}

?>