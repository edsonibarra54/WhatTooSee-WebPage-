<?php

session_start();

require_once "CAD.php";
$cad = new CAD();

// Variables para almacenar mensajes
$mensajeRegistro = "";
$mensajeInicioSesion = "";

if (isset($_POST['email']) && isset($_POST['password']) && isset($_POST['signin'])) {
    $email = $_POST['email'];
    $pass = $_POST['password'];

    $mensajeRegistro = "";
    $mensajeInicioSesion = "";

    $resultadoInicioSesion = $cad->verificaUsuario($email, $pass);

    if ($resultadoInicioSesion == false) {
        $mensajeInicioSesion = "Error al iniciar sesión verifica tus datos";
        $mensajeRegistro = "";
    } 
    else{
        $_SESSION['user_email'] = $email;
        $_SESSION['user_password'] = $pass;
        $_SESSION['user_id'] = $resultadoInicioSesion[0];
        $_SESSION['user_admin'] = $resultadoInicioSesion[8];

        header("Location:index.php");
        exit();
    }
}

if (isset($_POST['user']) && isset($_POST['email']) && isset($_POST['password']) && isset($_POST['signup'])){
    $nombre = $_POST['user'];
    $correo = $_POST['email'];
    $contrasena = $_POST['password'];

    $mensajeRegistro = "";
    $mensajeInicioSesion = "";

    if ($cad->correoExistente($correo)) {
        $mensajeRegistro = "El correo electrónico ya está en uso";
        $mensajeInicioSesion = "";
    }
    elseif (strlen($nombre) > 15){
        $mensajeRegistro = "El nombre es muy largo";
        $mensajeInicioSesion = "";
    }
    elseif (strlen($correo) > 80){
        $mensajeRegistro = "El correo es incorrecto";
        $mensajeInicioSesion = "";
    }
    elseif (strlen($contrasena) < 8){
        $mensajeRegistro = "La contraseña es muy corta";
        $mensajeInicioSesion = "";
    }
    else{
        $resultadoRegistro = $cad->agregaUsuario($nombre, $correo, $contrasena);

        if ($resultadoRegistro == true) {
            $resultadoInicioSesion = $cad->verificaUsuario($correo, $contrasena);
            $_SESSION['user_email'] = $correo;
            $_SESSION['user_password'] = $contrasena;
            $_SESSION['user_id'] = $resultadoInicioSesion[0];
            $_SESSION['user_admin'] = $resultadoInicioSesion[8];

            header("Location:index.php");
            exit();
        }
    }
}

unset($_POST['user']);
unset($_POST['email']);
unset($_POST['password']);
unset($_POST['signin']);
unset($_POST['signup']);
unset($_POST['change']);
?>

<html>
    <head>
        <link rel="stylesheet" type="text/css" href="../styles/loginStyles/style.css">
        <link rel="stylesheet" type="text/css" href="../styles/loginStyles/styleDesktop.css" media="screen and (min-width: 1024px)">
        <link rel="stylesheet" type="text/css" href="../styles/loginStyles/styleTablet.css" media="screen and (max-width: 1023px) and (min-width: 768px)">
        <link rel="stylesheet" type="text/css" href="../styles/loginStyles/styleMobile.css" media="screen and (max-width: 767px)">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Urbanist">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Bebas Neue">
        <title>What to see</title>
        <link rel="icon" href="../img/favicon.png" type="image/png">
    </head>
    <body>
        <div id="logo" onclick="redireccionar()"></div>
        <div class="subcontainer">
            <div class="container" id="container">
                <div class="form-Container sign-up">
                    <form action="login.php" method="POST" id="signup-form">
                        <h1>Create Account</h1>
                        <input type="text" name="user" placeholder="User (max 15 char.)">
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password (min 8 char.)">
                        <button type="submit" name="signup">Sign Up</button>
                        <div class="message"><?php if($mensajeRegistro) echo $mensajeRegistro; ?></div>
                    </form>
                </div>
                <div class="form-Container sign-in">
                    <form action="login.php" method="POST" id="signin-form">
                        <h1>Sign In</h1>
                        <input type="email" name="email" placeholder="Email">
                        <input type="password" name="password" placeholder="Password">
                        <button type="submit" name="signin">Sign In</button>
                        <div class="message"><?php if($mensajeInicioSesion) echo $mensajeInicioSesion; ?></div>
                    </form>
                </div>
                <div class="toggle-Container">
                    <div class="toggle">
                        <div class="toggle-Panel toggle-Left">
                            <h1>Welcome Back!</h1>
                            <p>Enter your personal details o usel all of site features</p>
                            <button class="hidden" id="login">Sign In</button>
                        </div>
                        <div class="toggle-Panel toggle-Right">
                            <h1>Hello, Friend!</h1>
                            <p>Register with your personal details o usel all of site features</p>
                            <button class="hidden" id="register">Sign Up</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="../js/loginFunctionality.js"></script>
    </body>
</html>