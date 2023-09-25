<?php
    require './php/clases.php';
/*require './php/clases/usuarios.php';
require './php/clases/ubicación.php';
require './php/clases/sector.php';*/

    session_start();

    date_default_timezone_set("America/Bogota");

    $consulta = Usuarios::iniciar();

    foreach ($consulta as $item):

    $item['id'];

    endforeach;

    $_SESSION['id'] = $item['id'];
?>


<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Página principal</title>
  <link rel="shortcut icon" href="img/icono.png" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <link rel="stylesheet" href="./styles/styles.css">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
</head>
<body>
<header class="d-flex">
    <div class="logo2">
      <img src="img/Logo.png" alt="Logo">
    </div>
    <div class="">
        <div class="dropdown">
          <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          <?php echo $item['nombre'] ?>
          </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
          <li><a class="dropdown-item" href="./php/logout.php">Cerrar sesión</a></li>
        </ul>
        </div>
    </div>
  </header>

  <main>
  <div class="text-center rounded border-3 p-3">
            <h2>Gráfico Arboles</h2>
            <canvas id="myChart" width="400" height="100"></canvas> 
        </div>
        <div class="text-center rounded border-3 p-3">
            <h2>Gráfico Aire</h2>
            <canvas id="myChart2" width="400" height="100"></canvas> 
        </div>
    <section class="lugar">
      <h1>Crea un lugar frecuente: </h1>
      <form action="./php/LFrecuente.php" method="post" class="">
        <div class="d-flex crear">
          <div class="form1">
            <label><i class="fa-solid fa-user"></i>Nombre</label><br>
            <input type="text" placeholder="Nombre" autofocus autocomplete="on" required name="nombre">
          </div>
          <div>       
            <label><i class="fa-solid fa-user"></i>Sector</label><br>
            <select class="form-control" autocomplete="on" required name="sector">
                <option value="">Seleccione una opción</option>
                <?php

                $consulta = Sector::mostrar();

                foreach ($consulta as $item):

                echo '<option value="'.$item['id'].'">'.$item['nombre'].'</option>';

                endforeach;

                ?>
              </select>
          </div> 
        </div>
        <button type="submit" class="btn-primary">Enviar</button>
      </form>
    </section>
    <section class="lugar2">
      <h1>Lugares Frecuentes:</h1>
      <div class="d-flex w-100">
      <?php
      $ubicación = new Ubicación(
      0,
      0,
      0,
      $_SESSION['id']
      );

      $consulta = Ubicación::mostrar();

      foreach ($consulta as $item):
        ?>

        <form action="./editar.php" method="post">
        <div class="card text-start lugar-frec">
          <div class="card-body">
          <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
            <h3 class="card-title"><?php echo $item['frecuente'] ?></h3>
            <?php 
            $_SESSION['sect_id'] = $item['sect_id'];
            $consulta = Ubicación::mostrar2();
            foreach ($consulta as $item2):
            echo "<p>Sector: " . $item2['nombre'] . "</p>";
            endforeach;
              ?></p>
              <p class="card-text">
            <input type="submit" button class="btn-primary boton" value="Editar">
            </form>
            <form action="./php/borrar.php" method="post">
          <input type="hidden" name="id" value="<?php echo $item['id'] ?>">
          <input type="submit" button class="btn-secondary boton" value="Eliminar">
          </form>
                </div>
                </div>
<?php
      endforeach;
  ?>
      </div>   
    

    </section>
  </main>
  <br><br>
  <!--footer-->
  <footer>
  </footer>
  <script src="https://kit.fontawesome.com/0bf8ac12b9.js" crossorigin="anonymous"></script> <!--Link de conexión íconos-->
  <script>
    const ctx = document.getElementById('myChart');

new Chart(ctx, {
  type: 'bar',
  data: {
    labels: [<?php
    $consulta2 = Sector::mostrar();
    $arboles= new Arboles(
      0,
      0,
      $item['id']
      );
    $consulta = Arboles::GenerarGráfico();
    foreach ($consulta2 as $item):
            echo "'".$item['nombre']."',";
            endforeach; ?>],
    datasets: [{
      label: 'Arboles por localida',
      data: [<?php
          foreach ($consulta as $item):
            echo $item['cantidad'].",";
            endforeach;
            ?>],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
const ctx2 = document.getElementById('myChart2');

new Chart(ctx2, {
  type: 'bar',
  data: {
    labels: [<?php
    $consulta3 = Sector::mostrar();
    $aire= new Calidad_de_Aire(
      0,
      0,
      $item['id']
      );
    $consulta = Calidad_de_Aire::GenerarGráfico();
    foreach ($consulta3 as $item):
            echo "'".$item['nombre']."',";
            endforeach; ?>],
    datasets: [{
      label: 'Nivel de contaminación de aire',
      data: [<?php
          foreach ($consulta as $item):
            echo $item['nivel'].",";
            endforeach;
            ?>],
      borderWidth: 1
    }]
  },
  options: {
    scales: {
      y: {
        beginAtZero: true
      }
    }
  }
});
</script>
</body>
</html>