<?php

    include 'conexion.php';
    date_default_timezone_set("America/Bogota");
    include_once './clases.php';
    $usuario = new Usuarios(
        $nombre = $_POST['nombre'],
        $correo = $_POST['correo'],
        $contraseña = md5($_POST['contraseña']),
        $residencia = $_POST['residencia'],
    );

    $sql = "INSERT INTO usuarios(nombre, correo, contraseña, residencia) VALUES ('$nombre','$correo','$contraseña','$residencia')";

    echo $sql;

    $query = mysqli_query($con,$sql) ;

    if ($query > 0) {
        echo"<script>
        window.location = '../index.php';
        </script>";
    }else{
        echo"<script>
        window.location = './login.php';
        </script>";
    }

?>