<?php

    session_start();
    include_once './clases.php';
    date_default_timezone_set("America/Bogota");
    include 'conexion.php';
    $usuario = new Usuarios(
        $correo = $_POST['correo'],
        $contraseña = md5($_POST['contraseña']),
    );

    $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña'";

    echo $sql;

    $query = mysqli_query($con,$sql) ;

    $resultado = mysqli_fetch_assoc($query);

    if (mysqli_num_rows ($query) > 0) {
        echo"<script>
        window.location = '../index.php';
        </script>";
    }

    $_SESSION['correo'] = $correo;
    $_SESSION['contraseña'] = $contraseña;
?>