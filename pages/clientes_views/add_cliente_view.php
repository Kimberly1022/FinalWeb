<?php include("../../Includes/header.php");?>
<?php include("../../db.php");?>

<?php 

    if (isset($_GET['IDCliente'])) {
        $IDCliente = $_GET['IDCliente'];  

        $query = "SELECT * FROM cliente WHERE IDCliente = $IDCliente";
        $result = mysqli_query($conn, $query);
        $clienteObtenido = mysqli_fetch_array($result);

        $Cedula = $clienteObtenido['Cedula'];
        $Nombre = $clienteObtenido['Nombre'];
        $Apellido = $clienteObtenido['Apellido'];
        $Correo = $clienteObtenido['Correo'];
        $Telefono= $clienteObtenido['Telefono'];
        $Direccion= $clienteObtenido['Direccion'];
        $EstadoCivil= $clienteObtenido['EstadoCivil'];

       
        
    }else {
        $IDCliente = 0;  

        $Cedula = '';
        $Nombre = '';
        $Apellido = '';
        $Correo = '';
        $Telefono = '';
        $Direccion = '';
        $EstadoCivil = '';
      
    }
?>

<div class="container">
    <form action="../../Services/clientes_services/add_cliente_service.php" method="POST">
            <div class="form-group mt-3">
                <label for="">IDCliente</label>
                <input type="" readonly name="IDCliente" value="<?php echo $IDCliente?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Cedula</label>
                <input type="" name="Cedula" value="<?php echo $Cedula?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Nombre</label>
                <input type="" name="Nombre" value="<?php echo $Nombre?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Apellido</label>
                <input type="" name="Apellido" value="<?php echo $Apellido?>"class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Correo</label>
                <input type="" name="Correo" value="<?php echo $Correo?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Telefono</label>
                <input type="" name="Telefono" value="<?php echo $Telefono?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Direccion</label>
                <input type="" name="Direccion" value="<?php echo $Direccion?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Estado Civil</label>
                <input type="" name="EstadoCivil" value="<?php echo $EstadoCivil?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>

            <br>

            <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
            
    </form>



</div>

<?php include("../../Includes/footer.php")?>