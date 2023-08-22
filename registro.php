<?php

    session_start();

    ini_set('display_errors', 0);

    date_default_timezone_set("America/Bogota");
    include './php/conexion.php';
    $correo = $_SESSION['correo'];
    $contraseña = $_SESSION['contraseña'];  

    $sql = "SELECT * FROM usuarios WHERE correo = '$correo' AND contraseña = '$contraseña'";

    //echo $sql;

    $consulta = mysqli_query($con,$sql) ;

      if (mysqli_num_rows ($consulta) > 0)  {
        echo"<script>
        window.location = './index.php';
        </script>";
      }
?>



<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Registro</title>
  <link rel="icon" href="./img/">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./styles/styless.css">
</head>
<body>
  <header>
    <div class="header1">
      <!--encabezado redes sociales-->
      <div class="divHeader">
        <a onclick=""><i class="fa-brands fa-whatsapp"></i></a>
        <a onclick=""><i class="fa-brands fa-instagram"></i></a>
        <a onclick=""><i class="fa-brands fa-facebook-f"></i></a>
        <a onclick=""><i class="fa-brands fa-twitter"></i></a>
      </div>
    </div>
    <!--Encabezado-->
    <div class="">
      <div>
        <img src="./img/" alt="Logo">
      </div>
    </div>
  </header>
  <main>
    <!--Formulario inicio sesión-->
    <section class="">
      <h3>Iniciar sesión</h3>
      <br><br>
      <form id="" action="./php/registro.php" method="post" class="">
        <label><i class="fa-solid fa-user"></i>Correo electrónico</label><br>
        <input class="" type="email" placeholder="Correo electrónico" autofocus autocomplete="on" required name="correo">  
        <label><i class="fa-solid fa-user"></i>Nombre</label><br>
        <input class="" type="text" placeholder="Nombre" autocomplete="on" required name="nombre">  
        <label><i class="fa-solid fa-lock"></i>Contraseña</label><br>
        <div class="">
          <input class="" maxlength="15"
            oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="Contra"
            type="password" placeholder="Contraseña" name="contraseña" required>
          <img onclick="VerC()" src="./img/visible.png">
        </div>         
        <label><i class="fa-solid fa-lock"></i>Confirmar contraseña</label><br>
        <div class="">
          <input class="" maxlength="15"
            oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="Contra"
            type="password" placeholder="Contraseña" name="password2" required>
          <img onclick="VerC()" src="./img/visible.png">
        </div>
        <label><i class="fa-solid fa-user"></i>Residencia</label><br>
        <input class="" type="text" placeholder="Recidencia" required name="residencia">  
        <a class="link" href="./login.php">Inicia sesión</a><br><br>
        <button type="submit" class="button1">Registrarme</button>
      </form>
    </section>
  </main>
  <br><br>
  <!--footer-->
  <footer>
  </footer>
  <script src="https://kit.fontawesome.com/0bf8ac12b9.js" crossorigin="anonymous"></script> <!--Linki de conexión íconos-->
  <script src="./scripts/main.js"></script>
</body>
</html>