<?php include("../../../db.php");?>


<?php 

if (isset($_POST['guardar'])){
    $IDTipoCaso = $_POST['IDTipoCaso'];
    $Nombre = $_POST['Nombre'];
     
    
    if ($IDTipoCaso == 0) {
        $query = "INSERT INTO tipocaso(Nombre, Descripcion) VALUES ('$Nombre', '$Descripcion')";
        $result = mysqli_query($conn, $query);

            if(!$result){
                die("Fallo");
            }
    }else {
        $query = "UPDATE tipocaso SET Nombre = '$Nombre' WHERE IDTipoCaso = $IDTipoCaso";
        $result = mysqli_query($conn, $query);
        
        if(!$result){
            die("Fallo");
        }
    }

    


    header("Location: /FinalWeb/pages/Configuraciones/tipos_casos_views/tipos_casos_view.php");
}

?>
