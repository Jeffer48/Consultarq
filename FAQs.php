<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,">
    <title>FAQ´s</title>

    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/styleFAQ.css" type="text/css">
    <script src="js/script.js" defer type="text/javascript"></script>
    <link rel="shortcut icon" href="img/logo-consultarq.png" />

</head>

<body>
    <?php include 'header.php' ?>

    <main>
        <section class="Preguntas">
            <h1 class="titulo">PREGUNTAS FRECUENTES</h1>

            <!--AQUI EMPIEZAN LAS PREGUNTAS-->
            <div class="preguntasCaja">
                <?php
                    include 'conexión.php';
                    
                    $consulta = "SELECT * FROM faqs";
                    $datos = solicitarDatos($consulta);

                    $preguntas = array();
                    $respuestas = array();
                    $numeracion = array();

                    while($fila = mysqli_fetch_array($datos)){
                        array_push($preguntas, $fila['Pregunta']);
                        array_push($respuestas, $fila['Respuesta']);
                        array_push($numeracion, $fila['idPreguntas']);
                    }

                    for($i = 0; $i < count($preguntas); $i++){
                        $estructura = '<div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header" id="heading'.$numeracion[$i].'">
                                                <h2 class="mb-0">
                                                    <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                                                        data-target="#collapse'.$numeracion[$i].'" aria-expanded="true" aria-controls="collapse'.$numeracion[$i].'">
                                                        '.$preguntas[$i].'
                                                    </button>
                                                </h2>
                                            </div>

                                            <div id="collapse'.$numeracion[$i].'" class="collapse show" aria-labelledby="heading'.$numeracion[$i].'"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    '.$respuestas[$i].'
                                                </div>
                                            </div>
                                        </div>
                                    </div>';

                        echo $estructura;
                    }
                ?>
            </div>
        </section>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

</body>

</html>

<?php
    include 'php/contadorMes.php';
    function contador(){
        $queryObtener = "SELECT contador FROM visitas WHERE pagina = 'faqs';";
        $respuesta = solicitarDatos($queryObtener);
        $vistas = mysqli_fetch_array($respuesta);
        $contador = $vistas[0] + 1;

        $queryGuardar = "UPDATE visitas SET contador = '$contador' WHERE pagina = 'faqs';";
        guardarDatos($queryGuardar);
        contadorFaqs();
    }
     contador();
?>