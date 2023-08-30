<?php

    date_default_timezone_set("America/Bogota");
    include './clases.php';
    $usuario = new Usuarios(
        $_POST['nombre'],
        $_POST['correo'],
        $contraseña = md5($_POST['contraseña']),
        $_POST['residencia'],
    );

    $CContraseña= md5($_POST['CContraseña']);


    if ($CContraseña == $contraseña) {
        $usuario->guardar();

        echo'<script>
        window.location = "../login.php";
        </script>';

    }else {
        echo'<script>
        window.alert("Las contraseñas no coinciden");
        window.location = "../registro.php";
        </script>';
    }

?>