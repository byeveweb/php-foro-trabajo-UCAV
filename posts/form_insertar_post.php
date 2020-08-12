<div>
  <p align="center"> 
      <?php
          if(isset($_POST['enviar'])) {
          include("insertar_post.php");
          } else {
            $tittema=$_GET['tittema'];
            $idtema=$_GET['idtema'];
            $npost=$_GET['npost'];

        ?>

      </p>
      

 <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
    <table>
      <h2><input name="idtema" value="<?php echo $idtema;?>" style="display: none;"></h2>
      <tr>
        <td>Mensaje</td>
          <td><textarea name="mensaje" cols="50" rows="5" required></textarea></td>
        </tr>
      <tr>
        <td colspan="2">
          <input type="submit" name="enviar" value="Enviar mensaje" align="center">
        </td>
      </tr>
    </table>
  </form>
<?php
}

?>
</div>