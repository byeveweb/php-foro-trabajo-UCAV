<?php 


if(isset($_GET['r'])){
        //include("form_session.html");
        echo "GESTION POST INSERTAMOS POST<br>";
		//include ('posts/form_insertar_post');
		}

if (isset($_GET['eliminar'])) {
	 echo "gestion post elimina post<br>";
} else {

	echo "GESTIONA vemos post<br>";
	include("posts/ver_post.php");
}


 ?>