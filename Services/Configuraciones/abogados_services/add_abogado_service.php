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
    
    if ($IDAbogado == 0) {
        $query = "INSERT INTO abogado(Cedula, Nombre, Apellido, Correo, NombreUsuario, Clave) VALUES ('$Cedula','$Nombre', '$Apellido','$Correo', '$NombreUsuario', '$Clave')";
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            die("Fallo");
        }
    
        
    }else {
        $query = "UPDATE abogado SET Cedula = '$Cedula', Nombre = '$Nombre', Apellido = '$Apellido', Correo = '$Correo', NombreUsuario = '$NombreUsuario', Clave = '$Clave' WHERE IDAbogado = $IDAbogado";
        $result = mysqli_query($conn, $query);
    
        if(!$result){
            die("Fallo");
        }
    }
    


    header("Location: /FinalWeb/pages/Configuraciones/abogados_views/abogado_view.php");
}

?>