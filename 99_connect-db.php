<?php
/*
CONNECT-DB.PHP
Permite conectarnos a la base de datos
*/
// Variables que usamos en la base de datos para la conexión
$server = 'localhost';
$user = 'root';
$pass = '';
$db = 'nueva_bd_foro';
// Conexión a la base de datos

		try {
			$conn = new PDO('mysql:host='.$server.';dbname='.$db,'root','');
		}
		catch (PDOException $ex) {
			echo $ex->getMessage();
			exit;
		}

?>