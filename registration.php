<html>
<head>
<title>Registration Form</title>

 <link rel="stylesheet" href="theme/superhero/bootstrap.css" media="screen">
 <link rel="stylesheet" href="theme/superhero/usebootstrap.css">
<script src="js/superhero/bootstrap.min.js" type="text/javascript"></script>
<script src="js/superhero/usebootstrap.js" type="text/javascript"></script>
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->

<link rel="stylesheet" href="style.css">

<style type="text/css">

#reg {
	margin-left: 5%;
	width: 60%;
}

.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}

#signup {
	margin-left: 70%;
}

</style>

</head>

<body>

<?php
include "header.php";
?>

<div id="main">

	<div class="container">

		<div class="well">
			<br> <br>
			<h2>Please Sign Up!</h2>
			<hr class="colorgraph">

			<div id="reg">
				<form action="addusers.php" method="POST">
					<div class="form-group">
						<label for="fname">First name: </label>
						<input type="text" class="form-control" id="fname" name="fname" placeholder="Type your first name here...">
					</div><br>


					<div class="form-group">
						<label for="lname">Last name: </label>
						<input type="text" class="form-control" id="lname" name="lname" placeholder="Type your last name here...">
					</div><br>

					<div class="form-group">
						<label for="mname">Middle name: </label>
						<input type="text" class="form-control" id="mname" name="mname" placeholder="Type your middle name here...">
					</div><br>

					<div class="form-group">
						<label>Gender: </label><br>
						<label class="checkbox-inline"> <input type="radio" name="gen" class="form-control" value="Male">Male </label>
						<label class="checkbox-inline"> <input type="radio" name="gen" class="form-control" value="Female">Female </label>
						
					</div><br>

					<div class="form-group">
						<label for="address">Address: </label>
						<input type="text" class="form-control" id="address" name="address" placeholder="Type your Address here...">
					</div><br>

					<div class="form-group">
						<label for="number">Phone number: </label>
						<input type="text" class="form-control" id="number" name="number" placeholder="Type your phone number here...">
					</div><br>

					<div class="form-group">
						<label for="age">Age: </label>
						<input type="number" class="form-control" id="age" name="age" placeholder="Type your age here...">
					</div><br>

					<div class="form-group">
						<label for="email">Email: </label>
						<input type="text" class="form-control" id="email" name="email" placeholder="Type your email here...">
					</div><br>

					<div class="form-group">
						<label for="cemail">Confirm Email: </label>
						<input type="text" class="form-control" id="cemail" name="cemail" placeholder="Confirm your email here...">
					</div><br>

					<div class="form-group">
						<label for="password">Password: </label>
						<input type="password" class="form-control" id="password" name="password" placeholder="Type your password here...">
					</div><br>

					<div class="form-group">
						<label for="cpassword">Confirm Password: </label>
						<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm password here...">
					</div><br>

					<div class="form-group">
						
						<input type="submit" value="Sign up" class="btn btn-success" id="signup">
					</div><br>
				</form>
			</div>
		</div>
			
		
	</div>

</div>
</body>
</html>