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
            '<textarea name="GestionUrbana" cols="30" rows="10">',
            '<textarea name="IngenieriaCostos" cols="30" rows="10">',
            '<textarea name="SupervisionObra" cols="30" jrpws="10">'
        );

        $textareas = array();
            //Imprimiendo
      for($i = 0; $i < count($servicio); $i++){
            $lista = explode("/",$puntos[$i]);
            $textos = $textarea[$i];
            for($c = 0; $c < count($lista); $c++){
              $textos = $textos.'-'.$lista[$c]."\n";
            }
            $textos = $textos.'</textarea>';
            array_push($textareas,$textos);
        }   
            $nota = '<div>Agregue un guión entre cada punto en los servicios.</div>';
            $variable = '<form action="Seleccion.php" method="POST">'.$nota.'<label>'.$servicio[0].'</label>'.$textareas[0].' '.'<label>'.$servicio[1].'</label>'.$textareas[1].' '.'<label>'.$servicio[2].'</label>'.$textareas[2];
            $variable = $variable.'<div class="center"><input type="submit" name="guardarInicio" value="Guardar" class="btn brand z-depth-0"></div></form>';
            echo $variable;

    }
    if(isset($_POST['Contacto'])){
        echo '<iframe src="contacto.php" frameborder="0"></iframe>';
    }
    if(isset($_POST['FAQs'])){
        echo '<iframe src="FAQs.php" frameborder="0"></iframe>';
                    
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

        

        $textareas = array();
        $variable = '<form action="Seleccion.php" method="post">';
        $boton = '<form action="Seleccion.php" class="botoncito" method="post">';
        $x;
        for($i = 0; $i < count($preguntas); $i++){
            $pregunta = '<input type="text" name="pregunta'.$numeracion[$i].'" value="'.$preguntas[$i].'" >' ;
            $respuesta = '<textarea name="respuesta'.$numeracion[$i].'" cols="30" rows="10">'.$respuestas[$i].'</textarea>';
            $variable = $variable.'<div>'.$pregunta.''.$respuesta.'</div>';
            $x=$i;
        }
        $boton = $boton.'<div class="center"><input type="submit" name="nuevaPregunta" value="nueva" class="btn brand z-depth-0"></div></form>';
        $variable = $variable.'<div class="center"><input type="submit" name="guardarFAQs" value="Guardar" class="btn brand z-depth-0"></div></form>';
        

        if(isset($_POST['nuevaPregunta'])){
            echo "prueba";
           // echo '<iframe src="FAQs.php" frameborder="0"></iframe>';
            $pregunta = '<input type="text" name="pregunta'.$numeracion[$x+1].'" value="'.$preguntas[$x+1].'" >' ;
            $respuesta = '<textarea name="respuesta'.$numeracion[$x+1].'" cols="30" rows="10">'.$respuestas[$x+1].'</textarea>';
            $boton = $boton.'<div>'.$pregunta.''.$respuesta.'</div>';
        }
        //$variable = $variable.'</form>';
        echo $boton;
        echo $variable;
        

    }
    if(isset($_POST['NExpertos'])){
        echo '<iframe src="Nuestros_expertos.php" frameborder="0"></iframe>';
    }
    if(isset($_POST['NServicios'])){
        echo '<iframe src="Nuestros_servicios.php" frameborder="0"></iframe>';
     $consulta = "SELECT servicio, descripción FROM nuestrosservicios";
     $datos = solicitarDatos($consulta);

     $servicio = array();
     $descripción = array();

      while($fila = mysqli_fetch_array($datos)){
            array_push($servicio,$fila["servicio"]);
            array_push($descripción,$fila["descripción"]);
        }
        $textarea = array(
            '<textarea name="GestionUrbana" cols="30" rows="10">',
            '<textarea name="IngenieriaCostos" cols="30" rows="10">',
            '<textarea name="SupervisionObra" cols="30" jrpws="10">'
        );

        $textareas = array();
            //Imprimiendo
        
           for($i = 0; $i < count($servicio); $i++){
            $lista = explode("/",$descripción[$i]);
            $textos = $textarea[$i];
               for($c = 0; $c < count($lista); $c++){
              $textos = $textos.'-'.$lista[$c]."\n";
            }
            $textos = $textos.'</textarea>';
            array_push($textareas,$textos);
        }
            $variable = '<form action="Seleccion.php" method="POST">'.'<label>'.$servicio[0].'</label>'.$textareas[0].' '.'<label>'.$servicio[1].'</label>'.$textareas[1].' '.'<label>'.$servicio[2].'</label>'.$textareas[2];
            $variable = $variable.'<div class="center"><input type="submit" name="guardarNServicios" value="Guardar" class="btn brand z-depth-0"></div></form>';
            echo $variable;
        
    }
    if(isset($_POST['SNosotros'])){
        echo '<iframe src="SobreNosotros.php" frameborder="0"></iframe>';
    }


?>
