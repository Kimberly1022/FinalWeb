<?php include("../../../db.php");?>


<?php 

if (isset($_POST['guardar'])){
    $IDAbogado = $_POST['IDAbogado'];
    $Cedula = $_POST['Cedula'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Correo = $_POST['Correo'];
    $NombreUsuario = $_POST['NombreUsuario'];
    $Clave = $_POST['Clave'];
    
     
    $query = "INSERT INTO abogado(Cedula, Nombre, Apellido, Correo, NombreUsuario, Clave) VALUES ('$Cedula','$Nombre', '$Apellido','$Correo', '$NombreUsuario', '$Clave')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Fallo");
    }

    $_SESSION['message'] = 'Estado Guardado';
    $_SESSION['message_type'] = 'Success';


    header("Location: /FinalWeb/pages/Configuraciones/abogados_views/abogado_view.php");
}

?>