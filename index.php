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

<?php include "header.php";?>

<div id="slide">
	<!--<div class="container">-->
	  <br>
	  <div id="myCarousel" class="carousel slide" data-ride="carousel">
	    <!-- Indicators -->
	    <ol class="carousel-indicators">
	      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
	      <li data-target="#myCarousel" data-slide-to="1"></li>
	      <li data-target="#myCarousel" data-slide-to="2"></li>
	      <li data-target="#myCarousel" data-slide-to="3"></li>
	    </ol>

	    <!-- Wrapper for slides -->
	    <div class="carousel-inner" role="listbox">
	      <div class="item active">
	        <img src="womens.jpg" alt="Chania" width="360" height="50">
	      </div>

	      <div class="item">
	        <img src="womens2.jpg" alt="Chania" width="360" height="50">
	      </div>
	    
	      <div class="item">
	        <img src="mens.jpg" alt="Flower" width="360" height="50">
	      </div>

	      <div class="item">
	        <img src="mens2.jpg" alt="Flower" width="360" height="50">
	      </div>

	    <div class="item">
	        <img src="accessories.jpg" alt="Flower" width="360" height="50">
	      </div>

	     <div class="item">
	        <img src="accessories2.jpg" alt="Flower" width="360" height="50">
	      </div>
	    </div>
	    

	    <!-- Left and right controls -->
	    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	      <span class="sr-only">Previous</span>
	    </a>
	    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	      <span class="sr-only">Next</span>
	    </a>
	  </div>
	<!--</div>-->
</div>

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
					include "load.php";
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



				<div class="middlebar well">

					<div class="row" id="topwomens">
						<div id="mens">Womens top sale<img src="new.png" width="70px" height="70px"></div>
						

					</div>
					<div class="row">
					<?php
					include "womensload.php";
					?>
						
							
					</div>

				</div>


				<div class="middlebar well">

					<div class="row" id="topaccessories">
						<div id="mens">Accessories top sale<img src="new.png" width="70px" height="70px"></div>
						

					</div>
					<div class="row">
					<?php
					include "accessoriesload.php";
					?>
						
							
					</div>

				</div>

			</div>
		</div>
	</div>

</div>

</body>

</html>