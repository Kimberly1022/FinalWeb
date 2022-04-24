<?php include("../../db.php")?>
<?php include("../../Includes/header.php");?>

<div class="container p-2">
    <h2>LISTADO DE CASOS</h2>
</div>
<br>

<div class="container"> 
    <a href="add_caso_view.php" class="btn btn-primary" role="button" aria-pressed="true">
        Agregar Caso
    </a>


    <div class="col-md-8">
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>IDCaso</th>
                <th>Fecha</th>
                <th>Cliente</th>
                <th>Tipo_Caso</th>
                <th>Descripcion</th>
                <th>Abogado</th>
                <th>Estado</th>
                <th>----</th>


            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT  c.IDCaso as IDCaso, c.Fecha as Fecha, c.Descripcion as Descripcion, CONCAT( a.Nombre, ' ', a.Apellido) as Abogado, CONCAT( cl.Nombre, ' ', cl.Apellido) AS Cliente, tc.Nombre AS Tipocaso, e.Nombre AS Estado FROM caso c INNER JOIN abogado a ON c.IDAbogado = a.IDAbogado INNER JOIN cliente cl ON c.IDCliente = cl.IDCliente INNER JOIN tipocaso tc ON c.IDTipoCaso = tc.IDTipoCaso INNER JOIN estado e ON c.IDEstado = e.IDEstado";
            $result_caso = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result_caso)){ ?>
.
                <tr>
                    <td><?php echo $row['IDCaso']?></td>
                    <td><?php echo $row['Fecha']?></td>
                    <td><?php echo $row['Cliente']?></td>
                    <td><?php echo $row['Tipocaso']?></td>
                    <td><?php echo $row['Descripcion']?></td>
                    <td><?php echo $row['Abogado']?></td>
                    <td><?php echo $row['Estado']?></td>
                    <td>
                        <a href="add_caso_view.php?IDCaso=<?php echo $row['IDCaso']?>" class="btn btn-warning p-1">
                            <i class="fa fa-edit fa-2x" aria-hidden="true"></i>
                        </a>

                    </td>



                </tr>


            <?php } ?>

        </tbody>




    </table>


    </div>

</div>

<div class="container b-1">

<?php include("../../Includes/footer.php")?>

