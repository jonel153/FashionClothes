<!DOCTYPE html>
<html>
<head>
<style>

 #gal1 img{border:2px solid white;}

 .active img{border:2px solid #333 !important;}
</style>
	<meta charset='utf-8'/>
	<title>jQuery elevateZoom Demo</title>
	<script src='jquery-1.8.3.min.js'></script>
	<script src='jquery.elevatezoom.js'></script>
</head>
<body>

<h1>Basic Zoom Example</h1>
							<img id="img_01" src="mens.jpg" data-zoom-image"mens.jpg" width="411" height="274" />

							<div id="gal1">
							 
							  <a href="#" class="active" data-image="mens.jpg" data-zoom-image="mens.jpg">
							    <img id="img_01" src="mens.jpg" width="100" height="67" />
							  </a>

							  <a href="#" data-image="mens.jpg" data-zoom-image="mens.jpg">
							    <img id="img_01" src="mens.jpg" width="100" height="67" />
							  </a>

							  <a href="#" data-image="mens.jpg" data-zoom-image="mens.jpg">
							    <img id="img_01" src="mens.jpg" width="100" height="67" />
							  </a>

							  <a href="#" data-image="mens.jpg" data-zoom-image="mens.jpg">
							    <img id="img_01" src="mens.jpg" width="100" height="67" />
							  </a>

							</div><br />

<script>
  $("#img_01").elevateZoom({gallery:'gal1', cursor: 'pointer', galleryActiveClass: 'active', imageCrossfade: true, loadingIcon: 'http://www.elevateweb.co.uk/spinner.gif'}); 


</script>
</body>
</html>