<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuestros expertos</title>
    <link rel="shortcut icon" href="img/logo-consultarq.png">
    <link rel="stylesheet" href="css/Normalize.css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/styleNuestrosExpertos.css" type="text/css">
</head>

<body>
    <?php include 'header.php' ?>
    
    <script>
        (function (){
            let dir = document.getElementById("nuestrosExpertos");

            dir.className = "nav-item active";
        })();
    </script>

    <main>
        <h1 id="Titulo">NUESTROS EXPERTOS</h1>

        <?php
           include 'conexión.php';
            $consulta = "SELECT * FROM nuestrosexpertos";
            $datos = solicitarDatos($consulta);

            $titulo = array();
            $texto = array();

            while($fila = mysqli_fetch_array($datos)){
                array_push($titulo,$fila["titulo"]);
                array_push($texto,$fila["texto"]);
            }
            $textoreparado = array();
            //Imprimiendo
            for($i = 0; $i < count($titulo); $i++){
                $lista = explode("/",$texto[$i]); 
                $guardarcambios = "";

                for($c = 0; $c < count($lista); $c++){
                    $guardarcambios = $guardarcambios.''.$lista[$c];
                }
                $textoreparado[$i] = $guardarcambios;

            }
            echo
           '<section id="IngenieroCivil" >
                <h3>'.$titulo[0].'</h3>
                <p >'.$textoreparado[0].'</p>
            </section>

            <section id="IngenieriaEstructural" >
                <h3>'.$titulo[1].'</h3>
                <p>'.$textoreparado[1].'</p>
            </section>

            <section id="Arquitecto" >
                <h3>'.$titulo[2].'</h3>
                <p>'.$textoreparado[2].'</p>
            </section>';
        ?>

        <!--<section id="IngenieroCivil" >
            <h3>INGENIERO/A CIVIL</h3>
            <p >
            Totam, rerum eius esse sunt molestias a. Sapiente facere, ut at repellat commodi reprehenderit labore tempora et vel ex natus eos odit sunt nulla dolore doloribus nostrum ullam consequatur illum!
            </p>
        </section>

        <section id="IngenieriaEstructural" >
            <h3>INGENIERO/A ESTRUCTURAL</h3>
            <p>
                Totam, rerum eius esse sunt molestias a. Sapiente facere, ut at repellat commodi reprehenderit labore tempora et vel ex natus eos odit sunt nulla dolore doloribus nostrum ullam consequatur illum!
            </p>
        </section>

        <section id="Arquitecto" >
            <h3>ARQUITECTO/A</h3>
            <p>
                Totam, rerum eius esse sunt molestias a. Sapiente facere, ut at repellat commodi reprehenderit labore tempora et vel ex natus eos odit sunt nulla dolore doloribus nostrum ullam consequatur illum!
            </p>
        </section>-->

    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>

<?php
    include 'conexión.php';
    include 'php/contadorMes.php';

    function contador(){
        $queryObtener = "SELECT contador FROM visitas WHERE pagina = 'nuestrosExpertos';";
        $respuesta = solicitarDatos($queryObtener);
        $vistas = mysqli_fetch_array($respuesta);
        $contador = $vistas[0] + 1;

        $queryGuardar = "UPDATE visitas SET contador = '$contador' WHERE pagina = 'nuestrosExpertos';";
        guardarDatos($queryGuardar);
        contadorNExpertos();
    }
    contador();
?>