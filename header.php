<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="header.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
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
				<a href="#"><li>Home</li></a>
				<a href="#"><li>About</li></a>
				<a href="#"><li>Cakes</li></a>
				<img class="image" src="images/logo.jpg" alt="cake logo"/>
				<a href="#"><li>Contact</li></a>
				<a href="#"><li>FAQ</li></a>
				<a href="#"><li>Login</li></a>
			</ul>
			
		</nav>
	<script>
		$('.handle').on('click', function(){
			$('nav ul').toggleClass('showing');
		});
	</script>
	</head>
	<body>