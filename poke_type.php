<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Pokemon</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>
<body>
	<header>
		
		<div id="logo">
			<img src="img/logo.png">
		</div>
	</header>
	<?php
		include('menu.php');
	?>
	<div id="block_page">
		<table>
			<thead>
				<tr>
					<th>nom</th>
					<th>id</th>
					<th>caractéristique</th>
					<th>attaques</th>
				</tr>

			</thead>
			<tbody id = "tBody">

				<?php
					include('poke_type_script.php');
				?>
				
			</tbody>
		</table>
	</div>
	<footer>
		<h3>Me contacter</h3>
		<div id="info">
			<p>Vuillemin Gauthier</p>
			<p><a href="mailto:gau.vui97@hotmail.com">Envoyez-moi un e-mail !</a></p>
		</div>
	</footer>

	<script type="text/javascript" src="js/poke_type.js"></script>
</body>
</html>

