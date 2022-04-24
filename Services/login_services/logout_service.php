<?php 
    session_start();

    session_destroy();

    header("Location: /FinalWeb/Pages/login_views/login_view.php");
    exit();
?>