<?php include("db.php") ?>

<?php include("header.php") ?>

<br>
<br>



<br>
<br>

<div class="row" style="margin-left:20%">



<div class = "col-md-5">



<div class="card card-body" >

				<form action="save_datos_empleado.php" method="POST">						
				<input type = "button" class="btn btn-primary btn-active" 
					name="ordenar" value="DATOS COMPLETOS POR EMPLEADO">	
					<br>
					<br>		
                    <div class="form-group">
						<input type="text" name = "id_empleado" class = "form-control" 
						placeholder= "Introduce el ID del empleado" autofocus>
					</div>


					<a style="text-align:center" href="save_datos_empleado.php">
					<input type = "submit" class="btn btn-success" 
					name="save_datos_empleado" value="BUSCAR"></a>					
				</form>				
			</div>

			

			
</div>


<div class= "col-md-5" >
<div class="card card-body" >
				<form action="save_salario_empleado.php" method="POST">						
				<input type = "button" class="btn btn-primary btn-active" 
					name="ordenar" value="SALARIO CORRESPONDIENTE A CADA EMPLEADO">	
					<br>
					<br>		
 
					<div class="form-group">
					<select name='mes' class="form-control">
					<option disabled selected>Selecciona el mes</option>
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


					<a style="text-align:center" href="save_salario_empleado.php">
					<input type = "submit" class="btn btn-success" 
					name="save_salario_empleado" value="BUSCAR"></a>					
				</form>				
			</div>

			</div>

			
</div>

<br>
<br>
<br>

<a style="text-decoration:none; margin-left: 50%" href="index_empleado.php">
		 <input formaction= "index.php" type="button" class="btn btn-warning btn-lg " 
					name="mes" value="REGRESAR"></a>	


