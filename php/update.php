<?php
    //guardar Inicio
    if(isset($_POST['guardarInicio'])){

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

    
        $consulta = "SELECT idPreguntas FROM faqs";
                    $datos = solicitarDatos($consulta);

                    $numeracion = array();
                    
                    while($fila = mysqli_fetch_array($datos)){
                        array_push($numeracion, $fila['idPreguntas']);
                    }

        for($i = 0; $i < count($numeracion); $i++){
             $pre = $_POST['pregunta'.$numeracion[$i]]; 
             $res = $_POST['respuesta'.$numeracion[$i]];  
            $consulta = 'UPDATE faqs SET Pregunta="'.$pre.'", Respuesta="'.$res.'" WHERE idPreguntas="'.$numeracion[$i].'";'; guardarDatos($consulta);      
        } 
        echo "<script type='text/javascript'>alert('Valores actualizados correctamente');</script>";
    }
//-Cierres administrativos de contratos de obra.
/*
-Consectetur enim nesciunt porro corrupti vel veniam cupiditate vero ipsum expedita optio earum asperiores aliquid quae fuga odio eum dolorem a rem, praesentium doloremque ut, numquam eius ipsa! Illo, repudiandae!
*/
?>