<?php include("../../db.php")?>
<?php include("../../Includes/header.php");?>

<div class="container p-2">
    <h2>LISTADO DE REPORTES</h2>
</div>
<br>

<div class="container"> 


    <div class="col-md-8">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>IDCaso</th>
                <th>Fecha</th>
                <th>IDCliente</th>
                <th>IDTipoCaso</th>
                <th>Descripcion</th>
                <th>IDAbogado</th>
                <th>IDEstado</th>


            </tr>
        </thead>
        <tbody>
            <?php 
            $query = "SELECT * FROM caso";
            $result_estado = mysqli_query($conn, $query);

            while($row = mysqli_fetch_array($result_estado)){ ?>

                <tr>
                    <td><?php echo $row['IDCaso']?></td>
                    <td><?php echo $row['Fecha']?></td>
                    <td><?php echo $row['IDCliente']?></td>
                    <td><?php echo $row['IDTipoCaso']?></td>
                    <td><?php echo $row['Descripcion']?></td>
                    <td><?php echo $row['IDAbogado']?></td>
                    <td><?php echo $row['IDEstado']?></td>


                </tr>


            <?php } ?>

        </tbody>




    </table>


    </div>

</div>
<?php include("../../Includes/footer.php")?>


