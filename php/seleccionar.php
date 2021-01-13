<?php
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
        $variable = 
        '<form action="Modificar.php" method="POST">'.
           $nota.
           '<label>'.$servicio[0].'</label>'.
           $textareas[0].' '.
           '<label>'.$servicio[1].'</label>'.
           $textareas[1].' '.
           '<label>'.$servicio[2].'</label>'.
           $textareas[2].
          '<input type="submit" name="guardarInicio" value="Guardar" class="btn brand z-depth-0">
        </form>';
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
        $variable = '<form id="modificacion" action="Modificar.php" method="post">
        <div class="menu">
            <button href="Modificar.php" class="btn-abrir-popup" name="nuevaPregunta" >Crear</button>
            <button href="Modificar.php" class="btn-abrir-popup" name="Borrar" >Borrar</button>
            <button href="Modificar.php" class="btn-abrir-popup" name="guardarFAQs" >Guardar</button>
        </div>
        <div class="datos">';


        for($i = 0; $i < count($preguntas); $i++){
            $pregunta = '<input type="text" name="pregunta'.$numeracion[$i].'" value="'.$preguntas[$i].'" >' ;
            $respuesta = '<textarea name="respuesta'.$numeracion[$i].'" cols="30" rows="10">'.$respuestas[$i].'</textarea>';
            $variable = $variable.'<div>'.$pregunta.''.$respuesta.'</div>';
        }
        //$variable = $variable.'<div class="center"><input type="submit" name="guardarFAQs" value="Guardar" class="btn brand z-depth-0"></div></form>';
        //$boton = '<div class="center"><input type="button" name="nuevaPregunta" value="nueva" class="btn brand z-depth-0"></div></form>';
        $variable = $variable.'</div></form>';
        //echo $boton;
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
        $variable = 
      '<form action="Modificar.php" method="POST">
          <label>'.$servicio[0].'</label>'
          .$textareas[0].' '.
          '<label>'.
          $servicio[1].
          '</label>'.
          $textareas[1].' '.
          '<label>'.
          $servicio[2].
          '</label>'.
          $textareas[2].
          '<div class="center">
             <input type="submit" name="guardarNServicios" value="Guardar" class="btn brand z-depth-0">
          </div>
       </form>';
        echo $variable;
    }
    if(isset($_POST['SNosotros'])){
        echo '<iframe src="SobreNosotros.php" frameborder="0"></iframe>';
        $consulta = "SELECT titulo, texto FROM sobrenosotros";
        $datos = solicitarDatos($consulta);

        $titulo = array();
        $texto = array();

        while($fila = mysqli_fetch_array($datos)){
            array_push($titulo,$fila["titulo"]);
            array_push($texto,$fila["texto"]);
        }

        $textarea = array(
            '<textarea name="Mision" cols="30" rows="10">',
            '<textarea name="Valores" cols="30" rows="10">',
            '<textarea name="Vision" cols="30" jrpws="10">'
           );
        $textareas = array();
        //Imprimiendo
        for($i = 0; $i < count($titulo); $i++){
            $lista = explode("/",$texto[$i]); 
            $textos = $textarea[$i];

            for($c = 0; $c < count($lista); $c++){
                $textos = $textos.'-'.$lista[$c]."\n";
            }
            $textos = $textos.'</textarea>';
            array_push($textareas,$textos);
        }

           $variable = 
         '<form action="Modificar.php" method="POST">
             <label>'.$titulo[0].'</label>'
             .$textareas[0].
             '<label>'.$titulo[1].'</label>'
             .$textareas[1].
             '<label>'.$titulo[2].'</label>'
             .$textareas[2].
             '<div class="center">
                <input type="submit" name="guardarSNosotros" value="Guardar" class="btn brand z-depth-0">
             </div>
          </form>';
           echo $variable;
    }

    function FAQs(){
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
        $variable = '<form id="modificacion" action="Modificar.php" method="post">
        <div class="menu">
            <button href="Modificar.php" class="btn-abrir-popup" name="nuevaPregunta" >Crear</button>
            <button href="Modificar.php" class="btn-abrir-popup" name="Borrar" >Borrar</button>
            <button href="Modificar.php" class="btn-abrir-popup" name="guardarFAQs" >Guardar</button>
        </div>
        <div class="datos">
        ';
        for($i = 0; $i < count($preguntas); $i++){
            $pregunta = '<input type="text" name="pregunta'.$numeracion[$i].'" value="'.$preguntas[$i].'" >' ;
            $respuesta = '<textarea name="respuesta'.$numeracion[$i].'" cols="30" rows="10">'.$respuestas[$i].'</textarea>';
            $variable = $variable.'<div>'.$pregunta.''.$respuesta.'</div>';
        }
        $variable = $variable.'</div></form>';
        echo $variable;

    }

    function Inicio(){
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
        $variable = 
        '<form action="Modificar.php" method="POST">'.
           $nota.
           '<label>'.$servicio[0].'</label>'.
           $textareas[0].' '.
           '<label>'.$servicio[1].'</label>'.
           $textareas[1].' '.
           '<label>'.$servicio[2].'</label>'.
           $textareas[2].
          '<input type="submit" name="guardarInicio" value="Guardar" class="btn brand z-depth-0">
        </form>';
        echo $variable;
    }

    function NServicios(){
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
        $variable = 
      '<form action="Modificar.php" method="POST">
          <label>'.$servicio[0].'</label>'
          .$textareas[0].' '.
          '<label>'.
          $servicio[1].
          '</label>'.
          $textareas[1].' '.
          '<label>'.
          $servicio[2].
          '</label>'.
          $textareas[2].
          '<div class="center">
             <input type="submit" name="guardarNServicios" value="Guardar" class="btn brand z-depth-0">
          </div>
       </form>';
        echo $variable;
    }

    function guardarSNosotros(){
        echo '<iframe src="SobreNosotros.php" frameborder="0"></iframe>';
        $consulta = "SELECT titulo, texto FROM sobrenosotros";
        $datos = solicitarDatos($consulta);

        $titulo = array();
        $texto = array();

        while($fila = mysqli_fetch_array($datos)){
            array_push($titulo,$fila["titulo"]);
            array_push($texto,$fila["texto"]);
        }

        $textarea = array(
            '<textarea name="Mision" cols="30" rows="10">',
            '<textarea name="Valores" cols="30" rows="10">',
            '<textarea name="Vision" cols="30" jrpws="10">'
           );
        $textareas = array();
        //Imprimiendo
        for($i = 0; $i < count($titulo); $i++){
            $lista = explode("/",$texto[$i]); 
            $textos = $textarea[$i];

            for($c = 0; $c < count($lista); $c++){
                if($c == 0)
                $textos = $textos.''.$lista[$c];
                else
                $textos = $textos.'-'.$lista[$c]."\n";
            }
            $textos = $textos.'</textarea>';
            array_push($textareas,$textos);
        }

        $variable = 
         '<form action="Modificar.php" method="POST">
             <label>'.$titulo[0].'</label>'
             .$textareas[0].
             '<label>'.$titulo[1].'</label>'
             .$textareas[1].
             '<label>'.$titulo[2].'</label>'
             .$textareas[2].
             '<div class="center">
                <input type="submit" name="guardarSNosotros" value="Guardar" class="btn brand z-depth-0">
             </div>
          </form>';
        echo $variable;  
    }

    function borrar(){
        $consulta = "SELECT idPreguntas, Pregunta FROM faqs";
        $datos = solicitarDatos($consulta);

        $preguntas = array();
        $numeracion = array();

        while($fila = mysqli_fetch_array($datos)){
         array_push($numeracion, $fila['idPreguntas']);
         array_push($preguntas, $fila['Pregunta']);
        }
        $SeleccionarPre ='';
        for($i = 0; $i < count($preguntas); $i++){
             $SeleccionarPre = $SeleccionarPre.'<label>
             <input type="checkbox" name="numero'.$numeracion[$i].'" value="opcion">'.
             $preguntas[$i].'</label>';
        }
        return $SeleccionarPre;
    }


?>
