<?php include("../../db.php");?>

<?php 

session_start();



if (isset($_POST['login'])){
    $UserName = $_POST['username'];
    $PassWord = $_POST['password'];
     
    $query = "SELECT COUNT(*) as contar FROM abogado WHERE NombreUsuario = '$UserName' and Clave = '$PassWord' ";
    $result = mysqli_query($conn, $query);
    $array = mysqli_fetch_array($result);

    if($array['contar'] > 0){
        header("Location: /FinalWeb/index.php");
        $_SESSION['username'] = $UserName;
    }else {
        echo '<script language="javascript">alert("Datos Incorrectos");window.location.href="/FinalWeb/Pages/login_views/login_view.php"</script>';
    }

    $_SESSION['message'] = 'Estado Guardado';
    $_SESSION['message_type'] = 'Success';
}

?>