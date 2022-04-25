<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title>
        <link rel="stylesheet" href="../../Css/login.css">
    </head>

    <body>
        <div class="Login-box">
            <img class="icono" src="../../Img/Usuario.png" alt="Logo de Usario">
            <!-- <div>Iconos diseñados por <a href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div> -->
            <h1>Iniciar Sesión</h1>
            <form action="/FinalWeb/Services/login_services/login_service.php" method="POST">
                <!--USERNAME-->  
                <label for="username">Usuario</label>
                <input type="text" name="username" placeholder="Ingrese su usuario">

                <!--PASSWORD-->  
                <label for="password">Clave</label>
                <input type="password" name="password" placeholder="Ingrese su clave">

                <input type="submit" name="login" value="Iniciar sesion">


            </form>
        </div>

    </body>
   
</html>

