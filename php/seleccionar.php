<?php
    include 'conexión.php';

    if(isset($_POST['Inicio'])){
        echo '<iframe src="index.php" frameborder="0"></iframe>';
        $consulta = "SELECT * FROM inicio";
        $datos = solicitarDatos($consulta);

        $servicio = array();
        $puntos = array();

        while($fila = mysqli_fetch_array($datos)){
            array_push($servicio,$fila["servicio"]);
            array_push($puntos,$fila["puntos"]);
        }
        $textarea = array(
            '<textarea name="IngenieriaCostos" cols="30" rows="10">',
            '<textarea name="GestionUrbana" cols="30" rows="10">',
            '<textarea name="SupervisionObra" cols="30" jrpws="10">'
        );

        $textareas = array();
            //Imprimiendo
        for($i = 0; $i < count($servicio); $i++){
            $lista = explode("/",$puntos[$i]);
            $textos = $textarea[$i].''.$servicio[$i]."\n";
            for($c = 0; $c < count($lista); $c++){
              $textos = $textos.'·'.$lista[$c]."\n";
            }
            $textos = $textos.'</textarea>';
            array_push($textareas,$textos);
        }
            $variable = '<form action="Modificar.php" method="post">'.$textareas[0].' '.$textareas[1].' '.$textareas[2].'</form>';
            echo $variable;

    }
    if(isset($_POST['Contacto'])){
        echo '<iframe src="contacto.php" frameborder="0"></iframe>';
    }
    if(isset($_POST['FAQs'])){
        echo '<iframe src="FAQs.php" frameborder="0"></iframe>';
    }
    if(isset($_POST['NExpertos'])){
        echo '<iframe src="Nuestros_expertos.php" frameborder="0"></iframe>';
    }
    if(isset($_POST['NServicios'])){
        echo '<iframe src="Nuestros_servicios.php" frameborder="0"></iframe>';
    }
    if(isset($_POST['SNosotros'])){
        echo '<iframe src="SobreNosotros.php" frameborder="0"></iframe>';
    }


?>