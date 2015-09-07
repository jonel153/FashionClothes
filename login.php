<?php include "header.php";?>

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
			}

			if($_REQUEST['email'] == $dbemail){
				if($_REQUEST['password'] == $dbpassword){
					$_SESSION['email'] = $_POST['email'];
					$_SESSION['password'] = $_POST['password'];

					if(($_POST['remember']) == 'on'){
						$expire = time()+86400;
						setcookie("rent", $_POST['email'], $expire);
					}




				}
			}

			echo "Login successfully! You will redirect in 3 seconds!";
			header("Refresh:3; url=/bootstrap/FashionClothes");


		}else {
			echo "Invalid username and password! Try again...";
		}
	}
}



?>