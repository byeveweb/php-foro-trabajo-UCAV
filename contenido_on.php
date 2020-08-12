<?php

    /****CONTENIDO*****/
    /**********************/

    // Determinamos una página que carga por defecto que será sesión no iniciada
   	//$pagina = isset($_GET['p']) ? strtolower($_GET['p']) : 'temas/ver_temas.php';
   	//
  	
    //primero incluímos esta página que verifica si eliminar o responder ha sido inicializado
    //
    if(isset($_GET['et'])){
        //include("form_session.html");
        include ('temas/eliminar_tema.php');
        }
    if(isset($_GET['mt'])){
        //include("form_session.html");
        include ('temas/form_modificar_tema.php');
        }
    if(isset($_GET['it'])){
        //include("form_session.html");
        include ('temas/form_insertar_tema.php');
        }
    if(isset($_GET['r'])){
        //include("form_session.html");
        include ('posts/form_insertar_post.php');
        }
    elseif (isset($_GET['x'])) {
         include ('posts/eliminar_post.php');
    } 

    elseif (isset($_GET['m'])) {
        include ('posts/form_modificar_post.php');
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
    
?>