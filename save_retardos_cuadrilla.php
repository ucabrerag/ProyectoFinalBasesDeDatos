
<?php include("db.php") ?>

<?php include("header.php") ?>

<br>
<br>
<br>

<div class= "col-md-8" >

<a style="text-decoration:none" href="consultas_cuadrillas.php">
		 <input formaction= "index.php" type="button" class="btn btn-success btn-lg active" 
					name="mes" value="REGRESAR"></a>	

                    <br>
                    <br>
                    <br>
                    <br>

	
				<table class="table table-bordered" style = "text-align: center; margin-left:350px">
					<thead>
						<tr class="table-secondary">
						
							<th> LIDER </th>
							<th> MES </th>
							<th> HORA DE SALIDA </th>

	
				 

						</tr>	


					</thead>
					<tbody>
						<?php

                    $mes = $_POST["mes"];

                    switch($mes)
{   
    case "Enero":
    $mes = "January";
    break;

    case "Febrero":
    $mes = "February";
    break;

    case "Marzo":
    $mes  = "March";
    break;

    case "Abril":
    $mes = "April";
    break;

    case "Mayo":
    $mes  = "May";
    break;

    case "Junio":
    $mes = "June";
    break;

    case "Julio":
    $mes = "July";
    break;

    case "Agosto":
    $mes = "August";
    break;

    case "Septiembre":
    $mes = "September";
    break;

    case "Octubre":
    $mes = "October";
    break;

    case "Noviembre":
    $mes = "November";
    break;

    case "Diciembre":
    $mes = "December";
    break;

}
                       
						$query = 
						"SELECT lider, min(hora_salida) as horasalida
                        from cuadrilla WHERE monthname(fecha_salida) = '$mes' group by lider";

                        
						
						$result_alumnos = mysqli_query($conn, $query);

						while($row = mysqli_fetch_array($result_alumnos)) { ?>
							<tr>

							
						
						        <td><?php echo $row["lider"] ?></td>

								<td><?php echo $_POST["mes"] ?></td>
								<td><?php echo $row["horasalida"] ?></td>
                               




							</tr>
						




						<?php } ?>
					</tbody>		
	

				</table>

		</div>

	</div>

</div>




<?php include("footer.php") ?>
