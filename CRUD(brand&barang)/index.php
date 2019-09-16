<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="language" content="en" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link href="css/animate.css" rel="stylesheet" type="text/css" /> 
	<link href="css/materialize.css" rel="stylesheet" type="text/css" media="screen, projection" /> 
	<link href="css/materialize-icon.css" rel="stylesheet" type="text/css" /> 
	<link href="css/style.css" rel="stylesheet" type="text/css" /> 
	<script type="text/javascript" src="js/jquery-2.1.3.min.js"></script>
	<title>Aplikasi</title>
	</head>
	<body>
		  <nav>
			<div class="nav-wrapper purple lighten-1">
			  <a href="#" class="brand-logo">Logo</a>
			  <ul id="nav-mobile" class="right hide-on-med-and-down">
				<li><a href="?r=about.php">About Us</a></li>
				<li><a href="?r=login.php">Login</a></li>
				<li><a href="?r=buy.php">Buy</a></li>
				<li><a href="?r=buy2.php">Buy Cara 2</a></li>
			  </ul>
			</div>
		  </nav>
		<div>
			<?php
				if(isset($_GET['r']))
					include($_GET['r']);
				else{
					echo '<h1>Hi... Selamat Datang</h1>';
				}
			
			?>
		</div>
		<script type="text/javascript" src="js/handlebars-v4.0.5.js"></script>
		<script type="text/javascript" src="js/materialize.js"></script>
		<script>
			$(document).ready(function(){
			  $('.slider').slider({
				height:500,
			  });
			});
		</script>
	</body>
</html>
