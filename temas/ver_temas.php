<div class="caja-contenido-temas">
	<!--BOTÓN NUEVO TEMA-->

	<?php 
		//$_SESSION['user']=$usuario;
		if(isset($_SESSION['user'])){
			$user=$_SESSION['user'];
		    echo "<div class='boton-nuevo'><a href='?it=insertar&user=$user'>Nuevo Tema</a></div>";
			}    		
	?>
	<table class="tabla-temas">
		<thead>
			<tr>
				<th width="100"></th>
				<th width="600"></th>
				<th width="200"></th>
				<th width="200"></th>
				<th width="200"></th>
				<th width="50"></th>
				<th width="50"></th>
			</tr>
		</thead>
		<tbody>
	<!--COMENZAMOS LA LÓGICA-->	
	<?php 
		try{
		
			//Actualizamos la tabla temas
			include("actualizar_tabla_temas.php")   	;				
    	
    		//conectamos con la BBDD
			include('99_connect-db.php');

			$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			$conn->exec("SET CHARACTER SET utf8");

			//Mostramos los todos los temas
			$tema = $conn->query("SELECT * FROM temas");



			//Extraemos las variables
			while ($row = $tema->fetch())   {
 				$idtema=$row['tema_id'];
           		$tittema=$row['tema_titulo'];
           		$npost=$row['tema_npost'];
           		$usertema=$row['tema_autor'];
           				    echo "<tr>
					<td class='boton-ver'><a href='?e=enviar&idtema=$idtema&npost=$npost&tittema=$tittema'>VER TEMA</a>
				  </td>";

				//Pintamos el títilo  
           		echo "<td class='texto-tit-tema'>" . $row['tema_titulo'] . "</td>";
           		echo "<td class='texto-fuentes' style='text-align:center;'>Comentarios: <br/>" . $row['tema_npost'] . "</td>";
           					//Pintamos boton ver


           		 //listamos la tabla post
    			$ultimopost = $conn->query("SELECT * FROM posteados ORDER BY post_id ASC LIMIT 1");
    					/**********COMIENZA EL WHILE******/
    					while ($row2 = $ultimopost->fetch()) {
    						$datePost = date("d-m-Y", strtotime($row2["post_date"]));

    						echo "<td class='texto-fuentes'>Último post: <br/>" . $datePost . "</td>";
    						echo "<td class='texto-fuentes'>Por: <br/>" . $row2['post_user'] . "</td></td></tr>";

    						}

				      	//comprobamos que la sesión está iniciada
           		       	if(isset($_SESSION{'user'})) {

           		       	include("tipo_usuario.php");
           		       		
           		       		
           		       	//si la sesión corresponde al mismo usuario que escribe éste podrá modificar y si este es del tipo 1
           		       	if (isset($_SESSION['user']) && ($_SESSION['user']==$user) && ($admin==1)) {

           		       			//Pintamos boton eliminar
           		      		 	echo "<tr><td class='boton-eliminar'><a href='?et=eliminar&idtema=$idtema'>X</a></td>";
 					   			echo "<td class='boton-modificar'><a href='?mt=modificar&idtema=$idtema'>EDITAR</a></td></tr>";
								
								} 

	           		        //si la sesión corresponde al mismo usuario que escribe éste podrá modificar 
	           		       	elseif (isset($_SESSION['user']) && ($usertema==$_SESSION['user'])) {
	           		       	echo "<td class='boton-eliminar'><a href='?et=eliminar&idtema=$idtema'>X</a></td>";
						    echo "<td class='boton-modificar'><a href='?mt=modificar&idtema=$idtema'>EDITAR</a></td></tr>";

						}
						}
					}

			  	} catch(Exception $e){
					die("Error: " . $e->getMessage());
				}

			?>
		</tbody>
	</table>
</div>

<!--<li class="<?php echo $pagina == '01_sesion_no_iniciada' ? 'idtema=$idtema&npost=$npost' : ''; ?>"  ><a href="?posts/ver_post.php">Inicio</a></li>-->

