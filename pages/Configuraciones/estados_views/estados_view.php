<?php include("../../../db.php");?>
<?php include("../../../Includes/header.php");?>

<div class="container p-2">
    <h2>LISTADO DE ESTADOS</h2>
</div>

<div class="container"> 
    <a href="add_estado_view.php" class="btn btn-primary" role="button" aria-pressed="true">
        Agregar Estado
    </a>


    <div class="col-md-8">
        <table class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>IDEstado</th>
                    <th>Nombre</th>
                    <th>----</th>


                </tr>
            </thead>
            <tbody>
                <?php 
                $query = "SELECT * FROM estado";
                $result_estado = mysqli_query($conn, $query);

                while($row = mysqli_fetch_array($result_estado)){ ?>

                    <tr>
                        <td><?php echo $row['IDEstado']?></td>
                        <td><?php echo $row['Nombre']?></td>
                        <td>
                            <a href="add_estado_view.php?IDEstado=<?php echo $row['IDEstado']?>" class="btn btn-warning p-1">
                                <i class="fa fa-edit fa-2x" aria-hidden="true"></i>
                            </a>

                        </td>




                    </tr>


                <?php } ?>

            </tbody>




        </table>


    </div>

</div>


<?php include("../../../Includes/footer.php")?>

