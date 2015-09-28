<?php
$email = $_POST['email'];

mysql_connect("localhost", "root", "");
mysql_select_db("rent");

$query = mysql_query("SELECT * FROM user WHERE email='".$email."'");

$result = mysql_num_rows($query);

if($result < 1) {
	$isAvailable = true;
}else {
	$isAvailable = false;
}



echo json_encode(array(
	'valid' => $isAvailable,

	));
?>