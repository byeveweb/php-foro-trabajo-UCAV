<?php

    /****HEADER SESSION ON*****/
    /**********************/

        //Cargamos el navegado
    include ('nav_session_on.html');

    // Determinamos una página que carga por defecto que será sesión no iniciada
    $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : '98_sesion_iniciada';
    


    //Aquí la página que cargará en función del lo que elijamos en el navegador
    require 'users/' . $pagina . '.php';
?>