<?php 

	$usertype = $conn->query("SELECT user_type FROM users");

	if($usertype=1) {
		echo "es admin";
	} else {
		echo "usuario normal";
	}

?>

//verificamos el tipo de usuario