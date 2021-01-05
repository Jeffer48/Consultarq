<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Consultarq</title>

    <link rel="stylesheet" href="css/styleIndex.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="shortcut icon" href="img/logo-consultarq.png" />
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
    <?php include 'header.php' ?>
    
    <main>
        <section class="ServiceSection">
            <ul class="Services">
                <?php
                    include 'conexión.php';
                    
                    $consulta = "SELECT * FROM inicio";
                    $datos = solicitarDatos($consulta);

                    $servicio = array();
                    $puntos = array();

                    while($fila = mysqli_fetch_array($datos)){
                        array_push($servicio,$fila["servicio"]);
                        array_push($puntos,$fila["puntos"]);
                    }

                    //Imprimiendo
                    for($i = 0; $i < count($servicio); $i++){
                        $lista = explode("/",$puntos[$i]);
                        $textos = "";

                        for($c = 0; $c < count($lista); $c++){
                            $textos = $textos.'<li>'.$lista[$c].'</li>';
                        }

                        echo '<li class="ServiciosRes">'.'<h2>'.$servicio[$i].'</h2>'.'<ul>'.$textos.'</ul>'.'<a class="verMas" href="Nuestros_servicios.html">ver más</a>'.'</li>';
                    }

                    //cerrarSesion($conn);
                ?>
            </ul>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>

<?php
    function contador(){
        $queryObtener = "SELECT contador FROM visitas WHERE pagina = 'inicio';";
        $respuesta = solicitarDatos($queryObtener);
        $vistas = mysqli_fetch_array($respuesta);
        $contador = $vistas[0] + 1;

        $queryGuardar = "UPDATE visitas SET contador = '$contador' WHERE pagina = 'inicio';";
        guardarDatos($queryGuardar);
        
        return $contador;
    }

    $visitante = contador();
    echo "Eres el visitante: ".$visitante;
?>