<!DOCTYPE html>
<html>
<head>
<title>Renee Salud Fashion Clothes</title>

<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style.css">

<style type="text/css">

</style>

</head>

<body>

<?php include "header.php  ";?>


<br>
<div id="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-3">
				<div id="leftbar">
					<div id="login" class="form-group">
						<div class="row well">
						<?php include "session.php" ?>;

													<!--<form method="POST" action="login.php">
								<label for="email">Email</label>
								<input type="text" id="email" name="email" class="form-control" placeholder="Enter email"><br>

								<label for="password">Password</label>
								<input type="password" id="password" name="password" class="form-control" placeholder="Enter password">	

								
								<input type="checkbox" id="remember" name="remember" />Remember me<br />
							

								<button type="submit" class="btn btn-primary">Sign in</button>
							</form>-->
							
						</div>
					</div>

				</div>
			</div>
				
			<div class="col-xs-9">
				<div class="middlebar well">

					<div class="row" id="topmens">
						<div id="mens">Mens top sale<img src="new.png" width="70px" height="70px"></div>
						

					</div>
					<div class="row">
					<?php
					$category = base64_decode($_REQUEST['category']);
					
					include "loadcategory.php";
					?>
						<!--<div class="col-xs-4">
							<div class="row well">
								<div class="col-xs-12">
									<a href="#"><img class="topsale" src="mens.jpg"><br>
									<label class="name">Heart Gown</label><br>
									<label class="payment">&#8369; 30,000</label></a>

								</div>
							</div>
						</div>


						<div class="col-xs-4">
							<div class="row">
								<div class="col-xs-12">
								<a href="#"><img class="topsale" src="mens2.jpg"><br>
								<br><label class="name">Christine Reyes Gown</label><br> <label class="payment">&#8369; 30,000 </label></a>
								</div>
							</div>
							
						</div>

						<div class="col-xs-4">
							<div class="row well">
								<div class="col-xs-12">
								<a href="#"><img class="topsale" src="accessories.jpg">
								<br><label class="name">Sam Pinto Gown</label><br> <label class="payment">&#8369; 8,000 </label></a>
								</div>
							</div>
							
						</div>-->
					</div>

				</div>


				

			</div>
		</div>
	</div>

</div>

</body>

</html>