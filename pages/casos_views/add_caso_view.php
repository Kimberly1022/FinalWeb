<?php include("../../Includes/header.php");?>


<div class="container">
    <form>
            <div class="form-group mt-3">
                <label for="">IDCaso</label>
                <input type="" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>

            <div class="form-group">
                <label for="">Fecha</label>
                <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>

            <div class="form-group">
                <label for="">IDCliente</label>
                <!-- <input type="" class="form-control" id="exampleFormControlInput1" placeholder=""> -->

                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccione el cliente</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>

            <div class="form-group">
                <label for="">IDTipoCaso</label>
                <!-- <input type="select" class="form-control" id="exampleFormControlInput1" placeholder=""> -->


                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccione el tipo de caso</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>

            <div class="form-group">
                <label for="">Descripcion</label>
                <input type="" class="form-control" id="exampleFormControlInput1" placeholder="">
            </div>

            <div class="form-group">
                <label for="">IDAbogado</label>
                <!-- <input type="" class="form-control" id="exampleFormControlInput1" placeholder=""> -->

                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccione el abogado</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>

            <div class="form-group">
                <label for="">IDEstado</label>
                <!-- <input type="" class="form-control" id="exampleFormControlInput1" placeholder=""> -->

                <select class="form-select" aria-label="Default select example">
                    <option selected>Seleccione el estado</option>
                    <option value=""></option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Guardar</button>
            
    </form>



</div>






























<?php include("../../Includes/footer.php")?>
