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
    <link rel="stylesheet" href="Css/estilos.css">

</head>
<body>

    <div class="area">
        <nav class="main-menu">
            <ul>
                <li>
                    <a href="index.php">
                        <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                        <span class="nav-text">
                            Inicio
                        </span>
                    </a>
                  
                </li>
                <li class="has-subnav">
                    <a href="pages/casos_views/caso_view.php">
                        <i class="fa fa-folder-open fa-2x"></i>
                        <span class="nav-text">
                            Gestión de casos
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="pages/clientes_views/cliente_view.php">
                       <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                        <span class="nav-text">
                            Gestión de clientes
                        </span>
                    </a>
                    
                </li>
                <li class="has-subnav">
                    <a href="pages/reportes_views/reportes_view.php">
                        <i class="fa fa-file-text-o fa-2x" aria-hidden="true"></i>
                        <span class="nav-text">
                            Reportes
                        </span>
                    </a>
                   
                </li>
                <li>
                    <a href="#">
                        <i class="fa fa-cog fa-2x" aria-hidden="true"></i>
                        <span class="nav-text">
                            Configuración
                        </span>
                    </a>
                </li>

                <li>
                    <a href="pages/Configuraciones/abogados_views/abogado_view.php">
                        <i class="fa fa-cog fa-2x" aria-hidden="true"></i>
                        <span class="nav-text">
                            Abogados
                        </span>
                    </a>
                </li>

                <li>
                    <a href="pages/Configuraciones/tipos_casos_views/tipos_casos_view.php">
                        <i class="fa fa-cog fa-2x" aria-hidden="true"></i>
                        <span class="nav-text">
                            Tipos de Casos
                        </span>
                    </a>
                </li>

                <li>
                    <a href="pages/Configuraciones/estados_views/estados_view.php">
                        <i class="fa fa-cog fa-2x" aria-hidden="true"></i>
                        <span class="nav-text">
                            Estados
                        </span>
                    </a>
                </li>
               
            </ul>

            <ul class="logout">
                <li>
                   <a href="pages/salir.html">
                         <i class="fa fa-power-off fa-2x"></i>
                        <span class="nav-text">
                            Salir
                        </span>
                    </a>
                </li>  
            </ul>
        </nav>
    </div>

<!-- <nav class="navbar navbar-dark bg-dark">
    <div class="container">
        <a href="" class="navbar-brand">SISTEMA DE ABOGADOS</a>

    </div>

</nav> -->

