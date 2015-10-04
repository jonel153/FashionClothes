<!DOCTYPE HTML>
<html>
<head>

<!--<script src="js/jquery-1.11.1.js" type="text/javascript"></script>-->
<script src="dropdown.js" type="text/javascript"></script>

  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
  <link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<script type="text/javascript" src="js/bootstrapValidator.js"></script>

<link rel="stylesheet" href="css/bootstrapValidator.css">
<link rel="stylesheet" href="style.css">

<style type="text/css">
	




#search input {
height: 22px;

}
#search {
margin-left: 40px;
margin-right: 40px;
display: inline-block;
}

#search button {
	width: 35px;
	height: 30px;


}

i{
	margin-left: 30px;
}

.glyphicon {
margin: 0px;
padding: 0px;
}

.container-fluid {
	width: 100%;
}
</style>
<script type="text/javascript">
	
	
</script>
</head>


<body>

<div id="nav">
	
	<div class="container-fluid">
			<ul id="navmenu">
				<img src="images/logo.png" width="100px" height="100px">
				<li><a href="/bootstrap/FashionClothes/">Home</a></li>
				<li><a href="#">Category <span class="glyphicon glyphicon-chevron-down"></a>
					<ul>
						<li><a href="<?php $category = base64_encode('All'); echo 'category.php?category='.$category;?>">All</a></li>
						<li><a href="<?php $category = base64_encode('Male'); echo 'category.php?category='.$category;?>">Men's</a></li>
						<li><a href="<?php $category = base64_encode('Female'); echo 'category.php?category='.$category;?>">Women's</a></li>

					</ul>
				</li>
				<li><a href="#">Accessories<span class="glyphicon glyphicon-chevron-down"></span></a>
					<ul>
						<li><a href="<?php $category = base64_encode('Accessories'); echo 'category.php?category='.$category;?>">All</a></li>
						<li><a href="<?php $category = base64_encode('Necklace'); echo 'category.php?category='.$category;?>">Necklaces</a></li>
						<li><a href="<?php $category = base64_encode('Rings'); echo 'category.php?category='.$category;?>">Rings</a></li>
						<li><a href="<?php $category = base64_encode('Earings'); echo 'category.php?category='.$category;?>">Earings</a></li>
					</ul>

				</li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Contact us</a></li>

				<div id="search">	
					<li><form method="POST" action="" >
						
						<input type="text" placeholder="Search" id="txtsearch" class="form-control"></li>
						<li><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
						
					</form></li>

				</div>

				<li>
					<a href="signin.php"><i class="btn btn-primary">Login</i></a>
				</li>

				<li>
					<a href="registration.php"><i class="btn btn-primary">Sign up</i></a>
				</li>
				
				
				<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-1">Logins</button>	
				<a href="signup"><i class="btn btn-primary">Sign up</i></a>
			<div id="modal">
			
				<div class="modal fade" id="modal-1" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>
								<h3 class="modal-title">Login</h3>
							</div>

							<div class="modal-body">
								
								<form method="POST" action="login.php" id="login">
									<div class="form-group">
										<label for="email">Email</label>
										<input type="text" id="email" name="email" class="form-control" placeholder="Enter email"><br>
									</div>

									<div class="form-group">
										<label for="password">Password</label>
										<input type="password" id="password" name="password" class="form-control" placeholder="Enter password">	
									</div>
									<button type="submit" class="btn btn-success">Sign in</button>
											
							</div>

							<div class="modal-footer">
								
								</form>
								<a href="" class="btn btn-default"  data-dismiss="modal">Cancel</a>
							</div>
						</div>
					</div>
				</div>
			</div>-->

			</ul>
			
	</div>	
</div>

</body>

<script type="text/javascript">
	$(document).ready(function(){
		var validator = $("#login").bootstrapValidator({
			framework: 'bootstrap',
			excluded: ':disabled'
			fields: {
				email: {
					validators: {
						notEmpty: {
							message: 'Email is required'
						},

						emailAddress: {
							message: "Invalid email"
						}
					}
				},

				password: {
					validators: {
						notEmpty: {
							message: 'Password is required'
						},

						stringLength: {
							min: 5,
							message: "Minimum of 8 characters"
						}
					}
				}


			}
		});

	});
</script>

</html>