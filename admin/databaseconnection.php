<?php
$con = mysql_connect("localhost", "root", "");
if(!$con){
	echo "Cant connect to database";
}

mysql_select_db("rent", $con);
?>