    <?php include("../../../Includes/header.php");?>
<?php include("../../../db.php");?>

<?php 

    if (isset($_GET['IDAbogado'])) {
        $IDAbogado = $_GET['IDAbogado'];  

        $query = "SELECT * FROM abogado WHERE IDAbogado = $IDAbogado";
        $result = mysqli_query($conn, $query);
        $abogadoObtenido = mysqli_fetch_array($result);

        $Cedula = $abogadoObtenido['Cedula'];
        $Nombre = $abogadoObtenido['Nombre'];
        $Apellido = $abogadoObtenido['Apellido'];
        $Correo = $abogadoObtenido['Correo'];
        $NombreUsuario = $abogadoObtenido['NombreUsuario'];
        $Clave = $abogadoObtenido['Clave'];
        
    }else {
        $IDAbogado = 0;  

        $Cedula = '';
        $Nombre = '';
        $Apellido = '';
        $Correo = '';
        $NombreUsuario = '';
        $Clave = '';
    }
?>



<div class="container">
    <form action="../../../Services/Configuraciones/abogados_services/add_abogado_service.php" method="POST">
            <div class="form-group mt-3">
                <label for="">IDAbogado</label>
                <input type="" readonly name="IDAbogado" value="<?php echo $IDAbogado?>" class="form-control" id="exampleFormControlInput1" placeholder="">
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
                <input type="" name="Apellido" value="<?php echo $Apellido?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Correo</label>
                <input type="" name="Correo" value="<?php echo $Correo?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">NombreUsuario</label>
                <input type="" name="NombreUsuario" value="<?php echo $NombreUsuario?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            <div class="form-group">
                <label for="">Clave</label>
                <input type="password" name="Clave" value="<?php echo $Clave?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>

            
            <br>

            <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
            
    </form>



</div>

<?php include("../../../Includes/footer.php")?>