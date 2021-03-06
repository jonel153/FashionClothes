<!DOCTYPE html>

<html>
<head>
<title>Admin panel</title>
<link rel="stylesheet" type="text/css" href="styles/global.css" />

<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<script type="text/javascript" src="js/bootstrapValidator.js"></script>

<link rel="stylesheet" href="css/bootstrapValidator.css">


<script src="scripts/jquery-1.11.3.min.js"></script>

<!--<script type="text/javascript" src="scripts/general.js"></script>-->



<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


<script type="text/javascript" src="js/bootstrapValidator.js"></script>

<link rel="stylesheet" href="css/bootstrapValidator.css">

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

#first{
padding-top: 25px;
padding-bottom: 125px;
}

#cat {
padding-bottom: 125px;

}

#second	 {
padding-bottom: 125px;
}

#third	 {
padding-bottom: 125px;
}

#fourth {
padding-bottom: 125px;
}

#fifth {
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

					<form enctype="multipart/form-data" id="reg" action="update.php" method="POST" class="form-vertical">
						
						

						<div id="first">
							<div class="form-group">
								<div class="col-md-6">
									<label for="pname">Product name: </label>
									<input type="text" class="form-control" id="pname" name="pname" placeholder="Type product name here..." value="<?php echo base64_decode($_REQUEST['name']);?>" />
								</div>
							

							
								<div class="col-md-6">
									<label for="price">Price:</label>
									 <input type="number" name="price" id="price" class="form-control" placeholder="Type price here..." value="<?php echo base64_decode($_REQUEST['price']);?>" />
								</div>
							</div>
						</div>

						<div id="second">
							<div class="form-group">
								<div class="col-xs-6">
									<label for="fpic">Picture Front: </label>
									<input type="file" id="fpic" name="fpic">
								</div>

								<div class="col-xs-6">
									<label for="bpic">Picture backside: </label>
									<input type="file" id="bpic" name="bpic">
								</div>
							</div>
						</div>


						<div id="third">
							<div class="form-group">
								<div class="col-xs-6">
									<label for="lpic">Picture leftside: </label>
									<input type="file" id="lpic" name="lpic">
								</div>

								<div class="col-xs-6">
									<label for="rpic">Picture Rightside: </label>
									<input type="file" id="rpic" name="rpic">
								</div> 
							</div>
						</div>


						<div id="fourth">
							<div class="form-group">
								<div class="col-xs-4">
									<label for="category">Category:</label><br>
									<?php
										$category = $_REQUEST['category'];

										if($category = "Male"){
											echo '<select id="category" name="category" class="form-control" class="form-control">
														<option value="">Choose..</option>
														<option value="Male" selected>Male</option>
														<option value="Female">Female</option>
														<option value="Accessories">Accessories</option>
													</select>';
										}else if($category = "Female"){
											echo '<select id="category" name="category" class="form-control" class="form-control">
														<option value="">Choose..</option>
														<option value="Male">Male</option>
														<option value="Female" selected>Female</option>
														<option value="Accessories">Accessories</option>
													</select>';
										}else if($category = "Accessories"){
											echo '<select id="category" name="category" class="form-control" class="form-control">
														<option value="">Choose..</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
														<option value="Accessories" selected>Accessories</option>
													</select>';
										}else {
											echo '<select id="category" name="category" class="form-control" class="form-control">
														<option value="">Choose..</option>
														<option value="Male">Male</option>
														<option value="Female">Female</option>
														<option value="Accessories">Accessories</option>
													</select>';
										}
									?>
								</div>
							</div>

							<div class="form-group">
								<div class="col-xs-4">
									<label for="subcategory">Sub Category:</label><br>
									<select id="subcategory" name="subcategory" class="form-control">
										<option value="">Choose..</option>
										
										<option value="Cocktail">Cocktail</option>
										<option value="Long Gown">Long Gown</option>
										<option value="Barong">Barong</option>
									</select>
								</div>
							</div>

							<div class="form-group">
								<div class="col-xs-4">
									<label for="color">Color:</label><br>
									<select id="color" name="color" class="form-control">
										<option value="">Choose..</option>
										<option value="Red">Red</option>
										<option value="Green">Green</option>
										<option value="Blue">Blue</option>
										<option value="Black">Black</option>
										<option value="Pink">Pink</option>
										<option value="White">White</option>
									</select>
								</div>
							</div>
						</div>

						<div id="fifth">
							<div class="form-group">
								<div class="col-xs-3">
									<label for="size">Size: </label>
									<input type="number" class="form-control" id="size" name="size" placeholder="Type size here..." value="<?php echo base64_decode($_REQUEST['size']);?>" />
								</div>
								
								<div class="col-xs-4">
									<label for="quantity">Quantity: </label>
										<input type="number" class="form-control" id="quantity" name="quantity" placeholder="Type the quantity..." value="<?php echo base64_decode($_REQUEST['quantity']);?>" />
								</div>
								<input type="hidden" class="form-control" id="id" name="id" value="<?php echo base64_decode($_REQUEST['id']);?>" />
								<div class="col-xs-4">
									<label for="status">Status: </label>
									<input type="text" class="form-control" id="status" name="status" placeholder="Type status here..." value="<?php echo base64_decode($_REQUEST['status']);?>" />
								</div>
							</div>
						</div>
					 <button type="submit" class="btn btn-success">Update</button>
					</form>
				</div>
			</div>
		</div>
	</div>

 </body>


<script type="text/javascript">
	$(document).ready(function(){
		var validator = $("#reg").bootstrapValidator({
			fields : {
				pname: {
					message: 'Invalid',
					validators: {
						notEmpty: {
							message: 'Email is required'
						},

						stringLength: {
							min : 6,
							max : 35,
							message: 'Please input 6 characters'
						}
					}
				},


				price: {
					message: 'Invalid',
					validators: {
						notEmpty: {
							message: 'Email is required'
						},

						stringLength: {
							min : 3,
							max : 5,
							message: 'Please input 6 characters'
						}
					}
				},

				/*fpic: {
					message:"Empty",
					validators: {
						notEmpty: {
							message: 'Empty picture'
						}
					}
				},

				bpic: {
					message: 'Empty',
					validators: {
						notEmpty: {
							Message: 'Empty picture'
						}
					}
				},

				lpic: {
					message: 'Empty',
					validators: {
						notEmpty: {
							Message: 'Empty picture'
						}
					}
				},

				rpic: {
					message: 'Empty',
					validators: {
						notEmpty: {
							Message: 'Empty picture'
						}
					}
				},*/

				category: {
					validators: {
						notEmpty: {
							Message: 'Empty picture'
						}
					}
				},

				subcategory: {
					message: 'Empty',
					validators: {
						notEmpty: {
							Message: 'Empty picture'
						}
					}
				},


				color: {
					message: 'Empty',
					validators: {
						notEmpty: {
							Message: 'Empty picture'
						}
					}
				},


				size: {
					message: 'Empty',
					validators: {
						notEmpty: {
							Message: 'Empty picture'
						}
					}
				},


				quantity: {
					message: 'Empty',
					validators: {
						notEmpty: {
							Message: 'Empty picture'
						}
					}
				},


				Status: {
					message: 'Empty',
					validators: {
						notEmpty: {
							Message: 'Empty picture'
						}
					}
				},


			}
		});
	});
</script>
</html>