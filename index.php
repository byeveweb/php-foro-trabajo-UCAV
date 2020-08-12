<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>FORO SEAS</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
	</head>
<body>
	<div class="caja-principal">
		<!--Caja Header -->	
		<div class="caja-header">
		<!--PHP LABEL -->		
			<?php 
				include('header_session_off.php');
			?>
		</div>
		<!--Fin Caja header -->	

		<!--Caja Contenido/Temas -->
		<div class="caja-contenido">
			<?php 
				include('contenido_off.php')
			?>
		</div>
		<hr>
		<!--Fin Caja Contenido/Temas -->

		<div class="caja-footer">
			<?php include('footer.php'); ?>
		</div>
	
	</div>
</body>
</html>