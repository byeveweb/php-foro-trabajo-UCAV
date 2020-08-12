<?php
	
try{

	//conectamos con la BBDD
	include('../99_connect-db.php');

	//Asunto/Id tema
	$idtema=$_GET['idtema'];
	echo "ID del tema: $idtema <br>";
	$titulo=$_POST['titulo'];


	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("SET CHARACTER SET utf8");		
	

	//modificamos la fila
	$actmens="UPDATE temas SET tema_titulo = '$titulo' WHERE tema_id = $idtema";
	$resultado=$conn->prepare($actmens);		
	$result=$resultado->execute();	

	// check if mysql insert query successful
    if($result)
    {
        echo 'Data Update';
    }else{
        echo 'Data Not Update';
    }		

	//actualizamos tabla temas
	include("temas/actualizar_tabla_temas.php");
		
} catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
	
}

?>
