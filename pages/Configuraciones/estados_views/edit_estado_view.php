<?php include("../../../db.php")?>

<div class="container p-2">
    <h2>EDITAR ESTADOS</h2>
</div>
<br>

<?php
    if(isset($_GET['IDEstado'])){
        $IDEstado = $_GET['IDEstado'];
        $query = "SELECT * FROM estado WHERE IDEstado = $IDEstado";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result) == 1){
            $row = mysqli_fetch_array($result);
            $Nombre = $row['Nombre'];
            echo $Nombre;
        }
    }
?>

<?php include("../../../Includes/header.php")?>
<div class="container p-4">

    <form action="">
            <div class="form-group">
                <label for="">IDEstado</label>
                <input type="" name="IDEstado" value="<?php echo $IDEstado?>" class="form-control" placeholder="update ID">
            </div>
            <br>
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="Nombre"  value="<?php echo$Nombre?>" class="form-control"  placeholder="Update Nombre">
            </div>
            <br>

            <button class="btn btn-success btn-block" name="update">
                Actualizar

            </button>
            
    </form>



</div>


<?php include("../../../Includes/footer.php")?>