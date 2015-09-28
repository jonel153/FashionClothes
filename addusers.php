<?php

if($_POST){
	include_once("header.php");
	$fname = htmlspecialchars(trim(ucwords(stripslashes($_POST['fname']))));
	$lname = htmlspecialchars(trim(ucwords(stripslashes($_POST['lname']))));
	$mname = htmlspecialchars(trim(ucwords(stripslashes($_POST['mname']))));
	$gender =htmlspecialchars(trim(ucwords(stripslashes($_POST['gen']))));
	$address = htmlspecialchars(trim(ucwords(stripslashes($_POST['address']))));
	$number = htmlspecialchars(trim(ucwords(stripslashes($_POST['number']))));
	$age = htmlspecialchars(trim(ucwords(stripslashes($_POST['age']))));
	$email = htmlspecialchars($_POST['email']);
	$cemail = htmlspecialchars($_POST['cemail']);
	$password = htmlspecialchars($_POST['password']);
	$cpassword = htmlspecialchars($_POST['cpassword']);
	$year= date("Y");
	$month = date("m");
	$day = date("d");
	
	$connect = mysql_connect("localhost","root","");

	if(!$connect){
		die("Couldnt connect! Contact your administrator".mysql_error());
	}

	mysql_select_db("rent", $connect);

	$sql = "SELECT * FROM user WHERE year='".date("Y")."'";
	$result = mysql_query($sql);

	$row = mysql_num_rows($result) + 1;
	

	if($row < 10 && $row > 0){
		$userid = "RSFC-".date("Y")."-"."0000"."".$row;
		
	}else if($row < 100 && $row > 9){
		$userid = "RSFC-".date("Y")."-"."000"."".$row;
		
	}else if($row < 1000 && $row > 99){
		$userid = "RSFC-".date("Y")."-"."00"."".$row;
		
	}else if($row < 10000 && $row > 999){
		$userid = "RSFC-".date("Y")."-"."0"."".$row;
		
	}else {
		$userid = "RSFC-".date("Y")."-".$row; 
		
	}

	$add = "INSERT INTO user (userid, fname, lname, mname, gender, address, pnumber, age, email, password, year, month, day) VALUES('$userid','$fname', '$lname', '$mname', '$gender', '$address', '$number', $age, '$email', '$password', $year, $month, $day)";

	if(!mysql_query($add, $connect)){
		echo "Error";
	}
	echo "Thank you for registration! You will redirect in homepage in 5 seconds.";



}else {
	header("Refresh:0 url=/bootstrap/FashionClothes");
}





?>