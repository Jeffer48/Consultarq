<?php
  include 'conexión.php';
  include 'php/update.php';
  include 'php/insert.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Modificacion</title>
    <?php include 'php/style.php'  ?>
</head>

<body>
<header>
      <nav class="navbar navbar-light bg-light">
         <div class="container">
              <a class="navbar-brand" href="#">
                  <img id="logotipo" src="img/logo-consultarq1.png" alt="logo" width="30" height="24">
              </a>
              <ul class="nav justify-content-end">
                  <li class="nav-item">
                      <a class="nav-link" href="Seleccion.php">Salir</a>
                  </li>
              </ul>
         </div>
      </nav>
  </header>
    <main>
      <?php
          include 'php/seleccionar.php';
          if(isset($_POST['nuevaPregunta'])){
              FAQs();
            $popup = '
            <div class="overlay">
                <div class = "popup">
                    <form id="popupform" action="Modificar.php" method="post">
                        <h3>Crear pregunta nueva</h3>
                        <h4>Ingrese la informacion de la pregunta</h4>
                        <label>Pregunta:</label>
                        <input type="text" name="preguntas">
                        <label>Respuesta:</label>
                        <textarea name="respuestas" cols="30" rows="10"></textarea>
                        <div class="contenedor-inputs">
                            <input type="submit" class="btn-submit" name="Crear" value="Crear">
                            <input type="submit" class="btn-submit" name="Salir" value="Salir">
                        </div>
                    </form>
                </div>
            </div>
            ';
            echo $popup;
          }
          if(isset($_POST['Salir']) || isset($_POST['Borrar']) || isset($_POST['guardarFAQs'])
          || isset($_POST['Crear'])){
            FAQs();
          }

       ?>
   </main>
</body>

</html>