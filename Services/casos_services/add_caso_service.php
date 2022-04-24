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

    if ($IDCaso == 0) {
        
        $query = "INSERT INTO caso(Fecha, IDCliente,IDTipoCaso, Descripcion, IDAbogado, IDEstado) VALUES ('$Fecha', '$IDCliente', '$IDTipoCaso', '$Descripcion', '$IDAbogado', '$IDEstado')";
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            die("Fallo");
        }
    }else {
        $query = "UPDATE caso SET Fecha = '$Fecha', IDCliente = $IDCliente, IDTipoCaso = $IDTipoCaso, Descripcion = '$Descripcion', IDAbogado = $IDAbogado, IDEstado = $IDEstado WHERE IDCaso = $IDCaso";
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            die("Fallo");
        }
    }


    header("Location: /FinalWeb/pages/casos_views/caso_view.php");
}

?>