<?php
	
	//Insertamos usuario
	$pass_cifrado=password_hash($password, PASSWORD_DEFAULT);
	
	try{

		include('99_connect-db.php');
		
		$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		$conn->exec("SET CHARACTER SET utf8");		
			
		$sql="INSERT INTO usuarios (user_email, user_password) VALUES (:usuario, :password)";
		$resultado=$conn->prepare($sql);		
		
		$resultado->execute(array(":usuario"=>$usuario, ":password"=>$pass_cifrado));		


		session_start();

		$_SESSION['user']=$usuario;

		//include("04_envio_mail.php");

		echo "Sesión iniciada";
				
		header("Location: panel_usuario.php");
		
		$resultado->closeCursor();

	} catch(Exception $e){			
		
		
		echo "Línea del error: " . $e->getLine();
		
	}
	

?>