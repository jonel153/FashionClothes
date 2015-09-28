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

		
 		<div class="panel panel-default">
 			<div class="panel-heading">Admin panel</div>
 			<div class="panel-body">
 				<form id="registration-form" method="POST" class="form-horizontal" action="">
 					<div class="form-group">
 						<label class="col-md-2 control-label" for="email">Email</label>
 						<div class="col-md-4">
 							<input type="text" class="form-control" id="email" name="email" placeholder="Your email address" />
 							
 						</div>
 					</div>

 					<div class="form-group">
 						<label class="col-md-2 control-label" for="password">Password</label>
 						<div class="col-md-4">
 							<label class="col-md-2 control-label" for="password"></label>
 							<input type="password" class="form-control" id="password" name="password" placeholder="Your password" />
 						</div>
 					</div>

 					<div class="form-group">
 						
 						<div class="col-md-6 col-md-offset-2">
 							<button type="submit" class="btn btn-success">Login</button>
 						</div>
 					</div>
 				</form>
 			</div>
 		</div>
 	</div>
</body>
</html>