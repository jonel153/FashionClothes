<!DOCTYPE html>
<html>
<head>
	<title>Sign in</title>
<script src="../dropdown.js" type="text/javascript"></script>
<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<script type="text/javascript" src="js/bootstrapValidator.js"></script>

<link rel="stylesheet" href="css/bootstrapValidator.css">
<link rel="stylesheet" href="../style.css">

<style>
.panel-body {
font-size: 1.5em;
margin-top: 50px;

}

.panel-heading {
background-color: #2ecc71;
}

.form-group {
	padding-top: 45px;
}
</style>
</head>

<body>
	<div class="container">
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
<script type="text/javascript">
	$(document).ready(function(){
		var validator = $("#registration-form").bootstrapValidator({
			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove",
				validating: "glyphicon glyphicon-refresh"
			},

			fields : {

				username: {
					message: 'Invalid',
					validators: {
						notEmpty: {
							message: 'Email is required'
						},

						stringLength: {
							min : 6, 
							max: 35,
							message: "Email address must be between 6 and 35 characters long"
						},

						emailAddress: {
							message: "Email address was invalid"
						},
					}
				},

				password : {
					validators: {
						notEmpty: {
							message: "Password is required"
						},
						stringLength: {
							min: 8,
							message: "Password must be 8 characters long"
					}
				},

				

				
			}
		
		});

		validator.on("success.form.bv", function(e){
			e.preventDefault();
			$("#registration-form").addClass("hidden");
			$("#confirmation").removeClass("hidden");
		});

	});

</script>
</html>