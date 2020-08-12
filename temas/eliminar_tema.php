<?php
	
try{

	//conectamos con la BBDD
	include('../99_connect-db.php');

	//Asunto/Id tema
	$idtema=$_GET['idtema'];
	echo "ID del tema: $idtema <br>";


	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("SET CHARACTER SET utf8");		
	

	//ELIMINAMOS EL TEMA
	$eliminartema="DELETE FROM temas where tema_id = '$idtema'";
	$resultado=$conn->prepare($eliminartema);		
	$result=$resultado->execute();	

	// check if mysql insert query successful
    if($result)
    {
        echo 'Teme Data Delete';
    }else{
        echo 'Data Not Delete';
    }


   	//ELIMINAMOS LOS POST CON EL IDTEMA ELIMINADO
	$eliminarpost="DELETE FROM posteados where post_tema = '$idtema'";
	$resultado=$conn->prepare($eliminarpost);		
	$result=$resultado->execute();	

	// check if mysql insert query successful
    if($result)
    {
        echo 'Data Delete';
    }else{
        echo 'Data Not Delete';
    }		
		

	//actualizamos tabla temas
	include("temas/actualizar_tabla_temas.php");
		
} catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
	
}

?>
