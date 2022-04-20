<?php include("../../../db.php");?>
<?php include("../../../Includes/header.php");?>

<div class="container p-2">
    <h2>LISTADO DE ABOGADOS</h2>
</div>

<div class="container"> 


    <div class="col-md-8">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>IDAbogado</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>NombreUsuario</th>
                <th>Clave</th>
                <th>ReiniciarClave</th>
                <th>EsAdmin</th>
                <th>----</th>


            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM abogado";
            $result_estado = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result_estado)){ ?>

                <tr>
                    <td><?php echo $row['IDAbogado']?></td>
                    <td><?php echo $row['Cedula']?></td>
                    <td><?php echo $row['Nombre']?></td>
                    <td><?php echo $row['Apellido']?></td>
                    <td><?php echo $row['Correo']?></td>
                    <td><?php echo $row['NombreUsuario']?></td>
                    <td><?php echo $row['Clave']?></td>
                    <td><?php echo $row['ReiniciarClave']?></td>
                    <td><?php echo $row['EsAdmin']?></td>
                    <td>
                        <a href="edit_abogado_view.php?IDAbogado=<?php echo $row['IDAbogado']?>">
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
    <a href="add_abogado_view.php" class="btn btn-primary" role="button" aria-pressed="true">Agregar Abogado</a>

</div>

<?php include("../../../Includes/footer.php")?>

