<?php
    if(!isset($_POST['enviar'])){

    		echo "<div class='formulario'>	<h3>RESGISTRAR NUEVO USUARIO</h3>";

        include("form_session.html");

    	} else {

    	include("13_validar_nuevo_usuario.php");
    }
?>
