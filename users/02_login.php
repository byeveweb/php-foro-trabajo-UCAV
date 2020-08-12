<?php
	 if(!isset($_POST['enviar'])){
       	echo "<div class='formulario'>	<h3>INICIA SESIÓN</h3>";

        include("form_session.html");
    	} else {
		include("12_iniciar_sesion.php");
    }
?>

