<?php include("db.php") ?>

<?php include("header.php") ?>

<br>
<br>
	<div class="row">

		<div class = "col-md-4">



			<?php if(isset($_SESSION["mensaje"])) { ?>
				<div class="alert alert-<?= $_SESSION["tipo_mensaje"];?> alert-dismissible fade show" role="alert">
				<?= $_SESSION["mensaje"] ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<br>
			<?php session_unset(); } ?>

			<?php if(isset($_SESSION["mensaje_error"])) { ?>
				<div class="alert alert-<?= $_SESSION["tipo_mensaje_error"];?> alert-dismissible fade show" role="alert">
				<?= $_SESSION["mensaje_error"] ?>
				<button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
				</div>
				<br>
			<?php session_unset(); } ?>

			







			<div class="card card-body">
				<form action="save_task_cuadrilla.php" method="POST">						
				<input type = "button" class="btn btn-primary btn-block active" 
					name="otros" value="AGREGAR NUEVA CUADRILLA">	
					<br>
					<br>
				
					<div class="form-group">						
						<input type="text" name = "idcuadrilla" class = "form-control" readonly = "readonly" 
						placeholder= "ID cuadrilla" autofocus>						
					</div>
				

					<div class="form-group">
						<input type="text" name = "lider" class = "form-control" 
						placeholder= "Nombre del lider" autofocus>
					</div>

					

					<div class="form-group">
					<select name='personas' class="form-control">
					<option disabled selected>Numero de personas de la cuadrilla</option>
<?php



	
		echo "<option>"; echo "6"; echo "</option>";
		echo "<option>"; echo "7"; echo "</option>";
		echo "<option>"; echo "8"; echo "</option>";
		echo "<option>"; echo "9"; echo "</option>";
		echo "<option>"; echo "10"; echo "</option>";
		echo "<option>"; echo "11"; echo "</option>";
		echo "<option>"; echo "12"; echo "</option>";
		echo "<option>"; echo "13"; echo "</option>";
		echo "<option>"; echo "14"; echo "</option>";
		echo "<option>"; echo "15"; echo "</option>";
		echo "<option>"; echo "16"; echo "</option>";
		echo "<option>"; echo "17"; echo "</option>";
		echo "<option>"; echo "18"; echo "</option>";
		echo "<option>"; echo "19"; echo "</option>";
		echo "<option>"; echo "20"; echo "</option>";

	?>
</select>
						
					</div>


					<div class="form-group">

					
					<select name='pasos_escalera1' class="form-control">
					<option disabled selected>Pasos de escaleras a rentar </option>
<?php

	$query = "SELECT pasos_escalera FROM escalera";
	$result_alumnos = mysqli_query($conn, $query);

	while($row = mysqli_fetch_array($result_alumnos)) { 
		echo "<option>";
		echo $row['pasos_escalera'];
		echo "</option>";
	}
	?>
</select>

					</div>
					
					<div class="form-group">

					
					<select name='peso_canasto1' class="form-control">
					<option disabled selected>Peso de canastos a rentar </option>
<?php

	$query = "SELECT peso_canasto FROM canasto";
	$result_alumnos = mysqli_query($conn, $query);

	while($row = mysqli_fetch_array($result_alumnos)) { 
		echo "<option>";
		echo $row['peso_canasto'];
		echo "</option>";
	}
	?>
</select>

					</div>
	
					<a style="text-align:center" href="index.php">
					<input type = "submit" class="btn btn-success" 
					name="save_task_cuadrilla" value="AGREGAR CUADRILLA"></a>					
				</form>				
			</div>

			<br>

<div class= "card card-body">
			<a style="text-align:left" href="consultas_cuadrillas.php">
					<input type = "submit" class="btn btn-info" 
					name="consultas" value="INFORMACIÓN ADICIONAL DE CUADRILLAS"></a>	
</div>



<div class= "card card-body">
			<a style="text-align:left" href="consultas_herramienta.php">
					<input type = "submit" class="btn btn-info" 
					name="consultas" value="INFORMACIÓN ADICIONAL DE HERRAMIENTA"></a>	
</div>

<div class= "card card-body">
			<a style="text-align:left" href="consultas_financieras.php">
					<input type = "submit" class="btn btn-info" 
					name="consultas" value="INFORMACIÓN FINANCIERA"></a>	
</div>

<div class= "card card-body">
			<a style="text-align:left" href="consultas_proveedores.php">
					<input type = "submit" class="btn btn-info" 
					name="consultas" value="PROVEEDORES"></a>	
</div>





		</div>



		<div class= "col-md-8" style = "">

		<a style="text-align:left; margin-left:70%"  href="index_empleado.php">
					<input type = "submit" class="btn btn-secondary" 
					name="consultas2" value="INFORMACIÓN DE EMPLEADOS"></a>


<h2 class="text-left"> INFORMACIÓN DE CUADRILLAS </h2>
<br>
			

				<table class="table table-bordered text-center">
					<thead>
						<tr class="table table-secondary text-center">
						

						
						    <th> LIDER </th>

							<th> NUMERO DE PERSONAS</th>
	
  
                            <th> TOTAL </th>
							<th> HORA SALIDA </th>
							<th> FECHA SALIDA </th>


							<th>EDITAR </th>
                            <th> DETALLES  </th>
                            <th> ELIMINAR </th>

						</tr>	


					</thead>
					<tbody>
						<?php

						$query = 
						"SELECT id_cuadrilla, lider, personas, concat('$', personas*16) as total_pagar, hora_salida, fecha_salida, escaleras_danadas, canastos_danados from cuadrilla 
						/*WHERE fecha_salida = curdate()*/
					
						order by hora_salida desc";
						
						$result_alumnos = mysqli_query($conn, $query);

						while($row = mysqli_fetch_array($result_alumnos)) { ?>
							<tr>

							
						
							
								<td><?php echo $row["lider"] ?></td>
								<td><?php echo $row["personas"] ?></td>
								
								<td><?php echo $row["total_pagar"] ?></td>
								<td><?php echo $row["hora_salida"] ?></td>
								<td><?php echo $row["fecha_salida"] ?></td>
								

					



								<td style = "text-align: center;"> 
									<a href = "edit.php?id_cuadrilla=<?php echo $row["id_cuadrilla"]?>" class="btn btn-warning">
										<i class="far fa-edit"></i>
									</a> </td>                                   
									 <td style = "text-align: center;"> 
									<a href = "detalles.php?id_cuadrilla=<?php echo $row["id_cuadrilla"]?>" class="btn btn-primary">
										<i class="far fa-clipboard"></i>
									</a></td>
                                    <td style = "text-align: center;">   
									<a href = "delete_task.php?id_cuadrilla=<?php echo $row["id_cuadrilla"]?>" class="btn btn-danger">
										<i class="far fa-trash-alt"></i>
									</a></td>


							</tr>
						




						<?php } ?>
					</tbody>		
	

				</table>

		</div>

	</div>

</div>




<?php include("footer.php") ?>



