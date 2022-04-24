<?php include("../../Includes/header.php");?>
<?php include("../../db.php")?>

<?php 

    if (isset($_GET['IDCaso'])) {
        $IDCaso = $_GET['IDCaso'];

        $query = "SELECT * FROM caso WHERE IDCaso = $IDCaso";
        $result = mysqli_query($conn, $query);
        $casoObtenido = mysqli_fetch_array($result);

        $Fecha = $casoObtenido['Fecha'];
        $IDCliente = $casoObtenido['IDCliente'];
        $IDTipoCaso = $casoObtenido['IDTipoCaso'];
        $Descripcion = $casoObtenido['Descripcion'];
        $IDAbogado = $casoObtenido['IDAbogado'];
        $IDEstado = $casoObtenido['IDEstado'];

        
    }else {
        $IDCaso = 0; 
        $Fecha = "";
        $IDCliente = "";
        $IDTipoCaso = "";
        $Descripcion = "";
        $IDAbogado = "";
        $IDEstado = ""; 
     
    }
?>

<div class="container">
    <form  action="../../Services/casos_services/add_caso_service.php" method="POST"> 
            <div class="form-group mt-3">
                <label for="">IDCaso</label>
                <input type="" readonly name="IDCaso" value="<?php echo $IDCaso?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for="">Fecha</label>
                <input type="date" name="Fecha" value="<?php echo $Fecha?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for="" name="">Cliente</label>
                <!-- <input type="" class="form-control" id="exampleFormControlInput1" placeholder=""> -->
                <select class="form-select" name="IDCliente" aria-label="Default select example">
                    <option selected>Seleccione el cliente</option>
                    <?php 
                    $query = "SELECT * FROM cliente";
                    $result_cliente = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_cliente)){ ?>
                        <option value="<?php echo $row['IDCliente']?>"><?php echo $row['Nombre']?> <?php echo $row['Apellido']?></option>
                    <?php } ?>
                </select>
            </div>
            <br>

            <div class="form-group">
                <label for="">Tipo de Caso</label>
                <!-- <input type="select" class="form-control" id="exampleFormControlInput1" placeholder=""> -->
                <select class="form-select" name="IDTipoCaso" aria-label="Default select example">
                    <option selected>Seleccione el tipo de caso</option>
                    <?php 
                    $query = "SELECT * FROM tipocaso";
                    $result_tipocaso = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_tipocaso)){ ?>
                        <option value="<?php echo $row['IDTipoCaso']?>"><?php echo $row['Nombre']?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="">Descripcion</label>
                <input type="textarea" name="Descripcion" value="<?php echo $Descripcion?>" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for="">Abogado</label>
                <!-- <input type="" class="form-control" id="exampleFormControlInput1" placeholder=""> -->

                <select class="form-select" name="IDAbogado" aria-label="Default select example">
                    <option selected>Seleccione el abogado</option>
                    <?php 
                    $query = "SELECT * FROM abogado";
                    $result_abogado = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_abogado)){ ?>
                        <option value="<?php echo $row['IDAbogado']?>"><?php echo $row['Nombre']?> <?php echo $row['Apellido']?></option>
                    <?php } ?>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="">Estado</label>
                <!-- <input type="" class="form-control" id="exampleFormControlInput1" placeholder=""> -->

                <select class="form-select" name="IDEstado" aria-label="Default select example">
                <option selected>Seleccione el estado</option>
                    <?php 
                    $query = "SELECT * FROM estado";
                    $result_estado= mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_estado)){ ?>
                        <option value="<?php echo $row['IDEstado']?>"><?php echo $row['Nombre']?></option>
                    <?php } ?>
                </select>
            </div>

            <br>

            <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
            
    </form>



</div>






























<?php include("../../Includes/footer.php")?>
