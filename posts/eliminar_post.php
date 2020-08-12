<?php
	
try{
	//conectamos con la BBDD
	include('../99_connect-db.php');

	//Asunto/Id tema
	$idposteado=$_GET['idposteado'];


	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("SET CHARACTER SET utf8");		
	

	//eliminamos la fila
	$eliminarpost="DELETE FROM posteados where post_id = '$idposteado'";
	$resultado=$conn->prepare($eliminarpost);		
	$result=$resultado->execute();	


	//actualizamos tabla temas
	include("posts/ver_post.php");
		
} catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
	
}

?>
