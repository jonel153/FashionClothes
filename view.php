<!DOCTYPE html>
<html>
<head>

<style>

 #gal1 img {
 border:2px solid white;

}

.active img {
border:2px solid #333 !important;

}

#displayzoom {
margin-left: 10%;
margin-top: 10%;
}

#filterheader {
margin: 0px;
padding: 0px;
font-size: 25px;
border-bottom: 3px solid #ccc;

}

#category input {
padding-left: 15px;
margin-right: 2px;
}

#filtering {
border-right: 1px solid #ccc;
border-left: 1px solid #ccc;
}

ul {
list-style: none;
}

#main {
margin-top: 20px;
}

</style>

<title>Renee Salud Fashion Clothes</title>



<!--Script for zooming-->
<script src='jquery-1.8.3.min.js'></script>
	<script src='jquery.elevatezoom.js'></script>

 	
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<!--<script src="js/jquery-1.11.1.js" type="text/javascript"></script>-->
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
 <!-- <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>-->

<link rel="stylesheet" href="style.css">

</head>

<body>

<?php include "header.php";?>


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

						<div class= "row">
						<div id="filtering"> 

							<div id="filterheader" class="well">Filter</div>
							

							<div id="category">
							Category<br>
							<ul>
							<li><input type="checkbox" id="mens">All</li>
							<li><input type="checkbox" id="mens">Men's</li>
							<li><input type="checkbox" id="mens">Women's</li>
							<li><input type="checkbox" id="mens">Accessories</li>

							</ul>
							<hr>
							<div id="color">
								color	
							</div>
							<hr>
							<div id="pricerange">
								Price
								<input type="text" class="span2" value="" data-slider-min="-20" data-slider-max="20" data-slider-step="1" data-slider-value="-14" data-slider-orientation="vertical" data-slider-selection="after"data-slider-tooltip="hide">

							</div>

							</div>
						</div>

						</div>

					</div>

				</div>
			</div>
			

			<div class="col-xs-9">
				<div class="middlebar well">

					<div class="row">
					<?php

					$id = base64_decode($_REQUEST['view']);

					$wew = mysql_connect("localhost", "root", "");
					mysql_select_db("rent", $wew);

					$result = mysql_query("SELECT * FROM product WHERE prodID='".$id."'");

					while($row = mysql_fetch_assoc($result)){
						$name = $row['name'];
						$price = $row['price'];
						$picture = $row['picture'];
					}

					echo '<div id="displayzoom">
					<h1>'.$name.'</h1>
					<br /><h4>Front view</h4>
					<img id="img_02" src="'.$picture.'" data-zoom-image="'.$picture.'" width="411" height="274" />
					<h3>Price: '.$price.'</h3>
					</div>';

					echo'<br> <br>';

					echo '<div id="displayzoom">
					<h1>'.$name.'</h1>
					<br /><h4>Side view</h4>
					<img id="img_03" src="'.$picture.'" data-zoom-image="'.$picture.'" width="411" height="274" />
					<h3>Price: '.$price.'</h3>
					</div>';

					?>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

						<h1>Basic Zoom Example</h1>
							<img id="img_01" src="zoom/images/wew.jpg" data-zoom-image="zoom/images/large/image2.jpg" />

							<div id="gal1">
							 
							  <a href="#" class="active" data-image="zoom/images/wew.jpg" data-zoom-image="zoom/images/large/image2.jpg">
							    <img id="img_01" src="zoom/images/wew.jpg" width="100px" height="67px" />
							  </a> 

							  <a href="#" data-image="zoom/images/small/image1.png" data-zoom-image="zoom/images/large/image1.jpg">
							    <img id="img_01" src="zoom/images/thumb/image1.jpg"/>
							  </a>

							  <a href="#" data-image="mens.jpg" data-zoom-image="mens.jpg" width="411" height="274">
							    <img id="img_01" src="mens.jpg" width="100" height="67" />
							  </a>

							  <a href="#" data-image="mens.jpg" data-zoom-image="mens.jpg" width="411" height="274">
							    <img id="img_01" src="mens.jpg" width="100" height="67" />
							  </a>

							</div><br />

							
						

					</div>
					<div class="row">



					
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



<script>
  $("#img_01").elevateZoom({gallery:'gal1', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 
  
   $("#img_02").elevateZoom({cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 
   $("#img_03").elevateZoom({cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 

</script>


</body>

</html>