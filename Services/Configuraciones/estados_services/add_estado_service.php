<?php include("../../../db.php");?>


<?php 

if (isset($_POST['guardar'])){
    $IDEstado = $_POST['IDEstado'];
    $Nombre = $_POST['Nombre'];
 
    
    if ($IDEstado == 0) {
        $query = "INSERT INTO estado(Nombre) VALUES ('$Nombre')";
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            die("Fallo");
        }
    
        // $_SESSION['message'] = 'Estado Guardado';
        // $_SESSION['message_type'] = 'Success';
        
    }else {
        $query = "UPDATE estado SET Nombre = '$Nombre' WHERE IDEstado = $IDEstado";
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            die("Fallo");
        }
    }
    


    header("Location: /FinalWeb/pages/Configuraciones/estados_views/estados_view.php");
}

?>
