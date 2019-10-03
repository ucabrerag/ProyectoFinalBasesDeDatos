
<?php include("db.php") ?>

<?php include("header.php") ?>

<br>
<br>
<br>

<div class= "col-md-8" >

<a style="text-decoration:none" href="consultas_proveedores.php">
		 <input formaction= "index.php" type="button" class="btn btn-success btn-lg active" 
					name="mes" value="REGRESAR"></a>	

                    <br>
                    <br>
                    <br>
                    <br>

	
				<table class="table table-bordered" style = "text-align: center; margin-left:350px">
					<thead>
						<tr class="table-secondary">
						
							<th> TIPO DE HERRAMIENTA</th>
							<th> PROVEEDOR </th>
							<th> TELEFONO </th>

	
				 

						</tr>	


					</thead>
					<tbody>
						<?php

                    $tipo_herramienta = $_POST["tipo_herramienta"];


                       
						$query = 
						"SELECT nombre_proveedor, telefono_proveedor, tipo_herramienta
                        from proveedores WHERE tipo_herramienta = '$tipo_herramienta'";

                        
						
						$result_alumnos = mysqli_query($conn, $query);

						while($row = mysqli_fetch_array($result_alumnos)) { ?>
							<tr>

							
						
						        

								<td><?php echo $_POST["tipo_herramienta"] ?></td>
                                <td><?php echo $row["nombre_proveedor"] ?></td>
								<td><?php echo $row["telefono_proveedor"] ?></td>
                               




							</tr>
						




						<?php } ?>
					</tbody>		
	

				</table>

		</div>

	</div>

</div>




<?php include("footer.php") ?>
