<?php include("../../db.php");?>
<?php include("../../Includes/header.php");?>
<link rel="stylesheet" href="/FinalWeb/Css/table.css">

<div class="container p-2">
    <h2>LISTADO DE CLIENTES</h2>
</div>


    <div class="container" style="width: 2500px;">

         <div class="card">

                <div class="card-header">
                    <a href="add_cliente_view.php" class="btn btn-primary" role="button" aria-pressed="true">
                        Agregar Cliente
                    </a>
                </div>

                <div class="card-body">
                    <table id="example" class="table table-striped table-bordered row-border order-column">
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

                        while($row = mysqli_fetch_array($result_cliente)){ ?>

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
                                    <a href="add_cliente_view.php?IDCliente=<?php echo $row['IDCliente']?>" class="btn btn-warning p-1">
                                        <i class="fa fa-edit fa-3x" aria-hidden="true"></i>
                                    </a>

                                </td>


                            </tr>


                        <?php } ?>

                    </tbody>

                    </table>
                </div>
        </div>

    </div>



<?php include("../../Includes/footer.php")?>

