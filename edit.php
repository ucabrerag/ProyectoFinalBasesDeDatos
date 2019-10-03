<?php

include("db.php");

if(isset($_GET["id_cuadrilla"])) {

    $id_cuadrilla = $_GET["id_cuadrilla"];
    $query = "SELECT id_cuadrilla, escaleras_danadas, canastos_danados 
    from cuadrilla	
    WHERE id_cuadrilla= $id_cuadrilla";

    $result = mysqli_query($conn, $query);
    if(mysqli_num_rows($result)==1){
        $row = mysqli_fetch_array($result);

        
        $id_cuadrilla = $row["id_cuadrilla"];

        $escaleras_danadas = $row["escaleras_danadas"];
        $canastos_danados = $row["canastos_danados"];

    }



}

if(isset($_POST["update"])){



    $id_cuadrilla= $_GET["id_cuadrilla"];
    $id_cuadrilla_post = $_POST["id_cuadrilla"];

    $lider = $_POST["lider"];
    $personas = $_POST["personas"];
    $total_pagar = $_POST["total_pagar"];
    $hora_salida = $_POST["hora_salida"];
    $escaleras_danadas = $_POST["escaleras_danadas"];
    $canastos_danados = $_POST["canastos_danados"];


    $query = "UPDATE cuadrilla SET escaleras_danadas= '$escaleras_danadas', canastos_danados= '$canastos_danados' WHERE id_cuadrilla = $id_cuadrilla";

    
    mysqli_query($conn, $query);


    $_SESSION["mensaje"] = "CUADRILLA ACTUALIZADA";
    $_SESSION["tipo_mensaje"]= "success";

    header("Location: index.php");

}

?>

<?php include("header.php") ?>

<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card-body">
                <form action = "edit.php?id_cuadrilla=<?php echo $_GET["id_cuadrilla"];?>" method="POST">

                <div class="form-group">
                        <input type="text" readonly= "readonly" name="id_cuadrilla" value="ID cuadrilla: <?php echo $id_cuadrilla; ?>" class="form-control" placeholder="Nuevo Modelo">
                    </div>

                <div class="form-group">
                <select name='escaleras_danadas' class="form-control">
					<option disabled selected> Número de escaleras dañadas</option>
<?php

echo "<option>"; echo "0"; echo "</option>";
echo "<option>"; echo "1"; echo "</option>";
echo "<option>"; echo "2"; echo "</option>";
echo "<option>"; echo "3"; echo "</option>";
echo "<option>"; echo "4"; echo "</option>";
echo "<option>"; echo "5"; echo "</option>";
echo "<option>"; echo "6"; echo "</option>";
echo "<option>"; echo "7"; echo "</option>";
echo "<option>"; echo "8"; echo "</option>";
echo "<option>"; echo "9"; echo "</option>";
echo "<option>"; echo "10"; echo "</option>";
echo "<option>"; echo "11"; echo "</option>";
echo "<option>"; echo "12"; echo "</option>";
echo "<option>"; echo "13"; echo "</option>";
echo "<option>"; echo "14"; echo "</option>";
echo "<option>"; echo "15"; echo "</option>";
echo "<option>"; echo "16"; echo "</option>";
echo "<option>"; echo "17"; echo "</option>";
echo "<option>"; echo "18"; echo "</option>";
echo "<option>"; echo "19"; echo "</option>";
echo "<option>"; echo "20"; echo "</option>";
	?>
</select>

  </div>


  <div class="form-group">
                <select name='canastos_danados' class="form-control">
					<option disabled selected> Número de canastos dañados</option>
<?php

echo "<option>"; echo "0"; echo "</option>";
echo "<option>"; echo "1"; echo "</option>";
echo "<option>"; echo "2"; echo "</option>";
echo "<option>"; echo "3"; echo "</option>";
echo "<option>"; echo "4"; echo "</option>";
echo "<option>"; echo "5"; echo "</option>";
echo "<option>"; echo "6"; echo "</option>";
echo "<option>"; echo "7"; echo "</option>";
echo "<option>"; echo "8"; echo "</option>";
echo "<option>"; echo "9"; echo "</option>";
echo "<option>"; echo "10"; echo "</option>";
echo "<option>"; echo "11"; echo "</option>";
echo "<option>"; echo "12"; echo "</option>";
echo "<option>"; echo "13"; echo "</option>";
echo "<option>"; echo "14"; echo "</option>";
echo "<option>"; echo "15"; echo "</option>";
echo "<option>"; echo "16"; echo "</option>";
echo "<option>"; echo "17"; echo "</option>";
echo "<option>"; echo "18"; echo "</option>";
echo "<option>"; echo "19"; echo "</option>";
echo "<option>"; echo "20"; echo "</option>";
	?>
</select>


</div>
   



                <button class="btn btn-success" name="update">
                    ACTUALIZAR

                </button>
                </form>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php") ?>