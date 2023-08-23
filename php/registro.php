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

    $CContraseña= md5($_POST['CContraseña']);


    if ($CContrarseña == $Contraseña) {
        $sql = "INSERT INTO usuarios(nombre, correo, contraseña, residencia) VALUES ('$nombre','$correo','$contraseña','$residencia')";

        echo $sql;

        $query = mysqli_query($con,$sql) ;

    if ($query > 0) {
        echo"<script>
        window.location = '../index.php';
        </script>";
    }else{
        echo'<script>
        window.alert("Error en registro");
        window.location = "../registro.php";
        </script>';
    }
    } else {
        echo'<script>
        window.alert("Las contraseñas no coinciden");
        window.location = "../registro.php";
        </script>';
    }

?>