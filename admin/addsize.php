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

#textboxcategory{
padding-top: 25px;
padding-bottom: 125px;
}

#textboxsubcategory a{
margin-top: 100px;
}

#cat {
padding-bottom: 125px;

}

#second	 {
padding-bottom: 125px;
display: none;

}

#third	 {
padding-bottom: 125px;
display: none;
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
#subcategoryfemale, #subcategoryacc {
	display: none;
}

#cat{
display: none;

}





</style>

</head>

<body>
	<a class="mobile" href="#">MENU</a>
	
	<div id="container">
		<?php include("sidebar.php");?>

		<div class="content">
		
			
			<div id="box">
				<div class="box-top"><strong></strong>Add color available to this product:</div>
				<div class="box-panel">
					<div id="info"></div>
					<hr class="colorgraph">

					<form enctype="multipart/form-data" id="reg" action="" method="POST" class="form-vertical">

						<div id="fourth">
							<div class="form-group">
								<div class="col-xs-4">
									<label for="category">Choose Sizes:</label><br>
									<?php
										$colorID = $_POST['color'];
										include("databaseconnection.php");
										$result = mysql_query("SELECT sizeID, size FROM sizetbl WHERE colorID ='".$colorID."'");
										echo mysql_num_rows($result);
										echo $colorID;
										while($row = mysql_fetch_assoc($result)){
											$size = $row['size'];
											$sizeID = $row['sizeID'];

											echo '<div><input type="checkbox" name="size[]" value="'.$size.'">'.$size.'</div>';
										}
									?>		
								</div>	
							</div>
						</div>


						<div id="haha">
							<div class="form-group">
								<div class="col-xs-12">
									
								</div>
							</div>
						</div>

						
						
					 <button type="submit" class="btn btn-success" id="submit">Submit</button>
					</form>
					<br><br>

				</div>
			</div>
		</div>
	</div>

 </body>


<script type="text/javascript">

	$(document).ready(function(){

		$("#color").change(function(){
			opt = $(this).val();
			if(opt==""){
				$("#second").hide();
				$("#third").hide();
			}else{
				$("#second").show();
				$("#third").show();
			}
			
		});
	});
		

	/*$(document).ready(function(){
		var validator = $("#reg").bootstrapValidator({
			fields : {
				pname: {
					message: 'Invalid',
					validators: {
						notEmpty: {
							message: 'Name is required'
						},

						stringLength: {
							min : 3,
							max : 35,
							message: 'Please input 6 characters'
						}
					}
				},


				price: {
					message: 'Invalid',
					validators: {
						notEmpty: {
							message: 'Price is required'
						},

						stringLength: {
							min : 3,
							max : 35,
							message: 'Please input 6 characters'
						}
					}
				},

				fpic: {
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
				},

				color: {
					message: 'Empty',
					validators: {
						notEmpty: {
							Message: 'Empty color'
						}
					}
				},


				size: {
					message: 'Empty',
					validators: {
						notEmpty: {
							Message: 'Empty size'
						}
					}
				},


				quantity: {
					message: 'Empty',
					validators: {
						notEmpty: {
							Message: 'Empty quantity'
						}
					}
				}
			}
		});
	});*/
</script>
</html>