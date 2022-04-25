<?php include("../../db.php");?>


<?php 

if (isset($_POST['guardar'])){
    $IDCliente = $_POST['IDCliente'];
    $Cedula = $_POST['Cedula'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Correo = $_POST['Correo'];
    $Telefono = $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];
    $EstadoCivil =$_POST['EstadoCivil'];

    
    if ($IDCliente == 0) {
        $query = "INSERT INTO cliente(Cedula, Nombre, Apellido, Correo, Telefono, Direccion, EstadoCivil ) VALUES ('$Cedula','$Nombre', '$Apellido','$Correo', '$Telefono', '$Direccion', '$EstadoCivil')";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Fallo");
        }

    }else {
        $query = "UPDATE cliente SET Cedula = '$Cedula', Nombre = '$Nombre', Apellido = '$Apellido', Correo = '$Correo', Telefono = '$Telefono', Direccion = '$Direccion', EstadoCivil = '$EstadoCivil' WHERE IDCliente = $IDCliente";
        $result = mysqli_query($conn, $query);

        if(!$result){
            die("Fallo");
        }
    }



    header("Location: /FinalWeb/pages/clientes_views/cliente_view.php");


}

?>