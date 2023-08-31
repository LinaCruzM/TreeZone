
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio de sesión</title>
  <link rel="shortcut icon" href="img/icono.png" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="./styles/styles.css">
</head>
<body>
<header>
    <div class="logo">
      <img src="img/Logo.png" alt="Logo">
    </div>
  </header>
  <main>
  <section class="d-flex">
      <div class="w-50 registro">
        <h1>Inicio de sesión</h1>
        <br><br>
        <form action="./php/login.php" method="post" class="">
        <div>
        <label><i class="fa-solid fa-user"></i>Correo electrónico</label><br>
        <input class="" type="email" placeholder="Correo electrónico" autofocus autocomplete="on" required name="correo">   
        </div><br>
        <div class="form2">
        <label><i class="fa-solid fa-lock"></i>Contraseña</label><br>
        <input class="" maxlength="15"
          oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" id="Contra"
          type="password" placeholder="Contraseña" name="contraseña" required>
        <img onclick="VerC()" src="./img/ver.png">
          </div><br>
        <a class="link" href="./registro.php">¿No tienes una cuenta? Registrate aquí</a><br><br>
        <button type="submit" class="button1">Ingresar</button>
      </form>
      </div>
      <div class="imagen w-50">
      <img src="./img/img.jpg" alt="">
      </div>
    </section>
  </main>
  <script src="https://kit.fontawesome.com/0bf8ac12b9.js" crossorigin="anonymous"></script> <!--Linki de conexión íconos-->
  <script src="./scripts/main.js"></script>
</body>
</html>