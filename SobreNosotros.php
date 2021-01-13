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
    
    <script>
        (function (){
            let dir = document.getElementById("sobreNosotros");

            dir.className = "nav-item active";
        })();
    </script>

    <main>
        <!--Titulo de Sobre Nosotros<div id="SobreNosotros"></div>-->
        <h1 id="Titulo">SOBRE NOSOTROS</h1>

        <?php
           include 'conexión.php';
            $consulta = "SELECT * FROM sobrenosotros";
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
                    if($c == 0 || $c == count($lista)-1)
                     $guardarcambios = $guardarcambios.''.$lista[$c];
                    else
                     $guardarcambios = $guardarcambios.''.$lista[$c].'<br>';
                }
                $textoreparado[$i] = $guardarcambios;

            }
            echo
            '<div id="capa1">
            <div id="TituloMision">
                <h4 >'.$titulo[0].'</h4>
                <p>'.$textoreparado[0].'</p>
            </div>
            <div id="TituloValores">
                <h4 >'.$titulo[1].'</h4>
                <p>'.$textoreparado[1].'</p>
            </div>
            <div id="TituloVision">
                <h4 >'.$titulo[2].'</h4>
                <p>'.$textoreparado[2].'</p>
            </div>
            </div>';
        ?>
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