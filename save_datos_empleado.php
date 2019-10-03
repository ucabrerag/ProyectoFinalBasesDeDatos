
<?php include("db.php") ?>

<?php include("header.php") ?>

<br>
<br>
<br>

<div class= "col-md-8" >

<a style="text-decoration:none" href="consultas_empleado.php">
		 <input formaction= "index.php" type="button" class="btn btn-success btn-lg active" 
					name="mes" value="REGRESAR"></a>	

                    <br>
                    <br>
                    <br>
                    <br>

	
				<table class="table table-bordered" style = "text-align: center;margin-left:350px">
					<thead>
						<tr class="table-secondary">
						
							
							<th> ID</th>
							<th> NOMBRE</th>
							<th> TELEFONO </th>
							<th> DIRECCION</th>
							<th> SALARIO DIARIO </th>
							
                            <th> SEGURIDAD SOCIAL </th>
                          
                           

	
				 

						</tr>	


					</thead>
					<tbody>
						<?php

                    $id_empleado = $_POST["id_empleado"];

 
                       
$query = 
"SELECT id_empleado, nombre_empleado, telefono_empleado, direccion_empleado, salario_diario, seguridad_social
from empleado WHERE id_empleado = '$id_empleado'";

                        
						
						$result_alumnos = mysqli_query($conn, $query);

						while($row = mysqli_fetch_array($result_alumnos)) { ?>
							<tr>

							
						
						        

								<td><?php echo $_POST["id_empleado"] ?></td>
                                <td><?php echo $row["nombre_empleado"] ?></td>
								<td><?php echo $row["telefono_empleado"] ?></td>
                                <td><?php echo $row["direccion_empleado"] ?></td>
								<td><?php echo $row["salario_diario"] ?></td>
                               
							
                                <td><?php echo $row["seguridad_social"] ?></td>
                               




							</tr>
						




						<?php } ?>
					</tbody>		
	

				</table>

		</div>

	</div>

</div>




<?php include("footer.php") ?>
