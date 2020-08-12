<?php

	//ser reanude la sesion si ha sido iniciada y si no crea una nueva
	session_start();

	//echo "Sesion iniciada con existo $usuario" . $_SESSION["susuario"];
	if (!isset($_SESSION["user"])) {
		header("Location: index.php");
	} 

?>


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
				include('header_session_on.php');
				?>
				<!--PHP LABEL END-->	
			</div>
		<!--Fin Caja header -->	

		<!--Caja Contenido/Temas -->
		<div class="caja-contenido">
			<?php 
				include('contenido_on.php')
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