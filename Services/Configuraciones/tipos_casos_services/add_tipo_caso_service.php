<?php include("../../../db.php");?>
<?php include("../../../Includes/header.php");?>


<?php 

if (isset($_POST['guardar'])){
    $IDTipoCaso = $_POST['IDTipoCaso'];
    $Nombre = $_POST['Nombre'];
    $Descripcion = $_POST['Descripcion'];
     
    $query = "INSERT INTO tipocaso(Nombre, Descripcion) VALUES ('$Nombre', '$Descripcion')";
    $result = mysqli_query($conn, $query);

    if(!$result){
        die("Fallo");
    }

    $_SESSION['message'] = 'Estado Guardado';
    $_SESSION['message_type'] = 'Success';


    // header("Location: estado_view.php");
}

?>
