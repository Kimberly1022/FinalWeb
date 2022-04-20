<?php include("../../db.php");?>


<?php 

if (isset($_POST['guardar'])){
    $IDCaso = $_POST['IDCaso'];
    $Fecha = $_POST['Fecha'];
    $IDCliente = $_POST['IDCliente'];
    $IDTipoCaso = $_POST['IDTipoCaso'];
    $Descripcion = $_POST['Descripcion'];
    $IDAbogado = $_POST['IDAbogado'];
    $IDEstado = $_POST['IDEstado'];
     
    $query = "INSERT INTO caso(Fecha, IDCliente,IDTipoCaso, Descripcion, IDAbogado, IDEstado) VALUES ('$Fecha', '$IDCliente', '$IDTipoCaso', '$Descripcion', '$IDAbogado', '$IDEstado')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Fallo");
    }

    $_SESSION['message'] = 'Estado Guardado';
    $_SESSION['message_type'] = 'Success';


    header("Location: /FinalWeb/pages/Configuraciones/estados_views/estados_view.php");
}

?>