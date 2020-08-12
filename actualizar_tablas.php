<?php
try{
	include('99_connect-db.php');

	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	$conn->exec("SET CHARACTER SET utf8");

	//ACTUALIZAMOS TABLA TEMA
	$tema = $conn->query("SELECT * FROM temas");

    while ($row = $tema->fetch()) {
   		    $idtema=$row['tema_id'];
		    
		    //BUSCAMOS EN POST LOS TEMAS CON IDTEMA Y LOS CONTAMOS
		    $nposttema = $conn->query("SELECT post_tema FROM posteados WHERE post_tema = $idtema");
			$cuenta = $nposttema->rowCount();
    		
    		//ACTUALIZAMOS EL CAMPO TEMA_NPOST CON LOS NUEVOS NÚMERO DE POST
    		$actpost="UPDATE temas SET tema_npost=$cuenta WHERE tema_id=$idtema";
			$respost=$conn->prepare($actpost);		
			$resultpost=$respost->execute(array(":cuenta"=>$cuenta));
        }
	echo "Temas actualizados correctamente <br>";


} catch(Exception $e){
	die("Error: " . $e->getMessage());
	}

?>