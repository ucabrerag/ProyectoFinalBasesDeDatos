<?php  


include("db.php");

if(isset($_GET["id_empleado"])) {

    $id_empleado = $_GET["id_empleado"];
    $query = "DELETE FROM empleado WHERE id_empleado = $id_empleado";
    $result = mysqli_query($conn, $query);
    if(!$result){

        die("QUERY FAILED");

    }

    $_SESSION["mensaje"] = "EMPLEADO ELIMINADA";
    $_SESSION["tipo_mensaje"] = "danger";
    header("Location: index_empleado.php");
}


?>