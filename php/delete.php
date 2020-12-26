<?php
if(isset($_POST['BorrarPreguntas'])){
    $Largo = contarPreguntas();

    for ($i=1; $i < count($Largo)+1; $i++) {
        if(isset($_POST['numero'.$i])){
            $consulta = 'DELETE FROM faqs WHERE idPreguntas ='.$i.';'; 
            guardarDatos($consulta);
        }
    }
    echo "<script type='text/javascript'>alert('Pregunta se elimino correctamente ');</script>";
}

function contarPreguntas(){
    $consulta = "SELECT Pregunta FROM faqs";
    $datos = solicitarDatos($consulta);
    $preguntas = array();
    while($fila = mysqli_fetch_array($datos)){
     array_push($preguntas, $fila['Pregunta']);
    }
    return $preguntas;
}

?>