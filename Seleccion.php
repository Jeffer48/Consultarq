<?php
    //guardar Inicio
    if(isset($_POST['guardarInicio'])){
        include 'conexión.php';

        $search = "-";
        $replace = "/";
        $IDC = substr($_POST['IngenieriaCostos'], 1);  $IDC = str_replace($search, $replace, $IDC); $IDC = str_replace("\n", "", $IDC);
        $GUA = substr($_POST['GestionUrbana'],1 );     $GUA = str_replace($search, $replace, $GUA); $GUA = str_replace("\n", "", $GUA);
        $SDO = substr($_POST['SupervisionObra'], 1);   $SDO = str_replace($search, $replace, $SDO); $SDO = str_replace("\n", "", $SDO);
        
        $consulta = 'UPDATE inicio SET puntos="'.$IDC.'" WHERE servicio="INGENIERÍA DE COSTOS";'; guardarDatos($consulta);
        $consulta = 'UPDATE inicio SET puntos="'.$GUA.'" WHERE servicio="GESTIÓN URBANA ASISTIDA";'; guardarDatos($consulta);
        $consulta = 'UPDATE inicio SET puntos="'.$SDO.'" WHERE servicio="SUPERVISIÓN DE OBRA";'; guardarDatos($consulta);

        echo "<script type='text/javascript'>alert('Valores actualizados correctamente');</script>";
    }

if(isset($_POST['guardarNServicios'])){
    
        include 'conexión.php';

        $search = "-";
        $replace = "/";
        $IDC = substr($_POST['IngenieriaCostos'], 1);  $IDC = str_replace($search, $replace, $IDC); $IDC = str_replace("\n", "", $IDC);
        $GUA = substr($_POST['GestionUrbana'],1 );     $GUA = str_replace($search, $replace, $GUA); $GUA = str_replace("\n", "", $GUA);
        $SDO = substr($_POST['SupervisionObra'], 1);   $SDO = str_replace($search, $replace, $SDO); $SDO = str_replace("\n", "", $SDO);
        
        $consulta = 'UPDATE nuestrosservicios SET descripción="'.$IDC.'" WHERE servicio="INGENIERÍA DE COSTOS";'; guardarDatos($consulta);
        $consulta = 'UPDATE nuestrosservicios SET descripción="'.$GUA.'" WHERE servicio="GESTIÓN URBANA ASISTIDA";'; guardarDatos($consulta);
        $consulta = 'UPDATE nuestrosservicios SET descripción="'.$SDO.'" WHERE servicio="SUPERVISIÓN DE OBRA";'; guardarDatos($consulta);

        echo "<script type='text/javascript'>alert('Valores actualizados correctamente');</script>";
    }

    if(isset($_POST['guardarFAQs'])){
        
        include 'conexión.php';

    
        $consulta = "SELECT idPreguntas FROM faqs";
                    $datos = solicitarDatos($consulta);

                    $numeracion = array();
                    
                    while($fila = mysqli_fetch_array($datos)){
                        array_push($numeracion, $fila['idPreguntas']);
                    }

        for($i = 0; $i < count($numeracion); $i++){
            echo $pre = $_POST['pregunta'.$numeracion[$i]]; 
            $res = $_POST['respuesta'.$numeracion[$i]];  
            $consulta = 'UPDATE faqs SET Pregunta="'.$pre.'", Respuesta="'.$res.'" WHERE idPreguntas="'.$numeracion[$i].'";'; guardarDatos($consulta);      
        } 
        echo "<script type='text/javascript'>alert('Valores actualizados correctamente');</script>";
    }

    if(isset($_POST['nuevaPregunta'])){
        include 'conexión.php';
        $consulta = "SELECT idPreguntas FROM faqs";

        $datos = solicitarDatos($consulta);

        $numeracion = array();
        
        while($fila = mysqli_fetch_array($datos)){
            array_push($numeracion, $fila['idPreguntas']);
        }

       $consulta = 'INSERT INTO faqs SET Pregunta="", Respuesta="" ;'; guardarDatos($consulta);      
        echo "<script type='text/javascript'>alert('Valores actualizados correctamente');</script>";
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/modificar/seleccion.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <!--<script src="js/Modificar.js" type="module"></script>-->
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
                    <a class="nav-link" href="#">Perfil</a>
                </li>
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

          <button href="Modificar.php" class="btn btn-link" name="Contacto">
                <div class="card" data-carta="contacto">
                   <div class="card-body">
                      <img class="paginas" src="img/PaginasModificar/consultarq-02.png" alt="Contacto">
                      <p>Contacto</p>
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

           <button href="Modificar.php" class="btn btn-link"  name="NExpertos">
               <div class="card" data-carta="Nuestros_expertos">
                  <div class="card-body">
                      <img class="paginas" src="img/PaginasModificar/consultarq-05.png" alt="NuestrosExpertos">
                      <p>Nuestros Expertos</p>
                  </div>
              </div>
           </button>

           <button href="Modificar.php" class="btn btn-link" name="SNosotros" >
               <div class="card" data-carta="SobreNosotros">
                   <div class="card-body">
                      <img class="paginas" src="img/PaginasModificar/consultarq-06.png" alt="SobreNosotros">
                      <p>Sobre Nosotros</p>
                  </div>
             </div>
         </button>
      </form>
  </main>

</body>

</html>