<?php include("../../db.php");?>
<?php include("../../Includes/header.php");?>


<?php 

if (isset($_POST['guardar'])){
    $IDAbogado = $_POST['IDCliente'];
    $Cedula = $_POST['Cedula'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Correo = $_POST['Correo'];
    $Telefono = $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];
    $EstadoCivil =$_POST['EstadoCivil'];

     
    $query = "INSERT INTO cliente(Cedula, Nombre, Apellido, Correo, Telefono, Direccion, EstadoCivil ) VALUES ('$Cedula','$Nombre', '$Apellido','$Correo', '$Telefono', '$Direccion', '$EstadoCivil')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Fallo");
    }

    $_SESSION['message'] = 'Estado Guardado';
    $_SESSION['message_type'] = 'Success';


    // header("Location: estado_view.php");
}

?>