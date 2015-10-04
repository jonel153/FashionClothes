<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>



<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="style.css">


<style>
.panel-body {
font-size: 1.5em;
margin-top: 50px;

}

.form-group {
	padding-top: 45px;
}
</style>
</head>

<body>
	<?php 
		if(!isset($_SESSION['email'])){
			
		}else{
			header('Location:index.php');
		}
	?>
	<?php include("header.php");?>


	<div class="container">
 		<div class="panel panel-default">
 			<div class="panel-heading">Login</div>
 			<div class="panel-body">
 			<?php
 			$login=(isset($_GET['error'])) ? (int)$_GET['error']:0;

 			if($login > 0){
 				$message = base64_decode($_REQUEST['message']);
 				echo '<div class="alert alert-danger">
  						<strong>'.$message.'</strong>
						</div>';
 			}
 			?>
 				<form id="registration-form" method="POST" class="form-horizontal" action="login.php?error=<?php echo $login; ?>">
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

<script type="text/javascript">
	$(document).ready(function(){


	});

</script>
</html>

