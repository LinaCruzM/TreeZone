<?php
    session_start();
    date_default_timezone_set("America/Bogota");
    include './clases.php';
    $_SESSION['idE'] = $_POST['id'];

    $ubicación = new Ubicación(
        $_SESSION['nombre'] = $_POST['nombre'],
        $_SESSION['usua_id'] = $_SESSION['id'],
        $_SESSION['sector'] = $_POST['sector'],
    );
    $ubicación->Editar_LugarFrecuente();
            echo"<script>
            window.location = '../index.php';
            </script>";

?>