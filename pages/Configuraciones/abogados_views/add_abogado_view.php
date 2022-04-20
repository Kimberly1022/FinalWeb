<?php include("../../../Includes/header.php");?>

<div class="container">
    <form action="../../../Services/Configuraciones/abogados_services/add_abogado_service.php" method="POST">
            <div class="form-group mt-3">
                <label for="">IDAbogado</label>
                <input type="" name="IDAbogado" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Cedula</label>
                <input type="" name="Cedula" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Nombre</label>
                <input type="" name="Nombre" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Apellido</label>
                <input type="" name="Apellido" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Correo</label>
                <input type="" name="Correo" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">NombreUsuario</label>
                <input type="" name="NombreUsuario" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Clave</label>
                <input type="password" name="Clave" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            
            <br>

            <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
            
    </form>



</div>

<?php include("../../../Includes/footer.php")?>