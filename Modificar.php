<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link rel="stylesheet" href="css/modificar/ventana.css">
    <script src="js/Seleccionar.js" type="module"></script>-->
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Modificacion</title>
    <?php include 'php/style.php'  ?>
</head>

<body>
<header id="banner">
      <nav class="navbar navbar-light bg-light">
         <div class="container">
             <a class="navbar-brand" href="#">
                  <img id="logotipo" src="img/logo-consultarq1.png" alt="logo" width="30" height="24">
              </a>
              <ul class="nav justify-content-end">
                <li class="nav-item">
                    <a class="nav-link" href="#">Guardar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Salir</a>
                </li>
          </ul>
         </div>
      </nav>
  </header>
    <!--<div id="root">
    </div>-->
    <main>
      <?php
          include 'php/seleccionar.php';
       ?>
   </main>
</body>

</html>