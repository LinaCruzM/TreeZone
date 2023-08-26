<?php
    session_start();
    include 'cone.php';
    date_default_timezone_set("America/Bogota");
    include_once './clases.php';
    $id = $_POST['id'];
    $ubicación = new Ubicación(
        $nombre = $_POST['nombre'],
        $usua_id = $_SESSION['id'],
        $sector = $_POST['sector'],
    );

    $sql = "UPDATE ubicación SET frecuente = '$nombre', sect_id = '$sector' WHERE id = '$id'";    

    echo $sql;

    $query = mysqli_query($con,$sql) ;

    if ($query > 0) {
            echo"<script>
            window.location = '../index.php';
            </script>";
    }

?>