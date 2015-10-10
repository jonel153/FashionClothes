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

}

ul {
list-style: none;
}


#main {
margin-top: 20px;
}

#subcategorymale, #subcategoryfemale, #subcategoryacc{
	display: none;
	width: 120px;
}

#category{
margin-bottom: 100px;

}

#color{
margin-bottom: 50px;
}
#red{
display: inline-block;
height: 30px;
width: 30px;
background-color: red;
}

#yellow {
display: inline-block;
height: 30px;
width: 30px;
background-color: yellow;
}

#blue {
display: inline-block;

height: 30px;
width: 30px;
background-color: blue;
}

#green {
display: inline-block;
height: 30px;
width: 30px;
background-color: green;
}


#black {
display: inline-block;
height: 30px;
width: 30px;
background-color: black;
}

#white {
border: 1px solid gray;
display: inline-block;
height: 30px;
width: 30px;
background-color: white;
}

#orange {
border: 1px solid gray;
display: inline-block;
height: 30px;
width: 30px;
background-color: orange;
}

#pricerange {
margin-bottom: 50px;
}

.divprice {
margin-bottom: 30px;
}
#btnfilter {
margin-top: 50px;
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
 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style.css">

</head>

<body>

<?php include("session.php");?>

<div id="main">
	<div class="container-fluid">
		<div class="row">
			<div class="col-xs-3">
				<div id="leftbar">
					<div id="login" class="form-group">
						<div class="row well">
						
						
						

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
								<form enctype="multipart/form-data" id="filter" action="filter.php" method="POST">
									<div id="filterheader" class="well">Filter</div>
									

										<div id="category">
											Category<br>
											<ul>
											
											<li><input type="radio" name="category" id="mens" value="Male"><label>Men's</label></li>
											<li><input type="radio" name="category" id="womens" value="Female"><label>Womens</label></li>
											<li><input type="radio" name="category" id="accessories" value="Accessories"><label>Accessories</label></li>

											</ul>

												Subcategory
												<select id="subcategorymale" name="subcategorymale" class="form-control">
													<option value="">Choose..</option>
													<option value="Barong">Barong</option>
												</select>

												<select id="subcategoryfemale" name="subcategoryfemale" class="form-control">
													<option value="">Choose..</option>
													<option value="Cocktail">Cocktail</option>
													<option value="Long Gown">Long Gown</option>
												</select>

												<select id="subcategoryacc" name="subcategoryacc" class="form-control">
													<option value="">Choose..</option>
													<option value="Earings">Earings</option>
													<option value="Rings">Rings</option>
												</select>
												<hr>

										<div id="color" class="col-md-12">
											Color:

											<div id="red"><input type="checkbox" name="checkred" id="checkred" value="red" /></div>
											<div id="yellow"><input type="checkbox" name="checkyellow" id="checkyellow" value="Yellow" /></div>
											<div id="blue"><input type="checkbox" name="checkyblue" id="checkblue" /></div>
											<div id="green"><input type="checkbox" name="checkgreen" id="checkgreen" /></div>
											<div id="black"><input type="checkbox" name="checkblack" id="checkblack" /></div>
											<div id="white"><input type="checkbox" name="checkwhite" id="checkwhite" /></div>
											
											<hr>
										</div>
										

										<div id="pricerange" class="col-md-8">
											<div class="divprice">
											Lowest Range
												<input type="range" min="100" max="10000" id="pricelow" onchange="fetch()" />
												<input type="text" id="low" name="low" class="form-control" />
											</div><br>
											
											<div class="divprice">Highest Range
												<input type="range" min="100" max="10000" id="pricehigh" onchange="fetch1()" />
												<input type="text" id="high" name="high" class="form-control" />
												<hr>
											</div>


										</div>

										
										<div id="size" class="col-md-8">Size
											<input type="range" min="20" max="40" id="sizeslider" step="1" onchange="fetchsize()" />
											<input type="text" id="sizerange" name="sizerange" class="form-control" />
										</div>
									</div>
									<div id="btnfilter" class="col-md-5 col-md-offset-6">
										<input type="submit" value="Filter" class="form-control">
									</div>								
								</form>
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
					$color = base64_decode($_REQUEST['color']);

					$wew = mysql_connect("localhost", "root", "");
					mysql_select_db("rent", $wew);

					$result = mysql_query("SELECT * FROM product WHERE prodID='".$id."'");

					while($row = mysql_fetch_assoc($result)){
						$name = $row['name'];
						$price = $row['price'];

						$picture = "images/product/$id/$color/";
						echo $picture;
					}

					echo '<div id="displayzoom">
					<h1>'.$name.'</h1>
					<h3>Price: '.$price.'</h3>
					<br /><h4>Front view</h4>
					<img id="img_01" src="'.$picture.'front.jpeg" data-zoom-image="'.$picture.'front.jpeg" width="411" height="274" />
					
					</div>';

					echo'<br> <br>';

					echo '<div id="displayzoom">
					<h1>'.$name.'</h1>
					<h3>Price: '.$price.'</h3>
					<br /><h4>Front view</h4>
					<img id="img_02" src="'.$picture.'back.jpeg" data-zoom-image="'.$picture.'back.jpeg" width="411" height="274" />
					
					</div>';

					echo'<br> <br>';

					echo '<div id="displayzoom">
					<h1>'.$name.'</h1>
					<h3>Price: '.$price.'</h3>
					<br /><h4>Front view</h4>
					<img id="img_03" src="'.$picture.'left.jpeg" data-zoom-image="'.$picture.'left.jpeg" width="411" height="274" />
					
					</div>';

					echo'<br> <br>';

					echo '<div id="displayzoom">
					<h1>'.$name.'</h1>
					<h3>Price: '.$price.'</h3>
					<br /><h4>Front view</h4>
					<img id="img_04" src="'.$picture.'right.jpeg" data-zoom-image="'.$picture.'right.jpeg" width="411" height="274" />
					
					</div>';

					?>
			<br><br><br><br><br><br><br><br><br><br><br><br><br><br>

						<!--<h1>Basic Zoom Example</h1>
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

							</div><br />-->

							
						

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

function fetch(){
	var wew = document.getElementById("pricelow").value;
	document.getElementById("low").value = wew;

}

function fetch1(){
	var wew = document.getElementById("pricehigh").value;
	document.getElementById("high").value = wew;

}

function fetchsize(){
	var wew = document.getElementById("sizeslider").value;
	document.getElementById("sizerange").value = wew;

}


$("#mens").click(function(){
	$("#subcategorymale").show();
	$("#subcategoryfemale").hide();
	$("#subcategoryacc").hide();
});

$("#womens").click(function(){
	$("#subcategoryfemale").show();
	$("#subcategorymale").hide();
	$("#subcategoryacc").hide();

});

$("#accessories").click(function(){
	$("#subcategoryacc").show();
	$("#subcategorymale").hide();
	$("#subcategoryfemale").hide();

});



  $("#img_01").elevateZoom({gallery:'gal1', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 
  
   $("#img_02").elevateZoom({cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 
   $("#img_03").elevateZoom({cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 
   $("#img_04").elevateZoom({cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 

</script>


</body>

</html>