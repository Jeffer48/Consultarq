<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/logo-consultarq.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/styleSobreNosotros.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/Normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@700&display=swap" rel="stylesheet">
    <title>Sobre Nosotros</title>
</head>

<body>
    <?php include 'header.php' ?>

    <main>
        <!--Titulo de Sobre Nosotros<div id="SobreNosotros"></div>-->
        <h1 id="Titulo">SOBRE NOSOTROS</h1>


        <!--Capa donde se guardan todos los textos-->
        <div id="capa1">

            <h4 id="TituloMision">MISION</h4>
            <p>
                Colaborar de forma proactiva en el desarrollo de procesos para administración, control y gestión de proyectos de edificación, en el ámbito público y privado, para satisfacer las necesidades de nuestros clientes antes, durante y después de finalizado el
                proyecto, aportando un servicio que proporcione valor y utilidad.
            </p>

            <h4 id="TituloValores">VALORES</h4>
            <p>
                Transparencia: En un entorno social donde cada vez es menos frecuente, la transparencia hacia nuestro equipo y hacia nuestros clientes es fundamental para generar la confianza en las relaciones humanas y poder trabajar en conjunto para toma de decisiones.
                <br>Honestidad: La obligación de hacer las cosas bien desde la honradez y el respeto a la ética profesional, aportando al cliente un servicio de calidad que proporcione valor y utilidad. <br>Excelencia: capacidad de captar y satisfacer
                las expectativas del cliente, mediante accesibilidad y atención personalizada para el logro de las metas propuestas. <br> Innovación: basada en la generación, desarrollo de ideas y soluciones, que faciliten la consecución de elementos
                diferenciales competitivos.
            </p>

            <h4 id="TituloVision">VISION</h4>
            <p>
                Ser una empresa líder y lograr que nuestros clientes optimicen tiempo y costo, con sus proyectos en nuestras manos.
            </p>
        </div>
        <!--imagen de fondo del mapa del mundo-->
        <figure id="capa2">
            <img id="mapa" src="img/SobreNostros/mapa-SN.png" alt="">
        </figure>
        <!--Imagen de fondo del diagrama de con el logo-->
        <figure id="capa3">
            <img id="diagrama" src="img/SobreNostros/Diagrama-SN.png" alt="">
        </figure>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>

<?php
    include 'conexión.php';
    include 'php/contadorMes.php';

    function contador(){
        $queryObtener = "SELECT contador FROM visitas WHERE pagina = 'sobreNosotros';";
        $respuesta = solicitarDatos($queryObtener);
        $vistas = mysqli_fetch_array($respuesta);
        $contador = $vistas[0] + 1;

        $queryGuardar = "UPDATE visitas SET contador = '$contador' WHERE pagina = 'sobreNosotros';";
        guardarDatos($queryGuardar);
        contadorSNosotros();
    }
    contador();
?>