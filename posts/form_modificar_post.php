<div>
  <p align="center">Modificamos post:

<?php

if(isset($_POST['enviar'])) {
  include("modificar_post.php");
  echo "modificamos post";
} else {

$idposteado=$_GET['idposteado'];
?>
  </p>


 <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
      <h2><input name="idtema" value="<?php echo $idposteado;?>"" style="display: none;"></h2>
      <tr>
        <td>Modificar mensaje</td>
          <td><textarea name="mensaje" cols="50" rows="5" required></textarea></td>
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

</div>