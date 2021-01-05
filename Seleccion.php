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
  </main>

</body>

</html>