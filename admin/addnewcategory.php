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
display: none;
}

#textboxcategory{
padding-top: 25px;
padding-bottom: 125px;
}

#wew{
padding-top: 25px;
padding-bottom: 125px;
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
display: none;
}

#fifth {
padding-bottom: 125px;
display: none;
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

#subcategorymale, #subcategoryfemale, #subcategoryacc {
	display: none;
}

#cat{
display: none;

}
#submit {
display: none;
}

#addcat{
display: none;
}

#addcatbtn{
display: none;
}

#add, #cancel{
	margin-top: 10px;
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
					<div id="info">Add category</div>
					<hr class="colorgraph">

					<form enctype="multipart/form-data" id="reg" action="addnewcategoryprocess.php" method="POST" class="form-vertical">
						<div id="wew">
							<div class="form-group">
								<div class="col-xs-6">
									<label for="category">Category:</label><br>
									<input type="text" class="form-control" id="category" name="category">
									
								</div>	
							</div>

							<div class="form-group">
								<div class="col-xs-3">
									<input type="submit" class="btn" id="add" value="Add">
									<a href="newproduct.php" class="btn btn-default" id="cancel">Cancel</a>
								</div>	
							</div>
						</div>
					</form>
					<br><br>

				</div>
			</div>
		</div>
	</div>

 </body>


<script type="text/javascript">
	$(document).ready(function(){
		var validator = $("#reg").bootstrapValidator({
			fields : {
				category: {
					validators: {
						notEmpty: {
							message: 'Category is required'
						},

						stringLength: {
							min : 2,
							max : 35,
							message: 'Please input 2 characters'
						}
					}
				},
			}
		});
	});
</script>
</html>