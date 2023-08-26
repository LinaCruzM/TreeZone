<?php

    session_start();

    include './cone.php';

    date_default_timezone_set("America/Bogota");

    $id = $_POST['id'];

    $sql = "DELETE FROM ubicación WHERE id = $id";

    echo $sql;

    $query = mysqli_query($con,$sql) ;

    if ($query > 0) {
        echo"<script>
        window.location = '../index.php';
        </script>";
    }

?>