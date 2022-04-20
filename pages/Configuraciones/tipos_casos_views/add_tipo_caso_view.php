<?php include("../../../Includes/header.php");?>

<div class="container">
    <form action="../../../Services/Configuraciones/tipos_casos_services/add_tipo_caso_service.php" method="POST">
            <div class="form-group mt-3">
                <label for="">IDTipoCaso</label>
                <input type="" name="IDTipoCaso" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Nombre</label>
                <input type="" name="Nombre" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Descripcion</label>
                <input type="" name="Descripcion" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>

            <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
            
    </form>



</div>

<?php include("../../../Includes/footer.php")?>