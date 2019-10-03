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
				<form action="save_task_empleado.php" method="POST">						
				<input type = "button" class="btn btn-primary btn-block active" 
					name="otros" value="AGREGAR NUEVO EMPLEADO">	
					<br>
					<br>
				
					<div class="form-group">						
						<input type="text" name = "id_empleado" class = "form-control" readonly = "readonly" 
						placeholder= "ID empleado" autofocus>						
					</div>
				

					<div class="form-group">
						<input type="text" name = "nombre_empleado" class = "form-control" 
						placeholder= "Nombre del empleado" autofocus>
					</div>

					<div class="form-group">
						<input type="text" name = "telefono_empleado" class = "form-control" 
						placeholder= "Telefono" autofocus>
					</div>

					<div class="form-group">
						<input type="text" name = "direccion_empleado" class = "form-control" 
						placeholder= "Direccion (Calle, Número, Colonia)" autofocus>
					</div>


					

					<div class="form-group">
					<select name='salario_diario' class="form-control">
					<option disabled selected>Salario diario</option>
<?php



	
		echo "<option>"; echo "100"; echo "</option>";
		echo "<option>"; echo "150"; echo "</option>";
		echo "<option>"; echo "200"; echo "</option>";
		echo "<option>"; echo "250"; echo "</option>";
		echo "<option>"; echo "300"; echo "</option>";

	?>
</select>
						
					</div>

					<div class="form-group">
					<select name='mes_trabajado' class="form-control">
					<option disabled selected>Mes trabajado</option>
<?php



	
		echo "<option>"; echo "Enero"; echo "</option>";
		echo "<option>"; echo "Febrero"; echo "</option>";
		echo "<option>"; echo "Marzo"; echo "</option>";
		echo "<option>"; echo "Abril"; echo "</option>";
        echo "<option>"; echo "Mayo"; echo "</option>";
        echo "<option>"; echo "Junio"; echo "</option>";
		echo "<option>"; echo "Julio"; echo "</option>";
		echo "<option>"; echo "Agosto"; echo "</option>";
		echo "<option>"; echo "Septiembre"; echo "</option>";
        echo "<option>"; echo "Octubre"; echo "</option>";
        echo "<option>"; echo "Noviembre"; echo "</option>";
        echo "<option>"; echo "Diciembre"; echo "</option>";

	?>
</select>
						
					</div>


					<div class="form-group">
					<select name='dias_trabajados_mes' class="form-control">
					<option disabled selected>Dias trabajados</option>
<?php



	
		echo "<option>"; echo "1"; echo "</option>";
		echo "<option>"; echo "2"; echo "</option>";
        echo "<option>"; echo "3"; echo "</option>";
        echo "<option>"; echo "4"; echo "</option>";
		echo "<option>"; echo "5"; echo "</option>";
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
        echo "<option>"; echo "21"; echo "</option>";
        echo "<option>"; echo "22"; echo "</option>";
		echo "<option>"; echo "23"; echo "</option>";
        echo "<option>"; echo "24"; echo "</option>";
        echo "<option>"; echo "25"; echo "</option>";
		echo "<option>"; echo "26"; echo "</option>";
        echo "<option>"; echo "27"; echo "</option>";
        echo "<option>"; echo "28"; echo "</option>";
		echo "<option>"; echo "29"; echo "</option>";
        echo "<option>"; echo "30"; echo "</option>";
        echo "<option>"; echo "31"; echo "</option>";
        


	?>
</select>
						
					</div>

                    <div class="form-group">
						<input type="text" name = "seguridad_social" class = "form-control" 
						placeholder= "Clave de seguridad social" autofocus>
					</div>
					

	
					<a style="text-align:center" href="index_empleado.php">
					<input type = "submit" class="btn btn-success" 
					name="save_task_empleado" value="AGREGAR EMPLEADO"></a>					
				</form>				
			</div>

			<br>

<div class= "card card-body">
			<a style="text-align:left" href="consultas_empleado.php">
					<input type = "submit" class="btn btn-info" 
					name="consultas" value="INFORMACIÓN ADICIONAL DE EMPLEADO"></a>	


</div>
<br>
<br>


		</div>



		<div class= "col-md-8" style = "">


<a style="text-align:left; margin-left: 70%"  href="index.php">
					<input type = "submit" class="btn btn-secondary" 
					name="consultas2" value="INFORMACIÓN DE CUADRILLAS"></a>


<h2 class="text-left"> INFORMACIÓN DE EMPLEADOS </h2>





<br>
			

				<table class="table table-bordered text-center">
					<thead>
						<tr class="table table-secondary text-center">
						

						    <th> ID EMPLEADO </th>
							<th> NOMBRE DE EMPLEADO </th>

							<th> SALARIO DIARIO </th>
                            <th> SEGURIDAD SOCIAL </th>
	
	
  


							<th>EDITAR O ELIMINAR </th>
                           
                   

						</tr>	


					</thead>
					<tbody>
						<?php

						$query = 
						"SELECT id_empleado, nombre_empleado, concat('$', salario_diario) as salarioaldia, seguridad_social
                         from empleado
						/*WHERE fecha_salida = curdate()*/
					
						order by id_empleado asc";
						
						$result_alumnos = mysqli_query($conn, $query);

						while($row = mysqli_fetch_array($result_alumnos)) { ?>
							<tr>

							
						
							
							    <td><?php echo $row["id_empleado"] ?></td>
								<td><?php echo $row["nombre_empleado"] ?></td>
								
								<td><?php echo $row["salarioaldia"] ?></td>
								<td><?php echo $row["seguridad_social"] ?></td>
								
								

					



								<td style = "text-align: center;"> 
									<a href = "edit_empleado.php?id_empleado=<?php echo $row["id_empleado"]?>" class="btn btn-warning">
										<i class="far fa-edit"></i>
									</a>
									
									<a href = "delete_empleado.php?id_empleado=<?php echo $row["id_empleado"]?>" class="btn btn-danger">
										<i class="far fa-trash-alt"></i>
									
									 </td>                                   
					
                                    


							</tr>
						




						<?php } ?>
					</tbody>		
	

				</table>

		</div>

	</div>

</div>




<?php include("footer.php") ?>



