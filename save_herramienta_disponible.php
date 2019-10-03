
<?php include("db.php") ?>

<?php include("header.php") ?>

<br>
<br>
<br>

<div class= "col-md-8" >

<a style="text-decoration:none" href="consultas_herramienta.php">
		 <input formaction= "index.php" type="button" class="btn btn-success btn-lg active" 
					name="mes" value="REGRESAR "></a>	

                    <br>
                    <br>


	
				<table class="table table-bordered" style = "text-align: center; margin-left:350px">
					<thead>
						<tr class="table-secondary">
						
							
							<th> MES </th>
							<th> TIPO DE ESCALERA </th>
                
                          
                            <th> DISPONIBILIDAD</th>

	
				 

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
						"SELECT pasos_escalera, ifnull(cantidad_esc_disponible - sum(escaleras_danadas), 100) as totalescaleras
                        from cuadrilla right outer join escalera on escalera.pasos_escalera=cuadrilla.pasos_escalera1 
                        
                        WHERE monthname(fecha_salida) = '$mes' group by pasos_escalera";

                        
						
						$result_alumnos = mysqli_query($conn, $query);

						while($row = mysqli_fetch_array($result_alumnos)) { ?>
							<tr>

							
						
						        

								<td><?php echo $_POST["mes"] ?></td>
                                <td><?php echo $row["pasos_escalera"] ?></td>
                                
                             
                                <td><?php echo $row["totalescaleras"] ?></td>




							</tr>
						




						<?php } ?>
					</tbody>		
	

				</table>

		</div>

        <br>
        <br>
        <div class= "col-md-8" >
				<table class="table table-bordered" style = "text-align: center; margin-left:350px">
					<thead>
						<tr class="table-secondary">
						
							
							<th> MES </th>
							<th> TIPO DE CANASTO </th>
                
                            <th> DISPONIBILIDAD</th>

	
				 

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
						"SELECT peso_canasto, ifnull(cantidad_can_disponible - sum(canastos_danados), 100) as totalcanastos
                        from cuadrilla inner join escalera on escalera.pasos_escalera=cuadrilla.pasos_escalera1 
                        inner join canasto on canasto.peso_canasto = cuadrilla.peso_canasto1 
                        WHERE monthname(fecha_salida) = '$mes' group by peso_canasto";

                        
						
						$result_alumnos = mysqli_query($conn, $query);

						while($row = mysqli_fetch_array($result_alumnos)) { ?>
							<tr>

							
						
						        

								<td><?php echo $_POST["mes"] ?></td>
                                <td><?php echo $row["peso_canasto"] ?></td>
                                
                                
                                <td><?php echo $row["totalcanastos"] ?></td>




							</tr>
						




						<?php } ?>
					</tbody>		
	

				</table>



	</div>

</div>




<?php include("footer.php") ?>
