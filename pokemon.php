<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pokemon</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<?php
	include('menu.php');
	?>

	<header>
		
		<div class='text-center' id="logo">
			<img src="img/logo.png">
		</div>
	</header>

	<div id="block_page">
		<div class="container">
			<div class="row">
				<?php
					include('pokemon_script.php')
				?>
			</div>
		</div>
	</div>

</body>
	<footer>
		<h3>Me contacter</h3>
		<div id="info">
			<p>Vuillemin Gauthier</p>
			<p><a href="mailto:gau.vui97@hotmail.com">Envoyez-moi un e-mail !</a></p>
		</div>
	</footer>
</html>


