<?php include("db.php") ?>

<?php include("header.php") ?>

<br>
<br>



<div class="row" style="margin-left:40%">



<div class = "col-md-6">
<div class="card card-body" >
				<form action="save_ganancias_mensuales.php" method="POST">						
				<input type = "button" class="btn btn-primary btn-active" 
					name="ordenar" value="GANANCIAS TOTALES">	
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

					<a style="text-align:center" href="save_ganancias_mensuales.php">
					<input type = "submit" class="btn btn-success" 
					name="save_retardos_cuadrilla" value="BUSCAR"></a>					
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
