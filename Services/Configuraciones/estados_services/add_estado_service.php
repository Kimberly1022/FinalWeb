<?php include("../../../db.php");?>


<?php 

if (isset($_POST['guardar'])){
    $IDEstado = $_POST['IDEstado'];
    $Nombre = $_POST['Nombre'];
     
    $query = "INSERT INTO estado(Nombre, Descripcion) VALUES ('$Nombre')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Fallo");
    }

    $_SESSION['message'] = 'Estado Guardado';
    $_SESSION['message_type'] = 'Success';


    header("Location: /FinalWeb/pages/Configuraciones/estados_views/estados_view.php");
}

?>

