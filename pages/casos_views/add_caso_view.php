<?php include("../../Includes/header.php");?>


<div class="container">
    <form  action="../../Services/casos_services/add_caso_service.php" method="POST"> 
            <div class="form-group mt-3">
                <label for="">IDCaso</label>
                <input type="" name="IDCaso" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for="">Fecha</label>
                <input type="date" name="Fecha" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for="" name="">Cliente</label>
                <!-- <input type="" class="form-control" id="exampleFormControlInput1" placeholder=""> -->

                <select class="form-select" name="IDCliente" aria-label="Default select example">
                    <option selected>Seleccione el cliente</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                   



                </select>
            </div>
            <br>

            <div class="form-group">
                <label for="">Tipo de Caso</label>
                <!-- <input type="select" class="form-control" id="exampleFormControlInput1" placeholder=""> -->


                <select class="form-select" name="IDTipoCaso" aria-label="Default select example">
                    <option selected>Seleccione el tipo de caso</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="">Descripcion</label>
                <input type="textarea" name="Descripcion" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>
            <br>
            <div class="form-group">
                <label for="">Abogado</label>
                <!-- <input type="" class="form-control" id="exampleFormControlInput1" placeholder=""> -->

                <select class="form-select" name="IDAbogado" aria-label="Default select example">
                    <option selected>Seleccione el abogado</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>



                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="">Estado</label>
                <!-- <input type="" class="form-control" id="exampleFormControlInput1" placeholder=""> -->

                <select class="form-select" name="IDEstado" aria-label="Default select example">
                    <option selected>Seleccione el estado</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>

            <br>

            <input type="submit" class="btn btn-success btn-block" name="guardar" value="Guardar">
            
    </form>



</div>






























<?php include("../../Includes/footer.php")?>
