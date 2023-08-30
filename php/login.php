<?php

    session_start();
    include './clases.php';
    date_default_timezone_set("America/Bogota");
    $usuario = new Usuarios(
        0,
        $correo = $_POST['correo'],
        $contraseña = md5($_POST['contraseña']),
        0
    );

    $consulta = $usuario->iniciar();

        echo "<script>
        window.location = '../index.php';
        </script>";

    $_SESSION['correo'] = $correo;
    $_SESSION['contraseña'] = $contraseña;
?>
