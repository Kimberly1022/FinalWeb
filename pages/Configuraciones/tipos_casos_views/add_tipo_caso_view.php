<?php include("../../../Includes/header.php");?>
<?php include("../../../db.php");?>
<?php 

    if (isset($_GET['IDTipoCaso'])) {
        $IDTipoCaso = $_GET['IDTipoCaso'];  

        $query = "SELECT * FROM tipocaso WHERE IDTipoCaso = $IDTipoCaso";
        $result = mysqli_query($conn, $query);
        $casoObtenido = mysqli_fetch_array($result);

        $Nombre = $casoObtenido['Nombre'];
  
        
    }else {
        $IDTipoCaso = 0;  
        $Nombre = '';

    }
?>



<div class="container">
    <form action="../../../Services/Configuraciones/tipos_casos_services/add_tipo_caso_service.php" method="POST">
            <div class="form-group mt-3">
                <label for="">IDTipoCaso</label>
                <input type=""readonly name="IDTipoCaso" value="<?php echo $IDTipoCaso?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="Nombre" value="<?php echo $Nombre?>"  class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
            
    </form>



</div>

<?php include("../../../Includes/footer.php")?>