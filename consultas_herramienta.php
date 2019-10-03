<?php include("db.php") ?>

<?php include("header.php") ?>

<br>
<br>



<div class="row" style="margin-left:">



<div class = "col-md-4">



<div class="card card-body" >
				<form action="save_herramienta_dañada.php" method="POST">						
				<input type = "button" class="btn btn-primary btn-active" 
					name="ordenar" value="HERRAMIENTA DAÑADA">	
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

					<a style="text-align:center" href="save_herramienta_dañada.php">
					<input type = "submit" class="btn btn-success" 
					name="save_herramienta_dañada" value="BUSCAR"></a>					
				</form>				
			</div>

			
</div>




<div class = "col-md-4">
<div class="card card-body" >
				<form action="save_herramienta_rentada.php" method="POST">						
				<input type = "button" class="btn btn-primary btn-active" 
					name="ordenar" value="FRECUENCIA DE RENTA">	
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

					<a style="text-align:center" href="save_escalera_rentada.php">
					<input type = "submit" class="btn btn-success" 
					name="save_escalera_rentada" value="BUSCAR"></a>					
				</form>				
			</div>

			
</div>

<div class = "col-md-4">
<div class="card card-body" >
				<form action="save_herramienta_disponible.php" method="POST">						
				<input type = "button" class="btn btn-primary btn-active" 
					name="ordenar" value="HERRAMIENTA DISPONIBLE">	
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

					<a style="text-align:center" href="save_herramienta_disponible.php">
					<input type = "submit" class="btn btn-success" 
					name="save_herramienta_disponible" value="BUSCAR"></a>					
				</form>				
			</div>

			
</div>








</div>











<br>
<br>
<br>

<a style="text-decoration:none; margin-left: 50%" href="index.php">
		 <input formaction= "index.php" type="button" class="btn btn-warning btn-lg " 
					name="mes" value="REGRESAR"></a>	
