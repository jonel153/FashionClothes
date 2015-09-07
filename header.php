<html>
<head>

<!--<script src="js/jquery-1.11.1.js" type="text/javascript"></script>-->
<script src="dropdown.js" type="text/javascript"></script>

  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>-->
  

<link rel="stylesheet" href="style.css">

<style type="text/css">
	
	#banner{
	width:100%;
	height:100px;
	background-image: url("banner.png");
	background-size: 100% 100px;
	margin: 5px;
	border: 5px solid gray;
	border-radius: 10px;
}

#nav {
	position: relative;
	z-index: 1;
}

#nav ul{
	position: relative;
	margin: 0;
	padding: 0;
	list-style-type: none;
	background-color: #252525;
	

}
#nav ul li {
	display: inline-block;
		
}

#nav ul li a {
	display: block;
	height: 45px;
	width: 150px;
	color:#fff;
	line-height: 43px;
	text-decoration: none;
}

#nav ul li a:hover {
	background-color: #ccc;
	color: #302424;
	border-radius: 5px;
	text-decoration: none;
	transition: background 0.3s linear 0s, color 0.3s linear 0s;
}

#nav ul ul {
	position: absolute;
	display: none;
	width: 150px;
	border-radius: 5px;
}

#nav ul ul li{
	display: block;
	background-color: #252525;
	border-radius: 5px
}

.glyphicon {
	margin: 10px;

}

#mens {
	text-align: right;
	margin-right: 40px;
	font-size: 20px;
}

.topsale {
	width: 200px;
	height: 250px;

}

#login button {
	margin-left: 70%;
}

.name {
	text-align: center;
}
.payment {
	text-align: center;
	color: red;
}



.carousel-inner > .item > img,
.carousel-inner > .item > a > img {
	width: 40%;
	height: 350px;
    margin: auto;
}


#myCarousel {
margin-top: 20px;
}

#search input {
height: 22px;
}
#search {
margin-left: 40px;
}

#search button {
	width: 35px;
	height: 30px;


}
.glyphicon {
margin: 0px;
padding: 0px;
}

</style>
<script type="text/javascript">
	
	
</script>
</head>


<body>
	<div id="banner">
	

</div>

<div id="nav">
	
	<div class="container-fluid">
			<ul id="navmenu">
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
			</ul>
			
	</div>	
</div>

</body>

</html>