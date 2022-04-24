<?php include("../../../Includes/header.php");?>
<?php include("../../../db.php");?>


<?php 

    if (isset($_GET['IDEstado'])) {
        $IDEstado = $_GET['IDEstado'];  

        $query = "SELECT * FROM estado WHERE IDEstado = $IDEstado";
        $result = mysqli_query($conn, $query);
        $estadoObtenido = mysqli_fetch_array($result);

        $Nombre = $estadoObtenido['Nombre'];
  
        
    }else {
        $IDEstado = 0;  
        $Nombre = '';

    }
?>

<div class="container">

  

    <form action="../../../Services/Configuraciones/estados_services/add_estado_service.php" method="POST">
            <div class="form-group mt-3">
                <label for="">IDEstado</label>
                <input type="" name="IDEstado" readonly value="<?php echo $IDEstado?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="Nombre" value="<?php echo $Nombre?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
            
            
    </form>



</div>

<?php include("../../../Includes/footer.php")?>