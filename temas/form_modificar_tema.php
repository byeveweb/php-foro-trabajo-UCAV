<?php

if(isset($_POST['enviar'])) {
  include("modificar_tema.php");
  echo "modificamos post";


} else {

$idtema=$_GET['idtema'];
  echo "ID del tema: $idtema <br>";
 

?>

 <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
  <h3>Modificamos Tema</h3>
    <table>
      <tr>
      <h2><input name="idtema" value="<?php echo $idtema;?>"></h2>
        <tr>
        <td>Nuevo titulo</td>
          <td><textarea name="titulo" cols="50" rows="1" required></textarea></td>
        </tr>
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