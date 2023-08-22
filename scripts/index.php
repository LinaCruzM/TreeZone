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

    $resultado = mysqli_fetch_assoc($consulta);

    $id = $resultado['id'];

    if (mysqli_num_rows ($consulta) > 0)  {
    }else{
      echo"<script>
      window.location = './login.php';
      </script>";
    }

    $_SESSION['id'] = $id;
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link rel="icon" href="./img/">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<body>
  <header>
    <div class="">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $resultado['nombre'] ?>
          </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="./php/logout.php">Cerrar sesión</a></li>
        </ul>
        </div>
    </div>
  </header>
  <main>

    <section class="">
      <h3>Crea un lugar frecuente</h3>

      <form action="./php/LFrecuente.php" method="post" class="">        
        <label><i class="fa-solid fa-user"></i>Nombre</label><br>
        <input type="text" placeholder="Nombre" autofocus autocomplete="on" required name="nombre">
        <label><i class="fa-solid fa-user"></i>Sector</label><br>
        <select class="form-control" autocomplete="on" required name="sector">
            <option value="">Seleccione una opción</option>
            <?php

            $sql = "SELECT * FROM sector";
            $consulta = mysqli_query($con ,$sql );

            if (mysqli_num_rows ($consulta) > 0)  {
            while ($resultado = mysqli_fetch_assoc($consulta)){
            ?>
              <option value="<?php echo $resultado['id']?>"><?php echo $resultado['nombre']?></option>
              <?php
            }}
        ?>
            </select>
        <button type="submit" class="button1">Enviar</button>
      </form>

      <h3>Lugares Frecuentes:</h3>    
      
      <?php
        $sql = "SELECT * FROM ubicación WHERE usua_id = ('$id')";
        $consulta= mysqli_query($con ,$sql );
        $sql2 = "SELECT * FROM sector";
        $consulta2 = mysqli_query($con ,$sql2 );
        $resultado2 = mysqli_fetch_assoc($consulta2);


        if (mysqli_num_rows ($consulta) > 0)  {
        while ($resultado = mysqli_fetch_assoc($consulta)){

      ?>
      <div class="card text-start">
        <div class="card-body">
          <h4 class="card-title"><?php echo $resultado['frecuente'] ?></h4>
          <p class="card-text"><?php if ($resultado['sect_id'] == $resultado2['id']){
            echo $resultado2['nombre'];
          } ?></p>
        </div>
      </div>
      <?php

      }}else{
        echo '<p class="">No tienes Lugares Frecuentes Registrados</p>';
      }
  ?>

    </section>
  </main>
  <br><br>
  <!--footer-->
  <footer>
  </footer>
  <script src="https://kit.fontawesome.com/0bf8ac12b9.js" crossorigin="anonymous"></script> <!--Link de conexión íconos-->
</body>
</html>