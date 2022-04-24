<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form Login | KimberlyDL</title>
        <link rel="stylesheet" href="../../Css/login.css">
    </head>

    <body>
        <div class="Login-box">
            <img class="icono" src="../../Img/Usuario.png" alt="Logo de Usario">
            <!-- <div>Iconos diseñados por <a href="https://www.flaticon.es/autores/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.es/" title="Flaticon">www.flaticon.es</a></div> -->
            <h1>Login Here</h1>
            <form action="/FinalWeb/Services/login_services/login_service.php" method="POST">
                <!--USERNAME-->  
                <label for="username">Username</label>
                <input type="text" name="username" placeholder="Enter Username">

                <!--PASSWORD-->  
                <label for="password">Password</label>
                <input type="password" name="password" placeholder="Enter Password">

                <input type="submit" name="login" value="Log In">

                <a href="#">Did you forget your password?</a><br>
                <a href="#">Don't have an account?</a>

            </form>
        </div>

    </body>
   
</html>

