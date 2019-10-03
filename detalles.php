
<?php include("db.php") ?>

<?php include("header.php") ?>

<br>
<br>
<br>

<div class= "col-md-12" style = "text-align: center;">

<a style="text-decoration:none" href="index.php">
		 <input formaction= "index.php" type="button" class="btn btn-success btn-lg active" 
					name="ordenar" value="REGRESAR A INICIO"></a>	

                    <br>
                    <br>
                    <br>
                    <br>

	
				<table class="table table-bordered" style = "text-align: center;">
					<thead>
						<tr class="table-secondary">
						
							<th> LIDER </th>
							<th> PERSONAS </th>
							<th> PASOS ESCALERAS </th>
							<th> CANTIDAD DE ESCALERAS</th>
                            <th> PESO CANASTOS</th>
							<th> CANTIDAD DE CANASTOS </th>
							<th> TOTAL </th>
                            <th> HORA DE SALIDA </th>
							<th> FECHA DE SALIDA </th>
							<th> ESCALERAS DAÑADAS </th>
							<th> CANASTOS DAÑADOS </th>
	
				 

						</tr>	


					</thead>
					<tbody>
						<?php
                        $id_cuadrilla = $_GET["id_cuadrilla"];
						$query = 
						"SELECT lider, personas, pasos_escalera1, cantidad_escaleras, peso_canasto1, cantidad_canastos, concat('$', personas*16) as total_pagar, hora_salida, fecha_salida, escaleras_danadas, canastos_danados
                        from cuadrilla WHERE id_cuadrilla= $id_cuadrilla";
						
						$result_alumnos = mysqli_query($conn, $query);

						while($row = mysqli_fetch_array($result_alumnos)) { ?>
							<tr>

							
						
						
								<td><?php echo $row["lider"] ?></td>
								<td><?php echo $row["personas"] ?></td>
								<td><?php echo $row["pasos_escalera1"] ?></td>
                                <td><?php echo $row["cantidad_escaleras"] ?></td>
								<td><?php echo $row["peso_canasto1"] ?></td>
								<td><?php echo $row["cantidad_canastos"] ?></td>
                                <td><?php echo $row["total_pagar"] ?></td>
								<td><?php echo $row["hora_salida"] ?></td>
								<td><?php echo $row["fecha_salida"] ?></td>
								<td><?php echo $row["escaleras_danadas"] ?></td>
								<td><?php echo $row["canastos_danados"] ?></td>





							</tr>
						




						<?php } ?>
					</tbody>		
	

				</table>

		</div>

	</div>

</div>




<?php include("footer.php") ?>

