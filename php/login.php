<?php

    session_start();
    include_once './clases.php';
    date_default_timezone_set("America/Bogota");
    $usuario = new Usuarios(
        0,
        $correo = $_POST['correo'],
        $contraseña = md5($_POST['contraseña']),
        0
    );

    $consulta = $usuario->iniciar();

    if ($consulta->rowCount() > 0) {
        echo"<script>
        window.location = '../index.php';
        </script>";
    }else{
        echo'<script>
        window.alert("Error en inicio de sesión");
        window.location = "../login.php";
        </script>';
    }

    $_SESSION['correo'] = $correo;
    $_SESSION['contraseña'] = $contraseña;
?>
