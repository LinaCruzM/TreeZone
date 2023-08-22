<?php
    session_start();
    include 'conexion.php';
    date_default_timezone_set("America/Bogota");
    include_once './clases.php';
    $ubicación = new Ubicación(
        $nombre = $_POST['nombre'],
        $sector = $_POST['sector'],
    );

    $id = $_SESSION['id'];

    $sql = "INSERT INTO ubicación(frecuente,usua_id,sect_id) VALUES ('$nombre','$id','$sector')";

    echo $sql;

    $consulta = mysqli_query($con,$sql) ;

    if ($consulta > 0) {
        echo"<script>
        window.location = '../index.php';
        </script>";
    }else{
        echo "Error al insertar";
    }

?>