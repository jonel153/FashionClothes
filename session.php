<?php
//include ("header.php");
if(!isset($_SESSION['email']) && isset($_COOKIE['rent'])){
	
	$_SESSION['email'] = $_COOKIE['rent'];
	$_SESSION['name'] = $_COOKIE['name'];

	
}


if(!isset($_SESSION['email'])){
	
	/*echo'<form method="POST" action="login.php">
		<label for="email">Email</label>
		<input type="text" id="email" name="email" class="form-control" placeholder="Enter email"><br>

		<label for="password">Password</label>
		<input type="password" id="password" name="password" class="form-control" placeholder="Enter password">	

		
		<br>
	

		<button type="submit" class="btn btn-primary">Sign in</button>
	</form>';*/
	
	include("header.php");

}else {
	mysql_connect("localhost", "root", "");
	mysql_select_db("rent");

	$query =mysql_query("SELECT * FROM user WHERE email='".$_SESSION['email']."'");

	while($row = mysql_fetch_assoc($query)){
		$name = $row['fname'].$row['mname']." ". $row['lname']; 
	
	}


	include("headerlogin.php");
	/*echo '<img src="mens2.jpg" class="img-circle" id="profile">
						<div class="row"><br />
							<h4><b>'.$name.'</b></h4><br /><br />
							<a href="#">My account</a> <br />
							<a href="#">Reserved Item</a> <br />
							<a href="#">Rent Item</a> <br />
							<a href="logout.php">Logout</a>
						</div>';
						echo '';*/

		

}


?>