<?php

    /***ESTE ARCHIVO GESTIONA EL CONTENIDO DE LA PÁGINA***/
      	
    //primero incluímos esta página que verifica si eliminar o responder ha sido inicializado
    if(isset($_GET['r'])){
        //include("form_session.html");
        echo "GESTION POST INSERTAMOS POST<br>";
        include ('posts/form_insertar_post.php');
        }
    elseif (isset($_GET['x'])) {
        echo "gestion post elimina post<br>";
    } 
    elseif(isset($_GET['e'])){
        include ('posts/ver_post.php');

    } 
    
    elseif(isset($_GET['pg'])){

        include ('posts/ver_post.php');

    }
    
    else {
       include ('temas/ver_temas.php');
    }
    
    //Cargamos el navegado


    //Aquí la página que cargará en función del lo que elijamos en el navegador
    //require 'post/' . $pagina . '.php';
?>