<?php  


include("db.php");

if(isset($_GET["id_cuadrilla"])) {

    $id_cuadrilla = $_GET["id_cuadrilla"];
    $query = "DELETE FROM cuadrilla WHERE id_cuadrilla = $id_cuadrilla";
    $result = mysqli_query($conn, $query);
    if(!$result){

        die("QUERY FAILED");

    }

    $_SESSION["mensaje"] = "CUADRILLA ELIMINADA";
    $_SESSION["tipo_mensaje"] = "danger";
    header("Location: index.php");
}


?>