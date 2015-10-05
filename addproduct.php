<html>
<head>
<title>Add product</title>

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
#reg {
width: 40%;
}

#reg input{
font-size: 12px;
height: 30px;
padding-bottom: 5px;

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
				<form action="productadd.php" method="POST">
					<div class="form-group">
						<label for="pname">Product name: </label>
						<input type="text" class="form-control" id="pname" name="pname" placeholder="Type product name here...">
					</div><br>


					<div class="form-group">
						<label for="price">Price: </label>
						<input type="number" class="form-control" id="price" name="price" placeholder="Type price here...">
					</div><br>

					<div class="form-group">
						<label for="fpic">Picture Front: </label>
						<input type="file" id="fpic" name="fpic">

						<label for="lpic">Picture leftside: </label>
						<input type="file" id="lpic" name="lpic">

						<label for="rpic">Picture rightside: </label>
						<input type="file" id="rpic" name="rpic">

					</div><br>

					

					<div class="form-group">
						<label for="category">Category: </label>
						<input type="text" class="form-control" id="category" name="category" placeholder="Type category here...">
					</div><br>

					<div class="form-group">
						<label for="color">Color: </label>
						<input type="text" class="form-control" id="color" name="color" placeholder="Type color here...">
					</div><br>

					<div class="form-group">
						<label for="size">Size: </label>
						<input type="number" class="form-control" id="size" name="size" placeholder="Type size here...">
					</div><br>

					<div class="form-group">
						<label for="Type">Type: </label>
						<input type="text" class="form-control" id="type" name="type" placeholder="Type of the product...">
					</div><br>

					<div class="form-group">
						<label for="quantity">Quantity: </label>
						<input type="text" class="form-control" id="quantity" name="quantity" placeholder="Type the quantity...">
					</div><br>

					<div class="form-group">
						<label for="status">Status: </label>
						<input type="text" class="form-control" id="status" name="status" placeholder="Type your password here...">
					</div><br>

						
						<input type="submit" value="Add product" class="btn btn-success" id="addproduct">
					</div><br>
				</form>
			</div>
		</div>
			
		
	</div>

</div>
</body>
</html>