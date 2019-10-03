<?php include("db.php") ?>

<?php include("header.php") ?>

<br>
<br>



<div class="row" style="margin-left:40%">



<div class = "col-md-6">
<div class="card card-body" >
				<form action="save_proveedores.php" method="POST">						
				<input type = "button" class="btn btn-primary btn-active" 
					name="ordenar" value="PROVEEDORES POR TIPO DE HERRAMIENTA">	
					<br>
					<br>		

					<div class="form-group">
					<select name='tipo_herramienta' class="form-control">
					<option disabled selected>Selecciona tipo de herramienta</option>
<?php

		echo "<option>"; echo "Escalera"; echo "</option>";
		echo "<option>"; echo "Canasto"; echo "</option>";



	?>
</select>
						
					</div>

					<a style="text-align:center" href="save_proveedores.php">
					<input type = "submit" class="btn btn-success" 
					name="save_proveedores" value="BUSCAR"></a>					
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
