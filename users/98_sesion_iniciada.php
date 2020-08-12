<?php
	if (!isset($_SESSION['user'])) {
		header("Location: 95_acceso_bloqueado.php");
	} 
?>
    
<div class='formulario'>	
	<h3>SESIÓN INICIADA</h3>
   	<?php

    echo "<p>Gracias por iniciar sesión ". $_SESSION['user'] . "</p>";

      ?>
</div>