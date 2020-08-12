<?php

	include("00_validar_login.php");

		if($contador==0){
			//echo "Usuario no existe -> Registrar NewUser";
			include("12_usuario_no_registrado.php");
			}

		elseif ($contador==1) {
			//header("Location: 94_password_incorrecto.php");
			include("12_contrasena_incorrecta.php");
		}

		elseif ($contador==2) {

		//creamos una sesion
		session_start();
		//almacenamos el usuario en una variable superglobal
		$_SESSION['user']=$usuario;
		//Lo llevamos a la página inicio sesión
		header("Location: panel_usuario.php");
	}




?>