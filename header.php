<html>
<head>

<!--<script src="js/jquery-1.11.1.js" type="text/javascript"></script>-->
<script src="dropdown.js" type="text/javascript"></script>

  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
  

<link rel="stylesheet" href="style.css">

<style type="text/css">
	






#search input {
height: 22px;
}
#search {
margin-left: 40px;
margin-right: 40px;
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
				<li><a href="#">Accessories <span class="glyphicon glyphicon-chevron-down"></span></a>
					<ul>
						<li><a href="<?php $category = base64_encode('Accessories'); echo 'category.php?category='.$category;?>">All</a></li>
						<li><a href="<?php $category = base64_encode('Necklace'); echo 'category.php?category='.$category;?>">Necklaces</a></li>
						<li><a href="<?php $category = base64_encode('Rings'); echo 'category.php?category='.$category;?>">Rings</a></li>
						<li><a href="<?php $category = base64_encode('Earings'); echo 'category.php?category='.$category;?>">Earings</a></li>
					</ul>

				</li>
				<li><a href="#">About us</a></li>
				<li><a href="#">Contact us</a></li>

							
				<li><form method="POST" action="" >
					<div id="search">
					<input type="text" placeholder="Search" id="txtsearch">
					<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span></button>
					</div>
				</form></li>
				<li></li>
				<li></li>
				<a href="signin"><i class="btn btn-primary">Login</i></a>
				<a href="signup"><i class="btn btn-primary">Sign up</i></a>

			</ul>
			
	</div>	
</div>

</body>

</html>