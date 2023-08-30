
<?php
    session_start();
    date_default_timezone_set("America/Bogota");
    include './clases.php';
    $_SESSION['idE2'] = $_POST['id'];

    $ubicación = new Ubicación(
        0,
        0,
        0,
    );

    echo $ubicación->Eliminar_LugarFrecuente();
           /*echo"<script>
            window.location = '../index.php';
            </script>";*/

?>