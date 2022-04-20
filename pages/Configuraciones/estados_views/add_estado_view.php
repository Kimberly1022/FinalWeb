<?php include("../../../Includes/header.php");?>


<div class="container">

    <!-- <?php if(isset($_SESSION['message'])) { ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?= $_SESSION['message']  ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>

    <?php } ?> -->

    <form action="../../../Services/Configuraciones/estados_services/add_estado_service.php" method="POST">
            <div class="form-group mt-3">
                <label for="">IDEstado</label>
                <input type="" name="IDEstado" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for="">Nombre</label>
                <input type="text" name="Nombre" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
            
    </form>



</div>

<?php include("../../../Includes/footer.php")?>