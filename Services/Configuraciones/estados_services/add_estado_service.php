<?php include("../../../db.php");?>
<?php include("../../../Includes/header.php");?>


<?php 

if (isset($_POST['guardar'])){
    $ID = $_POST['IDEstado'];
    $Nombre = $_POST['Nombre'];
    $Descripcion = $_POST['Descripcion'];
     
    $query = "INSERT INTO estado(Nombre, Descripcion) VALUES ('$Nombre', '$Descripcion')";
    mysqli_query($conn, $query);
    if(!$result){
        die("Fallo");
    }
    echo 'Guardado';

}

?>

