<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nuestros Servicios</title>
    <!-- Modificar responsividad-->

    <link rel="shortcut icon" href="img/logo-consultarq.png">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/styleNS.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
</head>

<body>
    <?php include 'header.php' ?>

    <main>
        <section class="OurServicesSection">
            <h1 class="OurServicesTitle">NUESTROS SERVICIOS</h1>
            <ul class="OurServices">
                <?php
                    include 'conexión.php';

                    $consulta = "SELECT * FROM nuestrosservicios";
                    $datos = solicitarDatos($consulta);
                    
                    $servicios = array();
                    $textos = array();
                    $imagenes = array();

                    while($fila = mysqli_fetch_array($datos)){
                        array_push($servicios,$fila['servicio']);
                        array_push($textos,$fila['descripción']);
                        array_push($imagenes,$fila['imagen']);
                    }
                    
                    for($i = 0; $i < count($servicios); $i++){
                        $estructura = '<li class="NServicio">
                                <img class="NSImg" src="data:image/png;base64,' .  base64_encode($imagenes[$i])  . '" alt="'.$servicios[$i].'">
                                <h4>'.$servicios[$i].'</h4>'.$textos[$i].'
                            </li>';

                        echo $estructura;
                    }
                ?>
            </ul>
        </section>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>