<?php include("../../Includes/header.php");?>

<div class="container">
    <form action="../../Services/clientes_services/add_cliente_service.php" method="POST">
            <div class="form-group mt-3">
                <label for="">IDCliente</label>
                <input type="" name="IDCliente" class="form-control" id="exampleFormControlInput1" placeholder="">
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
                <label for="">Telefono</label>
                <input type="" name="Telefono" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Direccion</label>
                <input type="" name="Direccion" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Estado Civil</label>
                <input type="" name="EstadoCivil" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>

            <br>

            <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
            
    </form>



</div>

<?php include("../../Includes/footer.php")?>