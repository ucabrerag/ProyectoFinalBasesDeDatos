<?php

include("db.php");

if(isset($_GET["id_empleado"])) {

    $id_empleado = $_GET["id_empleado"];
    $query = "SELECT id_empleado, nombre_empleado, telefono_empleado, direccion_empleado, seguridad_social
    from empleado
    WHERE id_empleado= $id_empleado";

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);

        
        $id_empleado = $row["id_empleado"];

        $nombre_empleado = $row["nombre_empleado"];
        $telefono_empleado = $row["telefono_empleado"];
        $direccion_empleado = $row["direccion_empleado"];
        $seguridad_social = $row["seguridad_social"];

    }



}

if(isset($_POST["update"])){



    $id_empleado= $_GET["id_empleado"];
    $id_empleado_post = $_POST["id_empleado"];

    $nombre_empleado = $_POST["nombre_empleado"];
    $telefono_empleado = $_POST["telefono_empleado"];
    $direccion_empleado = $_POST["direccion_empleado"];
    $seguridad_social = $_POST["seguridad_social"];



    $query = "UPDATE empleado SET telefono_empleado= '$telefono_empleado', direccion_empleado= '$direccion_empleado', seguridad_social= '$seguridad_social'
     WHERE id_empleado = $id_empleado";

    
    mysqli_query($conn, $query);


    $_SESSION["mensaje"] = "EMPLEADO ACTUALIZADO";
    $_SESSION["tipo_mensaje"]= "success";

    header("Location: index_empleado.php");

}

?>

<?php include("header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card-body">
                <form action = "edit_empleado.php?id_empleado=<?php echo $_GET["id_empleado"];?>" method="POST">

                <div class="form-group">
                        <input type="text" readonly= "readonly" name="id_empleado" value="ID empleado: <?php echo $id_empleado; ?>" class="form-control" placeholder="Nuevo Modelo">
                    </div>

                    <div class="form-group">
                        <input type="text" readonly= "readonly" name="nombre_empleado" value="Nombre: <?php echo $nombre_empleado; ?>" class="form-control" placeholder="Nuevo Modelo">
                    </div>



                    <div class="form-group">
						<input type="text" name = "telefono_empleado" class = "form-control" 
						placeholder= "Telefono" autofocus>
					</div>

					<div class="form-group">
						<input type="text" name = "direccion_empleado" class = "form-control" 
						placeholder= "Direccion (Calle, Número, Colonia)" autofocus>
					</div>

                    <div class="form-group">
						<input type="text" name = "seguridad_social" class = "form-control" 
						placeholder= "Numero de seguridad social" autofocus>
					</div>


 


                <button class="btn btn-success" name="update">
                    ACTUALIZAR EMPLEADO

                </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>