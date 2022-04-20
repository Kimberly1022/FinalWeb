<?php include("../../../db.php");?>
<?php include("../../../Includes/header.php");?>


<?php 

if (isset($_POST['guardar'])){
    $IDEstado = $_POST['IDEstado'];
    $Nombre = $_POST['Nombre'];
    $Descripcion = $_POST['Descripcion'];
     
    $query = "INSERT INTO estado(Nombre, Descripcion) VALUES ('$Nombre', '$Descripcion')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Fallo");
    }

    $_SESSION['message'] = 'Estado Guardado';
    $_SESSION['message_type'] = 'Success';


    header("Location: estado_view.php");
}

?>

