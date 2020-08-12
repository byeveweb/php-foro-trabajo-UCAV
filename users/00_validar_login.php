<?php

try{

	//1-Almacenamos los datos en variables con la funcion que evita la inyección SQL
    $usuario= $_POST['email'];
	$password=$_POST['password'];

	
	//3-Declaramos una variable para poder realizar la comparativa para las diferentes casuisticas
	$contador=0;
	

	//1-Conectamos a la BD
	include("99_connect-db.php");

	//4-preparamos la base de datos
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	$conn->exec("SET CHARACTER SET utf8");

	//5-Almacenamos los datos de la tabla Usuarios
	$sql="SELECT * FROM usuarios WHERE USER_EMAIL = :usuario";
	$resultado=$conn->prepare($sql);

	//6-Listamos el campo usuario y email
	$resultado->execute(array(":usuario"=>$usuario));

	//7-creamos un array asociativo
	$registro=$resultado->fetch(PDO::FETCH_ASSOC);

	/**********************/		
	/*COMENZAMOS LA LÓGICA*/
	/**********************/

	//si el usuario está en la tabla
	if ($usuario===$registro['user_email']) {
		//incrementamos el contador a 1 y comprobamos contraseña
		$contador++;
			//Comprobamos que la contraseña coincida
			if(password_verify($password, $registro['user_password'])) {
				//y volvemos a incrementar el contador que sumará 2
				$contador++;
			}
		}
	
} catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
}

  ?>