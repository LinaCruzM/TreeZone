<?php
    session_start();
    include 'conexion.php';
    date_default_timezone_set("America/Bogota");
    include_once './clases.php';
    $id = $_SESSION['id'];
    $ubicación = new Ubicación(
        $_POST['nombre'],
        $id,
        $_POST['sector'],
    );

    $ubicación->guardar();
    echo"<script>
    window.location = '../index.php';
    </script>";

    /*if ($consulta > 0) {
        echo"<script>
        window.location = '../index.php';
        </script>";
    }else{
        echo "Error al insertar";
    }*/

?>