
<?php include("db.php") ?>

<?php include("header.php") ?>

<br>
<br>
<br>

<div class= "col-md-8">

<a style="text-decoration:none" href="consultas_empleado.php">
		 <input formaction= "index.php" type="button" class="btn btn-success btn-lg active" 
					name="mes" value="REGRESAR"></a>

						

                    <br>
                    <br>
                    <br>
                    <br>

	
				<table class="table table-bordered" style = "text-align: center; margin-left:350px">
					<thead>
						<tr class="table-secondary">
						
							
							<th> MES </th>
							<th> EMPLEADO </th>
                
                            <th> SALARIO TOTAL </th>
                           

	
				 

						</tr>	


					</thead>
					<tbody>
						<?php

                    $mes = $_POST["mes"];

 
                       
$query = 
"SELECT nombre_empleado,  mes_trabajado as mes, salario_diario*dias_trabajados_mes as totalpagar
from empleado WHERE mes_trabajado = '$mes'";

                        
						
						$result_alumnos = mysqli_query($conn, $query);

						while($row = mysqli_fetch_array($result_alumnos)) { ?>
							<tr>

							
						
						        

								<td><?php echo $_POST["mes"] ?></td>
                                <td><?php echo $row["nombre_empleado"] ?></td>
							
                                <td><?php echo $row["totalpagar"] ?></td>
                               




							</tr>
						




						<?php } ?>
					</tbody>		
	

				</table>

		</div>

	</div>

</div>




<?php include("footer.php") ?>
