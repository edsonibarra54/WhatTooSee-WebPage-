<?php

require_once "CAD.php";

if (isset($_POST['nombre']) && isset($_POST['correo']) && isset($_POST['contrasena'])){
    // echo $_POST['nombre']."-".$_POST['correo']."-".$_POST['contrasena'];
    #Enviar a la BD
    $con = new conexion();
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $cad = new CAD();
    $cad->agregaUsuario($nombre,$correo,$contrasena);
}

unset($_POST['nombre']);
unset($_POST['correo']);
unset($_POST['contrasena']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="registro.php" method="POST">
        <span>Escribe tu nombre:</span>
        <input type="text" name="nombre">
        <br>
        <span>Escribe tu correo:</span>
        <input type="text" name="correo">
        <br>
        <span>Escribe tu contrasena:</span>
        <input type="text" name="contrasena">
        <br>
        <input type="submit" value="registrate">
    </form>
    
</body>
</html>