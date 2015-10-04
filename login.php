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

					header("Refresh:5;url=index.php");
					include("header.php"); 
					echo '<div class="alert alert-success">
  							<strong>Success!</strong> Login successfully!. You will redirect in 3 seconds....
							</div>';

				}else{
					$err = $_REQUEST['error']+1;
					$msg = base64_encode("Invalid email and password");
					header("Location:signin.php?error=$err&message=$msg");
				}

			}
		}else {
			echo "Invalid email doesn't exist.";
			$err = $_REQUEST['error']+1;
			$msg = base64_encode("Email doesn't exist!");
			header("Location:signin.php?error=$err&message=$msg");
		}
	}
}



?>