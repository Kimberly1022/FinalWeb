<?php include("../../../db.php");?>
<?php include("../../../Includes/header.php");?>
<link rel="stylesheet" href="/FinalWeb/Css/table.css">

<div class="container p-2">
    <h2>LISTADO DE ABOGADOS</h2>
</div>



    <div class="container" style="width: 1500px;">

        <div class="card">

            <div class="card-header"> 
                <a href="add_abogado_view.php" class="btn btn-primary" role="button" aria-pressed="true">
                    Agregar Abogado
                </a>
            </div>


            <div class="card-body">
            <table id="example" class="table table-striped table-bordered row-border order-column">
                <thead>
                    <tr>
                        <th>IDAbogado</th>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <th>NombreUsuario</th>
                        <th>Clave</th>
                        <th>----</th>


                    </tr>
                </thead>
                <tbody>
                    <?php 
                    $query = "SELECT * FROM abogado";
                    $result_abogado = mysqli_query($conn, $query);

                    while($row = mysqli_fetch_array($result_abogado)){ ?>

                        <tr>
                            <td><?php echo $row['IDAbogado']?></td>
                            <td><?php echo $row['Cedula']?></td>
                            <td><?php echo $row['Nombre']?></td>
                            <td><?php echo $row['Apellido']?></td>
                            <td><?php echo $row['Correo']?></td>
                            <td><?php echo $row['NombreUsuario']?></td>
                            <td><?php echo $row['Clave']?></td>
                            <td>
                                <a href="add_abogado_view.php?IDAbogado=<?php echo $row['IDAbogado']?>" class="btn btn-warning p-1">
                                    <i class="fa fa-edit fa-2x" aria-hidden="true"></i>
                                </a>

                            </td>


                        </tr>


                    <?php } ?>

                </tbody>




            </table>


            </div>

        </div>
    </div>

</div>


<?php include("../../../Includes/footer.php")?>

