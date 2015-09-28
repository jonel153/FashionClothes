<?php

session_start();

if ($_POST){

	if($_REQUEST['email'] && $_REQUEST['password']){
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];

		mysql_connect("localhost", "root", "");
		mysql_select_db("rent");

		$query = mysql_query("SELECT * FROM user WHERE email='".$email."'");

		$result = mysql_num_rows($query);
		if($result != 0){
			while($row = mysql_fetch_assoc($query)){
				$dbemail = $row['email'];
				$dbpassword = $row['password'];
				$dbname = $row['fname']." ".$row['lname'];

			}

			if($_REQUEST['email'] == $dbemail){
				if($_REQUEST['password'] == $dbpassword){				
					$_SESSION['email'] = $_POST['email'];
					$_SESSION['password'] = $_POST['password'];
					$_SESSION['name'] = $dbname;
					$expire = time()+86400;
					setcookie("rent", $_POST['email'], $expire);
					setcookie("name", $_SESSION['name'], $expire);
						
					

				}
			}
			echo'<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style.css">';
			include("header.php");  
			echo "Login successfully! You will redirect in 3 seconds!";
			header("Refresh:5; url=index.php");


		}else {
			echo "Invalid username and password! Try again...";
		}
	}
}



?>