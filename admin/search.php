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

#tableheader ul {
list-style: none;
padding-bottom: 40px;

}

#tableheader li {
	display: inline;
	background-color: #3498db;
	font-size: 1.5em;
	color: #fff;
	font-weight: 300;
	text-shadow: 0px 3px #000;

}

#box {
font-size: 1.2em;
margin-bottom: 0px;
}

#box span{
float: right;
}

.box-top a{
text-decoration: none;
color: #fff;

}
.box-top{
	margin-bottom: 0px;
}

#prof img {
width: 25px;
height: 29px;
}

.second, .first {
padding-left:15px;
padding-right: 15px;

}

.first {
padding-bottom: 38px;
background-color: #16a085;
}

.second {
padding-bottom: 38px;

background-color: #fff;
color: #3498db;
}

.second .glyphicon {

}

.first .glyphicon {

}
#page {
text-align: right;
}

#search {
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
				<div class="box-top"><img src="images/member.png">Product List<a href="newproduct.php"><span class="glyphicon glyphicon-plus-sign">Add</span></a>
				</div>
				<div id="search">
					<form method="POST" action="search.php" class="form-vertical">
							<div class="form-group">
								<div class="col-md-3 col-md-offset-7">
									<br><input type="text" placeholder="Search" id="txtsearch" class="form-control">
								</div>
							</div>

							<div class="form-group">
								<div class="col-md-1">
									<br><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
								</div>

								<div class="col-md-1">
									<br><a href="product.php" class="btn btn-default" role="button">Clear</a>
								</div>
							</div>
					</form>
				</div>
				<div class="box-panel">
					<br><br><br>

					<div id="tableheader">
						<ul>
						<li class="col-xs-3">Name</li>
						<li class="col-xs-3">Price</li>
						<li class="col-xs-3">Category</li>
						<li class="col-xs-3">Quantity</li>

						</ul>

					</div>
					<br>
					<?php include("searchproduct.php");?>
					<!--<div id="prof" class="row">
						<div class="first">
							<div class="col-xs-3">
								<a href="#"><img src="images/profile.png">
							</div>

							<div class="col-xs-3">
								<label>Jonel</label>
							</div>
	 	
							<div class="col-xs-3">
								<label>Belandres</label>
							</div>

							<div class="col-xs-3">
								<label>Tindog</label>
							</div>
							</a>
							
						</div>

						<div class="second">
							<div class="col-xs-3">
								<a href="#"><img src="images/profile.png"></a>
							</div>

							<div class="col-xs-3">
								<label>Sarah Jane</label>
							</div>
	 	
							<div class="col-xs-3">
								<label>Belardo</label>
							</div>

							<div class="col-xs-3">
								<label>Tindog</label>
							</div>
						</div>
					</div>-->
				</div>
			</div>
		</div>
	</div>
</body>
</html>