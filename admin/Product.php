<!DOCTYPE html>

<html>
<head>
<title>Admin panel</title>
<link rel="stylesheet" type="text/css" href="styles/global.css" />

<script src="js/bootstrap.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<meta name="viewport" content="width=device-width, initial-scale: 1.0, user-scalabe=0" />

<script src="scripts/jquery-1.11.3.min.js"></script>

<script type="text/javascript" src="scripts/general.js">
	
</script>

<style type="text/css">



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

#reg input{



}

#pic {
	padding-bottom: 125px;
}

#name{
padding-top: 25px;
padding-bottom: 125px;
}

#cat {
padding-bottom: 125px;

}

#front {
padding-bottom: 125px;
}

	
#addproduct {
	margin-left: 85%;
	margin-top : 50px;
	margin-bottom: 125px;
}

#info {
font-size: 1.8em;
text-shadow: 0px 2px gray;
}


</style>

</head>

<body>

	

	<a class="mobile" href="#">MENU</a>

	<div id="container">
		<?php include("sidebar.php");?>

		<div class="content">
		
			
			<div id="box">
				<div class="box-top">Add product</div>
				<div class="box-panel">
					<div id="info">Product Information</div>
					<hr class="colorgraph">

					<div id="reg">
						<form action="productadd.php" method="POST">
							<div id="name">
								<div class="col-xs-6">
									<label for="pname">Product name: </label>
									<input type="text" class="form-control" id="pname" name="pname" placeholder="Type product name here...">
								</div>

								<div class="col-xs-6">
									<label for="price">Price: </label>
									<input type="number" class="form-control" id="price" name="price" placeholder="Type price here...">
								</div>
							</div>
							

							<div id="pic">
								<div class="form-group" >
									<div id="front">
										<div class="col-xs-6">
											<label for="fpic">Picture Front: </label>
											<input type="file" id="fpic" name="fpic">
										</div>
									
										<div class="col-xs-6">
											<label for="bpic">Picture rightside: </label>
											<input type="file" id="bpic" name="bpic">
										</div>
									</div>

									<div id="left">
										<div class="col-xs-6">
											<label for="lpic">Picture leftside: </label>
											<input type="file" id="lpic" name="lpic">
										</div>

										<div class="col-xs-6">
											<label for="rpic">Picture backside: </label>
											<input type="file" id="rpic" name="rpic">
										</div> 
									</div>
									
								</div>
							</div>

							

							<div id="cat">
								<div class="col-xs-4">

									<label for="category">Category: </label>
									<input type="text" class="form-control" id="category" name="category" placeholder="Type category here...">
								</div>

								<div class="col-xs-4">
									<label for="color">Color: </label>
									<input type="text" class="form-control" id="color" name="color" placeholder="Type color here...">
								</div>
								<div class="col-xs-4">
									<label for="size">Size: </label>
									<input type="number" class="form-control" id="size" name="size" placeholder="Type size here...">
								</div>
							</div>

							<div id="ty">
								<div class="col-xs-4">
									<label for="Type">Type: </label>
									<input type="text" class="form-control" id="type" name="type" placeholder="Type of the product...">
								</div>

								<div class="col-xs-4">
									<label for="quantity">Quantity: </label>
										<input type="text" class="form-control" id="quantity" name="quantity" placeholder="Type the quantity...">
								</div>

								<div class="col-xs-4">
									<label for="status">Status: </label>
									<input type="text" class="form-control" id="status" name="status" placeholder="Type your password here...">
								</div>
							</div>
								
								<input type="submit" value="Add product" class="btn btn-success" id="addproduct">
							</div>

						</form>
					</div>
				</div>
			</div>

		</div>

	</div>

</body>
</html>