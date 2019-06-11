<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	
	

	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<link rel="stylesheet" href="login.css">
<link rel="stylesheet" type="text/css" href="/thecakeproject/styles/header.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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

				<a href="/thecakeproject/index.php"><li>Home</li></a>
				
				<a href="#"><li>About</li></a>

				<a href="/thecakeproject/products/viewcakes.php"><li>Cakes</li></a>
				<img class="image" src="images/cakelogo.png" alt="cake logo"/>

				<a href="addContactForm.php"><li>Contact</li></a>
				
				<a href="listFaq-user.php"><li>FAQ</li></a>
				
				<a href="/thecakeproject/login.php"><li>Login</li></a>
			</ul>
			
		</nav>
	<script>
		$('.handle').on('click', function(){
			$('nav ul').toggleClass('showing');
		});
	</script>
	</head>
	<body>