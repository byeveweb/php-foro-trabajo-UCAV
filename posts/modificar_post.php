<?php
	
try{

	//conectamos con la BBDD
	include('99_connect-db.php');

	//Asunto/Id tema
	$idposteado=$_GET['idposteado'];
	$mensaje=$_POST['mensaje'];


	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("SET CHARACTER SET utf8");		
	

	//modificamos la fila
	$actmens="UPDATE posteados SET post_mensaje = '$mensaje' WHERE post_id = $idposteado";
	$resultado=$conn->prepare($actmens);		
	$result=$resultado->execute();	


	//actualizamos tabla temas
	include("posts/ver_post.php");
		
} catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
	
}

?>
