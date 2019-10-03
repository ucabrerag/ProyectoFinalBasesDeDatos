<?php

include("db.php");


if(isset($_POST['save_task_cuadrilla'])){
    //$idmodelo= $_POST["idmodelo"];

    $lider = $_POST["lider"];
    $personas = $_POST["personas"];
    $pasos_escalera1 = $_POST["pasos_escalera1"];
    $peso_canasto1= $_POST["peso_canasto1"];
 



	$query = "INSERT INTO cuadrilla(lider, personas, pasos_escalera1, peso_canasto1, hora_salida, fecha_salida, canastos_danados, escaleras_danadas) 
    values ('$lider', '$personas', '$pasos_escalera1', '$peso_canasto1', current_time(), current_date(), 0, 0);";

    $mes = date("F");

    switch($mes)
{   
case "January":
$mes = "Enero";
break;

case "February":
$mes = "Febrero";
break;

case "March":
$mes  = "Marzo";
break;

case "April":
$mes = "Abril";
break;

case "May":
$mes  = "Mayo";
break;

case "June":
$mes = "Junio";
break;

case "July":
$mes = "Julio";
break;

case "Agosto":
$mes = "August";
break;

case "September":
$mes = "Septiembre";
break;

case "October":
$mes = "Octubre";
break;

case "November":
$mes = "Noviembre";
break;

case "December":
$mes = "Diciembre";
break;

}



$query .= "INSERT into balance(registro, mes) 
    VALUES($personas*16, '$mes');";


    $query .= "UPDATE cuadrilla 
    SET cuadrilla.cantidad_escaleras = cuadrilla.personas, cuadrilla.cantidad_canastos = cuadrilla.personas;";

    $query .= "UPDATE cuadrilla
    INNER JOIN escalera ON escalera.pasos_escalera = cuadrilla.pasos_escalera1
    INNER JOIN canasto ON canasto.peso_canasto = cuadrilla.peso_canasto1 
    SET cuadrilla.total_pagar = (cuadrilla.cantidad_escaleras * escalera.precio_esc) + (cuadrilla.cantidad_canastos * canasto.precio_can);";



header("Location: index.php");


	$result = mysqli_multi_query($conn, $query);
	if(!$result) {
        $_SESSION['mensaje'] = 'CUADRILLA NO AGREGADA, INGRESA LOS DATOS CORRECTAMENTE';
        $_SESSION['tipo_mensaje'] = 'warning';
 
		die("QUERY FAILED");
    }
    
 
	$_SESSION['mensaje'] = 'CUADRILLA AGREGADA CORRECTAMENTE';
	$_SESSION['tipo_mensaje'] = 'success';


}


?>