<div class="caja-contenido-temas">
	<div class="titulo-tema-post">
	<h2>TEMA:
		<?php 
		$idtema=$_GET['idtema'];
		$tittema=$_GET['tittema'];
		echo "$tittema <br>";
		 ?>
	</h2>
	</div>
	

		<!--PHP CODE-->
		<?php
		
			try{

				include('99_connect-db.php');

				$npost=$_GET['npost'];

				if(isset($_GET['pg'])) {
						if($_GET['pg']==1){
							$pag=$_GET['pg'];
							
						} else {
							$paginacion=$_GET['pg'];
							
						}
					}

					$tamanopg=5;
					$paginacion=1;
					//0 entre 5 = 0 
					$comienzopg=($paginacion-1)*$tamanopg;

					//recuperamos el id del tema en post_tema y pintamos
					$postnreg = $conn->query("SELECT * FROM posteados WHERE post_tema = '$idtema'");
					$numfilas=$postnreg->rowCount();

					//limintamos la visualización de la tabla
					$posttema = $conn->query("SELECT * FROM posteados WHERE post_tema = '$idtema' ORDER BY post_id ASC LIMIT $comienzopg, $tamanopg");
				
					$totalpg=$numfilas/$tamanopg;

					//echo "EL NUM DE PAGINAS TOTALES SON " . $totalpg . "MOSTRANDO LA PAGINA " . $paginacion . " DONDE CADA PAGINA TIENE " . $tamanopg . " Y EL NUMERO DE FILAS SON " . $numfilas . "<br>";

				//Comprobamos que idtema contiene post
				if($npost != 0) {

					$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
					$conn->exec("SET CHARACTER SET utf8");
					//DECLARAMOS VARIABLES PARA LA PAGINACION

					

						while ($row = $posttema->fetch())    {
           					$idpost=$row['post_tema'];
				    	    $menspost=$row['post_mensaje'];
				    	    $datepost = date("d-m-Y", strtotime($row["post_date"]));
				    	    $userpost=$row['post_user'];
				    	    $idposteado=$row['post_id'];

				    	    echo "	<div class='caja-ficha-post'><div class='caja-post texto-comentarios'>Re: " . $menspost . "</div>";     
			    	   	   	echo "<div class='post-info texto-fuentes'>" . $datepost . " | " . $userpost . "</div>";
                         //comprobamos que la sesión está iniciada
           		       	if(isset($_SESSION{'user'})) {
                            include("tipo_usuario.php");
                            
                            if (isset($_SESSION['user']) && ($_SESSION['user']==$user) && ($admin==1)) {
					    	   echo "<div class='controlpost'>
					    	   			<a href='?x=eliminar&idposteado=$idposteado&idtema=$idtema&tittema=$tittema&npost=$npost'>Eliminar Post</a> | ";
					    	    echo "<a href='?m=responder&idposteado=$idposteado&idtema=$idtema&tittema=$tittema&npost=$npost'>Modificar Post</a></div>";
					            }
		
				    		elseif (isset($_SESSION["user"]) && ($_SESSION["user"] == $userpost)) {
					    	   echo "<div class='controlpost'>
					    	   			<a href='?x=eliminar&idposteado=$idposteado&idtema=$idtema&tittema=$tittema&npost=$npost'>Eliminar Post</a> | ";
					    	    echo "<a href='?m=responder&idposteado=$idposteado&idtema=$idtema&tittema=$tittema&npost=$npost'>Modificar Post</a></div>";
					            }
					            }
					        echo "</div>";
		   	    			}

					}
				
 

						} catch(Exception $e){
							
							die("Error: " . $e->getMessage());
							
							
						}
						?>

<div class="boton-nuevo">
	<?php 

			if($npost == 0) {
              $npost++;}
		//si la sessión está iniciada puede responder
			if (isset($_SESSION['user'])) {
			$user=$_SESSION['user'];
			echo "<a href='?r=responder&idtema=$idtema&npost=$npost$user=$user&tittema=$tittema&npost=$npost'>Responder</a>";
			}
	?>
    </div>
<div class="caja-paginacion"></div>
<?php 
     	for ($i=1; $i<=$totalpg; $i++) { 
     		echo "<a href='?pg=" . $i . "&idtema=$idtema&npost=$npost&tittema=$tittema'> | " . $i . " |  </a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
            	}
?>

</div>



