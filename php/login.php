<?php

    session_start();
    include_once './clases.php';
    date_default_timezone_set("America/Bogota");
    include 'conexion.php';
    $usuario = new Usuarios(
        $correo = $_POST['correo'],
        $contraseña = md5($_POST['contraseña']),
    );

      $sql = $user->authenticate();
    //echo $sql;

    $query = mysqli_query($con,$sql) ;

    $resultado = mysqli_fetch_assoc($query);

    if (mysqli_num_rows ($query) > 0) {
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
