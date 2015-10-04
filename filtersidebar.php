<style type="text/css">
	#gal1 img {
 border:2px solid white;

}

.active img {
border:2px solid #333 !important;

}

#displayzoom {
margin-left: 10%;
margin-top: 10%;
}

#filterheader {
margin: 0px;
padding: 0px;
font-size: 25px;
border-bottom: 3px solid #ccc;

}

#category input {
padding-left: 15px;
margin-right: 2px;
}

#filtering {

}

ul {
list-style: none;
}


#main {
margin-top: 20px;
}

#subcategorymale, #subcategoryfemale, #subcategoryacc{
	display: none;
	width: 120px;
}

#category{
margin-bottom: 100px;

}

#color{
margin-bottom: 50px;
}
#red{
display: inline-block;
height: 30px;
width: 30px;
background-color: red;
}

#yellow {
display: inline-block;
height: 30px;
width: 30px;
background-color: yellow;
}

#blue {
display: inline-block;

height: 30px;
width: 30px;
background-color: blue;
}

#green {
display: inline-block;
height: 30px;
width: 30px;
background-color: green;
}


#black {
display: inline-block;
height: 30px;
width: 30px;
background-color: black;
}

#white {
border: 1px solid gray;
display: inline-block;
height: 30px;
width: 30px;
background-color: white;
}

#orange {
border: 1px solid gray;
display: inline-block;
height: 30px;
width: 30px;
background-color: orange;
}

#pricerange {
margin-bottom: 50px;
}

.divprice {
margin-bottom: 30px;
}
#btnfilter {
margin-top: 50px;
}

</style>

<div class= "row">
	<div id="filtering"> 
		<form enctype="multipart/form-data" id="filter" action="#" method="POST">
			<div id="filterheader" class="well">Filter</div>
			

				<div id="category">
					Category<br>
					<ul>
					
					<li><input type="radio" name="category" id="mens"><label>Men's</label></li>
					<li><input type="radio" name="category" id="womens"><label>Womens</label></li>
					<li><input type="radio" name="category" id="accessories"><label>Accessories</label></li>

					</ul>

						Subcategory
						<select id="subcategorymale" name="subcategorymale" class="form-control">
							<option value="">Choose..</option>
							<option value="Barong">Barong</option>
						</select>

						<select id="subcategoryfemale" name="subcategoryfemale" class="form-control">
							<option value="">Choose..</option>
							<option value="Cocktail">Cocktail</option>
							<option value="Long Gown">Long Gown</option>
						</select>

						<select id="subcategoryacc" name="subcategoryacc" class="form-control">
							<option value="">Choose..</option>
							<option value="Earings">Earings</option>
							<option value="Rings">Rings</option>
						</select>
						<hr>

				<div id="color" class="col-md-12">
					Color:

					<div id="red"><input type="checkbox" name="checkred" id="checkred" />	</div>
					<div id="yellow"><input type="checkbox" name="checkyellow" id="checkyellow" /></div>
					<div id="blue"><input type="checkbox" name="checkyblue" id="checkblue" /></div>
					<div id="green"><input type="checkbox" name="checkgreen" id="checkgreen" /></div>
					<div id="black"><input type="checkbox" name="checkblack" id="checkblack" /></div>
					<div id="white"><input type="checkbox" name="checkwhite" id="checkwhite" /></div>
					
					<hr>
				</div>
				

				<div id="pricerange" class="col-md-8">
					<div class="divprice">
					Lowest Range
						<input type="range" min="10" max="300" id="pricelow" onchange="fetch()" />
						<input type="text" id="low" class="form-control" disabled />
					</div><br>
					
					<div class="divprice">Highest Range
						<input type="range" min="10" max="300" id="pricehigh" onchange="fetch1()" />
						<input type="text" id="high" class="form-control" disabled />
						<hr>
					</div>


				</div>

				
				<div id="size" class="col-md-8">Size
					<input type="range" min="20" max="40" id="sizeslider" step="1" onchange="fetchsize()" />
					<input type="text" id="sizerange" class="form-control" disabled />
				</div>
			</div>
			<div id="btnfilter" class="col-md-5 col-md-offset-6">
				<input type="submit" value="Filter" class="form-control">
			</div>								
		</form>
	</div>
</div>

<script>
	
	function fetch(){
	var wew = document.getElementById("pricelow").value;
	document.getElementById("low").value = wew;

	}

	function fetch1(){
		var wew = document.getElementById("pricehigh").value;
		document.getElementById("high").value = wew;

	}

	function fetchsize(){
		var wew = document.getElementById("sizeslider").value;
		document.getElementById("sizerange").value = wew;

	}


	$("#mens").click(function(){
		$("#subcategorymale").show();
		$("#subcategoryfemale").hide();
		$("#subcategoryacc").hide();
	});

	$("#womens").click(function(){
		$("#subcategoryfemale").show();
		$("#subcategorymale").hide();
		$("#subcategoryacc").hide();

	});

	$("#accessories").click(function(){
		$("#subcategoryacc").show();
		$("#subcategorymale").hide();
		$("#subcategoryfemale").hide();

	});
</script>