<?php
session_start();
$_SESSION['Username'];
//echo $_SESSION['Username'];
?>

<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="header.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
	<title>MR.Cake</title>
	<nav>
	<div class="handle">
				<p class="menu"><img class="image_disp" src="images/logo.jpg" alt="cake logo"/></p>
				<div class="menu_icon">
			      <div></div>
			      <div></div>
			      <div></div>
		      </div>
			</div>
			<ul>
				<a href="index.php"><li>Home</li></a>
				<a href="#"><li>About</li></a>

				<a href="#"><li>Cakes</li></a>
				<img class="image" src="images/logo.jpg" alt="cake logo"/>

				<!--a href="products/addcake.php"><li>Cakes</li></a>
				<img class="image" src="images/cakelogo.png" alt="cake logo"/-->

				<a href="#"><li>Contact</li></a>
				<a href="#"><li>FAQ</li></a>
                <a href="#"><li><?php echo $_SESSION['Username'];?></li></a>
				<a href="logout.php"><li>Logout</li></a>
			</ul>
			
		</nav>
	<script>
		$('.handle').on('click', function(){
			$('nav ul').toggleClass('showing');
		});
	</script>
	</head>
	<body>
    <section id="intro" class="clearfix">
    <div class="container">
    </div>
  </section>
  <!--
  <div class="banner">
    <img src="images/banner.jpg" alt="banner image">
  </div>
-->
  <section>
   
   
   
   <p class="tagline">
   <i class="fas fa-quote-left fa-2x"></i>
   Cakes are special. Every birthday, every celebration ends <br/>
   with something sweet, a cake, and people remember. <br/> 
   It's all about the memories.
    <i class="fas fa-quote-right fa-2x"></i>
   </p>
	
  </section>

  <div class="container-fluid">
  
    <div class="row">
    <div class="col-sm-4">img1</div>
    <div class="col-sm-4">img2</div>
    <div class="col-sm-4">img3</div>
	</div>
  
</div>



</body>

<?php include "footer.php" ?>