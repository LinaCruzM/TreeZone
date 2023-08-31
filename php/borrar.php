
<?php
    date_default_timezone_set("America/Bogota");
    include './clases.php';

    $ubicación = new Ubicación(
        0,
        0,
        0,
        $_POST['id']
    );

    $ubicación->Eliminar_LugarFrecuente();
           echo"<script>
            window.location = '../index.php';
            </script>";

?>