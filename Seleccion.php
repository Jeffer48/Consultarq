<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <?php include 'php/styleSeleccion.php'; ?>
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
                    <a class="nav-link" href="#">Salir</a>
                </li>
          </ul>
         </div>
      </nav>
  </header>

  <main>
       <form id="cartas" action="Modificar.php" method="POST">
           <button href="Modificar.php" class="btn btn-link" name="Inicio">
                <div class="card" data-carta="index">
                   <div class="card-body">
                       <img class="paginas" src="img/PaginasModificar/consultarq-01.png" alt="Inicio">
                       <p>Inicio</p>
                  </div>
               </div>
          </button>

           <button href="Modificar.php" class="btn btn-link" name="FAQs">
               <div class="card" data-carta="FAQs">
                   <div class="card-body">
                       <img class="paginas" src="img/PaginasModificar/consultarq-03.png" alt="FAQ's">
                      <p>Preguntas Frecuentes</p>
                   </div>
               </div>
           </button>

           <button href="Modificar.php" class="btn btn-link" name="NServicios">
               <div class="card" data-carta="Nuestros_servicios">
                   <div class="card-body">
                      <img class="paginas" src="img/PaginasModificar/consultarq-04.png" alt="NuestrosServicios">
                     <p>Nuestros Servicios</p>
                   </div>
               </div>
           </button>

      </form>

      <?php
        include 'conexión.php';

        $vInicio = mysqli_fetch_array(solicitarDatos("SELECT contador FROM visitas WHERE pagina = 'inicio';"));
        $vContacto = mysqli_fetch_array(solicitarDatos("SELECT contador FROM visitas WHERE pagina = 'contacto';"));
        $vFaqs = mysqli_fetch_array(solicitarDatos("SELECT contador FROM visitas WHERE pagina = 'faqs';"));
        $vNuestrosServicios = mysqli_fetch_array(solicitarDatos("SELECT contador FROM visitas WHERE pagina = 'nuestrosServicios';"));
        $vNuestrosExpertos = mysqli_fetch_array(solicitarDatos("SELECT contador FROM visitas WHERE pagina = 'nuestrosExpertos';"));
        $vSobreNosotros = mysqli_fetch_array(solicitarDatos("SELECT contador FROM visitas WHERE pagina = 'sobreNosotros';"));

        echo '<div>
        <ul class="Visitas">
            <li>
                <ul>
                    <li>Inicio</li>
                    <li>'.$vInicio[0].'</li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>FAQs</li>
                    <li>'.$vFaqs[0].'</li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>Contacto</li>
                    <li>'.$vContacto[0].'</li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>Nuestros Servicios</li>
                    <li>'.$vNuestrosServicios[0].'</li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>Nuestros Expertos</li>
                    <li>'.$vNuestrosExpertos[0].'</li>
                </ul>
            </li>
            <li>
                <ul>
                    <li>Sobre Nosotros</li>
                    <li>'.$vSobreNosotros[0].'</li>
                </ul>
            </li>
        </ul>
      </div>';
      ?>
  </main>

</body>

</html>