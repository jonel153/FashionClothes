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
}

#box span{
float: right;
}

.box-top a{
text-decoration: none;
color: #fff;
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
padding-bottom: 58px;

}

.second {
padding-bottom: 58px;
}

.second div {
background-color: #16a085;
color: #fff;

}

.first div {
background-color: #95a5a6;
color: #fff;

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
				<div class="box-panel">
					<div id="tableheader">
						<ul>
						<li class="col-xs-3">Name</li>
						<li class="col-xs-3">Price</li>
						<li class="col-xs-3">Category</li>
						<li class="col-xs-3">Quantity</li>

						</ul>
					</div>
					<?php include("productlist.php");?>
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