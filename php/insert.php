<?php
if(isset($_POST['Crear'])){
    $Pre = $_POST['preguntas'];
    $Res = $_POST['respuestas'];
    
    $consulta = 'INSERT INTO faqs (Pregunta, Respuesta) VALUES ("'.$Pre.'", "'.$Res.'");'; 
    guardarDatos($consulta);
    

    echo "<script type='text/javascript'>alert('Valores actualizados correctamente');</script>";
}

?>