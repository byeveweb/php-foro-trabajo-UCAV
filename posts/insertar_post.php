<?php
	
try{
   
	//conectamos con la BBDD
	include('99_connect-db.php');

	//Asunto/Id tema
	$idtema=$_POST['idtema'];
	//Variable que recoge el post del FORM
	$mensaje=$_POST['mensaje'];
	//Variable Fecha
	$fecha = date("d-m-y");
	//Variable User
	//$user = $_POST['user'];
	$user=$_SESSION['user'];

		
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("SET CHARACTER SET utf8");		
	

	$sql="INSERT INTO posteados (post_mensaje, post_date, post_tema, post_user) VALUES (:mensaje, :fecha, :idtema, :user)";
		
	$resultado=$conn->prepare($sql);		
	$result=$resultado->execute(array(":mensaje"=>$mensaje, ":fecha"=>$fecha, ":idtema"=>$idtema, ":user" =>$user));	

	

	//CONTAMOS LAS COLUMNAS CON EL IDTEMA
	$nposttema = $conn->query("SELECT post_tema FROM posteados WHERE post_tema = '$idtema'");
	$cuenta = $nposttema->rowCount();




	//ACTUALIZAMOS EL CAMPO TEMA_NPOST
	$actpost="UPDATE temas SET tema_npost=$cuenta WHERE tema_id=$idtema";
	$respost=$conn->prepare($actpost);		
	$resultpost=$respost->execute(array(":cuenta"=>$cuenta));

	//actualizamos tabla temas
		include("posts/ver_post.php");
		
		
		
} catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
	
}

?>
