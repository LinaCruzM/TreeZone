<?php
    session_start();
    date_default_timezone_set("America/Bogota");
    include './clases.php';
    $id = $_SESSION['id'];
    $ubicación = new Ubicación(
        $nombre = $_POST['nombre'],
        $id,
        $sector = $_POST['sector'],
        0
    );

    $sql = "INSERT INTO ubicación(frecuente,usua_id,sect_id) VALUES ('$nombre','$id','$sector')";

    $ubicación->guardar();
    echo $sql;
    echo"<script>
    window.location = '../index.php';
    </script>";


?>