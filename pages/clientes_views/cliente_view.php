<?php include("../../db.php");?>
<?php include("../../Includes/header.php");?>

<div class="container p-2">
    <h2>LISTADO DE CLIENTES</h2>
</div>
<br>

<div class="container"> 


    <div class="col-md-8">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>IDCliente</th>
                <th>Cedula</th>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Direccion</th>
                <th>EstadoCivil</th>
                <th>----</th>


            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM cliente";
            $result_cliente = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result_estado)){ ?>

                <tr>
                    <td><?php echo $row['IDCliente']?></td>
                    <td><?php echo $row['Cedula']?></td>
                    <td><?php echo $row['Nombre']?></td>
                    <td><?php echo $row['Apellido']?></td>
                    <td><?php echo $row['Correo']?></td>
                    <td><?php echo $row['Telefono']?></td>
                    <td><?php echo $row['Direccion']?></td>
                    <td><?php echo $row['EstadoCivil']?></td>
                    <td>
                        <a href="edit_cliente_view.php?IDCliente=<?php echo $row['IDCliente']?>">
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
    <a href="add_cliente_view.php" class="btn btn-primary" role="button" aria-pressed="true">Agregar Cliente</a>

</div>
<?php include("../../Includes/footer.php")?>

