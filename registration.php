<!DOCTYPE html>
<html>
<head>
<title>Registration Form</title>

<link rel="stylesheet" type="text/css" href="style.css" />

<link href="css/bootstrap.css" rel="stylesheet">
<script src="js/bootstrap.min.js" type="text/javascript"></script>
<script src="js/jquery-1.11.1.js" type="text/javascript"></script>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>


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



#first {
padding-top: 25px;
padding-bottom: 125px;
}

#second {
padding-top: 25px;
padding-bottom: 125px;
}

#third {
padding-top: 25px;
padding-bottom: 125px;
}

#fourth {
padding-top: 25px;
padding-bottom: 125px;
}


#first .glyphicon {
	margin-right:15px;
	
}

#adjust .glyphicon {
	margin-right:15px;
	
}


#second .glyphicon {
	margin-right:15px;
	
}

#third .glyphicon {
	margin-right:15px;
	
}

#fourth .glyphicon {
	margin-right:15px;
	
}




</style>

</head>

<body>

<?php
include "header.php";
?>

<div id="main">

	<div class="container">

		<div class="well">
			<br> <br>
			<h2>Please Sign Up!</h2>
			<hr class="colorgraph">

			<div id="reg">
				<form  id="haha" action="addusers.php" method="POST" class="form-vertical">
					<div id="first">
						<div id="adjust">
							<div class="form-group">
								<div class="col-md-4">
									<label for="fname">First name: </label>
									<input type="text" class="form-control" id="fname" name="fname" placeholder="Type your first name here..." />
								</div>
							</div>
						</div>

						<div class="form-group">
							<div  class="col-md-4">
								<label for="lname">Last name: </label>
								<input type="text" class="form-control" id="lname" name="lname" placeholder="Type your last name here..." />
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-4">
								<label for="mname">Middle name: </label>
								<input type="text" class="form-control" id="mname" name="mname" placeholder="Type your middle name here..." />
							</div>
						</div>
					</div>


					<div id="second">
						<div id="adjust2">
							<div class="form-group">
								<div class="col-md-3">
									<label>Gender: </label><br>
									<select id="gen" name="gen" class="form-control">
										<option value="">Choose here...</option>
										<option value="Male">Male</option>
										<option value="Female">Female</option>
									</select>
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-3">
								<label for="age">Age: </label>
								<input type="number" class="form-control" id="age" name="age" placeholder="Type your age here..." />
							</div>
						</div>					

						<div class="form-group">
							<div class="col-md-6">
								<label for="address">Address: </label>
								<input type="text" class="form-control" id="address" name="address" placeholder="Type your Address here..." />
							</div>
						</div>
					
					</div>


					<div id="third">
						<div id="adjust3">
							<div class="form-group">
								<div class="col-md-2">
									<label for="number">Phone number: </label>
									<input type="text" class="form-control" id="number" name="number" placeholder="Type your phone number here..." />
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-5">
								<label for="email">Email: </label>
								<input type="text" class="form-control" id="email" name="email" placeholder="Type your email here..." />
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-5">
								<label for="cemail">Confirm Email: </label>
								<input type="text" class="form-control" id="cemail" name="cemail" placeholder="Confirm your email here..." />
							</div>
						</div>
					</div>


					<div id="fourth">
						<div id="adjust4">
							<div class="form-group">
								<div class="col-md-4 col-offset-2">
									<label for="password">Password: </label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Type your password here..." />
								</div>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-4 col-offset-3">
								<label for="cpassword">Confirm Password: </label>
								<input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm password here..." />
							</div>
						</div>
						
					</div>

						
						<input type="submit" value="Sign up" class="btn btn-success" id="signup" />
					<br>
				</form>
			</div>
		</div>		
	</div>
</div>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		var validator = $("#haha").bootstrapValidator({
			framework: 'bootstrap',

			feedbackIcons: {
				valid: "glyphicon glyphicon-ok",
				invalid: "glyphicon glyphicon-remove",
				validating: "glyphicon glyphicon-refresh"
			},

			fields: {
				fname: {
					row: '.col-md-4',
					validators: {
						notEmpty: {
							message: 'First name is required'
						}
					}
				},

				lname: {
					row: '.col-md-4',
					validators: {
						notEmpty: {
							message: 'Last name is required'
						}
					}
				},

				mname: {
					row: '.col-md-4',
					validators: {
						notEmpty: {
							message: 'Middle name is required'
						}
					}
				},

				gen: {
					validators: {
						notEmpty: {
							message: 'Gender is required'
						}
					}
				},

				age: {
					validators: {
						notEmpty: {
							message: 'Age is required'
						}
					}
				},


				address: {
					validators: {
						notEmpty: {
							message: 'Address is required'
						}
					}
				},

				number: {
					validators: {
						notEmpty: {
							message: 'Phone number is required'
						}
					}
				},

				email: {
					validators: {
						notEmpty: {
							message: 'Email is required'
						},

						emailAddress: {
							message: 'Invalid Email Address'
						},

						remote: {
							message: 'This email is already exist',
							url: 'checkemail.php',
							type: 'POST'
						}
					}
				},

				cemail: {
					validators: {
						notEmpty: {
							message: 'Confirm your Email'
						},

						identical: {
							field: 'email',
							message: "Email didn't match!"
						},

						emailAddress: {
							message: 'Invalid Email Address'
						}

						
					}
				},

				password: {
					validators: {
						notEmpty: {
							message: 'Password is required'
						},

						stringLength: {
							min: 8,
							message: 'Password minimum of 8 characters'
						}
					}
				},

				cpassword: {
					validators: {
						notEmpty: {
							message: 'Re-type your password'
						},

						identical: {
							field: 'password',
							message: "Password didn't match!"
						},

						stringLength: {
							min: 8,
							message: 'Password minimum of 8 characters'
						}
					}
				},
			}
		});
	});

</script>
</html>