<?php include("../../../Includes/header.php");?>


<div class="container">
    <form action="../../../Services/Configuraciones/estados_services/add_estado_service.php" method="POST">
            <div class="form-group mt-3">
                <label for="">IDEstado</label>
                <input type="" name="IDEstado" class="form-control" id="exampleFormControlInput1" placeholder="">
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
            <br>

            <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
            
    </form>



</div>

<?php include("../../../Includes/footer.php")?>