<?php
	
try{

	//conectamos con la BBDD
	include('99_connect-db.php');

	//Asunto/Id tema
	$titulotema=$_POST['titulo'];
	//Variable que recoge el post del FORM
	$fecha = date("d-m-y");
	//Variable User
	$user=$_SESSION['user'];
	$npost=0;

	//echo "Titulo: $titulotema <br>";
	//echo "FECHA: $fecha <br>";
   //echo "USER: $user <br>";

			
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("SET CHARACTER SET utf8");		


	$sql="INSERT INTO temas (tema_date, tema_autor, tema_titulo, tema_npost) VALUES (:fecha, :user, :titulotema, :npost)";
	$resultado=$conn->prepare($sql);		
	$result=$resultado->execute(array(":fecha"=>$fecha, ":user" =>$user, ":titulotema"=>$titulotema, ":npost"=>$npost));	

	/*check if mysql insert query successful
    if($result)
    {
        echo 'Teme Inserted';
    }else{
        echo 'Data Not Inserted';
    }*/

	
	//actualizamos tabla temas
	include("temas/actualizar_tabla_temas.php");
		
} catch(Exception $e){
	
	die("Error: " . $e->getMessage());
	
	
}

?>
