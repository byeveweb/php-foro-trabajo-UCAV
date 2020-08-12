<div>
<?php


        //Cargamos el navegado
    include ('nav_session_off.html');

    // Determinamos una página que carga por defecto que será sesión no iniciada
    $pagina = isset($_GET['p']) ? strtolower($_GET['p']) : '01_sesion_no_iniciada';

    //Aquí la página que cargará en función del lo que elijamos en el navegador
    require 'users/' . $pagina . '.php';
?>

</div>