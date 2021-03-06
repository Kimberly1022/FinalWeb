<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEMA_ABOGADOS</title>
    <!-- Bootstap -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/FinalWeb/Css/estilos.css">
    <!-- Iconos -->
    

</head>

<?php 
    session_start(); 
    $username = $_SESSION['username'];
    
    if (!isset($username)) {
        header("Location: /FinalWeb/Pages/login_views/login_view.php");
    }
?>


<body>

    <div class="area">
        <nav class="main-menu">

            <center>
                <img  src="/FinalWeb/Img/avatar.png" alt="Avatar" class="avatar">
            </center>
            
            <div style="overflow-x: hidden;" class="m-3">
                <p style="color: white; margin-left: 50px;" class=""><?php echo $username?> | Abogado</p>
                <!-- <p style="color: white; margin-left: 70px;" class="">Abogado</p>     -->
            </div>

            <ul>
                <li>
                    <a href="/FinalWeb/index.php">
                        <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                        <span class="nav-text">
                            Inicio
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="/FinalWeb/pages/casos_views/caso_view.php">
                        <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Gestión de casos
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="/FinalWeb/pages/clientes_views/cliente_view.php">
                       <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                        <span class="nav-text">
                            Gestión de clientes
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="/FinalWeb/pages/reportes_views/reportes_view.php">
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i>
                        <span class="nav-text">
                            Reportes
                        </span>
                    </a>
                   
                </li>

                <li class="has-subnav">
                    <a href="#" class="dropdown-btn">
                        <i class="fa fa-cog fa-2x" aria-hidden="true"></i>
                        <span class="nav-text">
                            Configuración
                        </span>
                    </a>
                    <div class="dropdown-container">
                        <a class="has-subnav" href="/FinalWeb/pages/Configuraciones/abogados_views/abogado_view.php">
                            <i class="fa fa-cog fa-2x" aria-hidden="true"></i>
                            <span class="nav-text">
                                Abogados
                            </span>
                        </a>
                        <a href="/FinalWeb/pages/Configuraciones/tipos_casos_views/tipos_casos_view.php">
                            <i class="fa fa-cog fa-2x" aria-hidden="true"></i>
                            <span class="nav-text">
                               Tipos de Casos
                            </span>
                        </a>
                        <a href="/FinalWeb/pages/Configuraciones/estados_views/estados_view.php">
                            <i class="fa fa-cog fa-2x" aria-hidden="true"></i>
                            <span class="nav-text">
                                Estados
                            </span>
                        </a>
                    </div>
                </li>
               
            </ul>

            <ul class="logout">
                <li>
                   <a href="/FinalWeb/Services/login_services/logout_service.php">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Salir
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
    </div>

    <script src="/FinalWeb/Js/menu.js"></script>