<?php

include("db.php");


if(isset($_POST['save_task_empleado'])){
    //$idmodelo= $_POST["idmodelo"];

    $nombre_empleado = $_POST["nombre_empleado"];
    $telefono_empleado = $_POST["telefono_empleado"];
    $direccion_empleado = $_POST["direccion_empleado"];
    $salario_diario = $_POST["salario_diario"];
    $seguridad_social = $_POST["seguridad_social"];
    $dias_trabajados_mes= $_POST["dias_trabajados_mes"];
    $mes_trabajado= $_POST["mes_trabajado"];
 


	$query = "INSERT INTO empleado(nombre_empleado, telefono_empleado, direccion_empleado, salario_diario, mes_trabajado, dias_trabajados_mes, seguridad_social) 
    VALUES ('$nombre_empleado', '$telefono_empleado', '$direccion_empleado', '$salario_diario', '$mes_trabajado', '$dias_trabajados_mes', '$seguridad_social');";

    $query .= "INSERT into balance(registro, mes) 
    VALUES(-($salario_diario*$dias_trabajados_mes), '$mes_trabajado');";

header("Location: index_empleado.php");






	$result = mysqli_multi_query($conn, $query);
    if(!$result) {
        $_SESSION['mensaje'] = 'EMPLEADO NO AGREGADO, INGRESA LOS DATOS CORRECTAMENTE';
        $_SESSION['tipo_mensaje'] = 'warning';
 
        die("QUERY FAILED");
    }
    
 
	$_SESSION['mensaje'] = 'EMPLEADO AGREGADO CORRECTAMENTE';
	$_SESSION['tipo_mensaje'] = 'success';

	
}


?>