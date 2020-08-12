<?php

if(isset($_POST['enviar'])) {
  include("insertar_tema.php");
} else {

$user=$_SESSION['user'];
echo "<h3 class='titulo-tema-post' align='center'>Inserte Nuevo tema " . $user . "</h3>";


?>

 <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table align="center">
      <tr>
        <td>Titulo tema</td>
          <td><textarea name="titulo" cols="50" rows="1" required height="20px"></textarea></td>
        </tr>
      <tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="enviar" value="Enviar mensaje">
        </td>
      </tr>
    </table>
  </form>
<?php
}

?>