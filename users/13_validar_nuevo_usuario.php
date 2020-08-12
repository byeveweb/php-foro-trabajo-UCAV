<?php

include("00_validar_login.php");


if($contador!=0) {
	include("13_usuario_ya_registrado.php");
	} 
else {
	include("13_insertar_usuario.php");
	}


?>