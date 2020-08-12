<?php 

//include("99_connect-db.php");

  $usertype = $conn->query("SELECT * FROM usuarios WHERE user_type");

  while ($row2 = $usertype->fetch())  {
    $admin=$row2['user_type'];
    $user=$row2['user_email'];
  }

 // if (($_SESSION['user']==$user) && ($admin==1)) {
   // echo "Escribe esto";
  //}
?>
