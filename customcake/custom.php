<?php 
	require "../header.php";

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<link rel="stylesheet" href="style/customcake.css">
<body>
<div class="jumbotron">
    <div class="container cake-head">
        
    </div>
</div>
<section id="intro" class="clearfix">
    <div class="container">
    </div>
  </section>
  <div class="row">
  <div class="col-md-2">
  </div>
  <main class="cake-section col-md-6">
	  <section class="page-wrapper">
		  <main class="cake-section">
		   <h2>Make your own cake</h2>
		   <table>
			<tr>
			<td>

			<form name="chookselections">

			<h2>Choose Selections</h2>
			<!--
			0 - Chocolate Base 
			1 - Strawberry Base
			2 - Chocolate chocolate
			3 - Chocolate Strawberry
			4 - strawberry Chocolate
			5 - strawberry strawberry
			6 - chocolate chocolate cherry
			7 - chocolate chocolate strawberry
			
			<!-- Select Base for cake -->
			<div id="base">
				<h3>Select the base</h3>
				<input type="radio" name="chook" value="0" onclick="displaychook(this);">Chocolate
				<br />
				<input type="radio" name="chook" value="1" onclick="displaychook(this);">Strawberry
				
				<input type="button" class="btn btn-primary" id="icing_btn" value="Icing">
				
			</div>
			<!-- Select icing for chocolate base cake -->
			<div id="icing_chocolatebase">
				<h4>Choose Icing for chocolate base cake</h4>
				<input type="radio" name="chook" value="2" onclick="displaychook(this);">Chocolate
				<br />
				<input type="radio" name="chook" value="3" onclick="displaychook(this);">Strawberry
				
				<input type="button" class="btn btn-primary" id="topping_cc_btn" value="Topping">
			</div>
			<!-- Select icing for strawberry base cake -->
			<div id="icing_strawberrybase">
				<h4>Choose Icing for strawberry base cake</h4>
				<input type="radio" name="chook" value="4" onclick="displaychook(this);">Chocolate
				<br />
				<input type="radio" name="chook" value="5" onclick="displaychook(this);">Strawberry
				
				<input type="button" class="btn btn-primary" id="topping_cs_btn" value="Topping">
			</div>
			<!-- Select Toppping for chocolate base chocolate icing cake -->
			<div id="topping_cc">
				<h4>Choose Topping for your cake</h4>
				<input type="radio" name="chook" value="6" onclick="displaychook(this);">Cheery
				<br />
				<input type="radio" name="chook" value="7" onclick="displaychook(this);">Strawberry
				
				
			</div>
			<!-- Select topping for chocolate base, straberry icing -->
			<div id="topping_cs">
				<h4>Choose Topping for your cake</h4>
				<input type="radio" name="chook" value="8" onclick="displaychook(this);">Cheery
				<br />
				<input type="radio" name="chook" value="9" onclick="displaychook(this);">Strawberry
				
				
			</div>
			<!-- Select Toppping for strawberry base chocolate icing cake -->
			<div id="topping_sc">
				<h4>Choose Topping for your cake</h4>
				<input type="radio" name="chook" value="10" onclick="displaychook(this);">Cheery
				<br />
				<input type="radio" name="chook" value="11" onclick="displaychook(this);">Strawberry
				
				
			</div>
			
			<!-- Select Toppping for strawberry base strawberry icing cake -->
			<div id="topping_ss">
				<h4>Choose Topping for your cake</h4>
				<input type="radio" name="chook" value="12" onclick="displaychook(this);">Cheery
				<br />
				<input type="radio" name="chook" value="13" onclick="displaychook(this);">Strawberry
				
				
			</div>
			
			</form>

			</td>
			<td>
			<div class="cakeimage">
			<img src="pics/base1.png" name="chookpic" id="chookpic" />
</div>
			</td>
			</tr></table>
						  
</div>					
			
	  </section>
  </main>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">

	function displaychook(box){
	
	var chookPics = new Array(5)
	chookPics[0] = "pics/base1.png";
	chookPics[1] = "pics/base2.png";
	chookPics[2] = "pics/icing/choloate_chocolate.png";
	chookPics[3] = "pics/icing/chocolate_strawberry.png";
	chookPics[4] = "pics/icing/sc.png";
	chookPics[5] = "pics/icing/ss.png";
	chookPics[6] = "pics/topping/chololate_chololate_cherry.png";
	chookPics[7] = "pics/topping/chololate_chololate_strawberry.png";
	chookPics[8] = "pics/topping/chololate_strawberry_cherry.png";
	chookPics[9] = "pics/topping/chololate_strawberry_strawberry.png";
	chookPics[10] = "pics/topping/strawberry_chololate_cherry.png";
	chookPics[11] = "pics/topping/strawberry_chololate_strawberry.png";
	chookPics[12] = "pics/topping/strawberry_strawberry_cherry.png";
	chookPics[13] = "pics/topping/strawberry_strawberry_strawberry.png";
	document.getElementById('chookpic').src = chookPics[parseInt(box.value)];
	}
</script>
<script type="text/javascript" src="script/custom.js"></script>

</body>

<?php include "../footer.php" ?>