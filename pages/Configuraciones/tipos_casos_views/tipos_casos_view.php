<?php include("../../../db.php");?>
<?php include("../../../Includes/header.php");?>

<div class="container p-2">
    <h2>LISTADO DE TIPOS DE CASOS</h2>
</div>

<div class="container"> 


    <div class="col-md-8">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>IDEstado</th>
                <th>Nombre</th>
                <th>Descripcion</th>
                <th>----</th>


            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM tipocaso";
            $result_estado = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result_estado)){ ?>

                <tr>
                    <td><?php echo $row['IDTipoCaso']?></td>
                    <td><?php echo $row['Nombre']?></td>
                    <td><?php echo $row['Descripcion']?></td>
                    <td>
                        <a href="edit_tipo_caso_view.php?IDTipoCaso=<?php echo $row['IDTipoCaso']?>">
                            Editar
                        </a>

                    </td>


                </tr>


            <?php } ?>

        </tbody>




    </table>


    </div>

</div>

<div class="container b-1">
    <a href="add_tipo_caso_view.php" class="btn btn-primary" role="button" aria-pressed="true">Agregar Tipo de Caso</a>

</div>

<?php include("../../../Includes/footer.php")?>

