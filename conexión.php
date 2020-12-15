<?php

    function solicitarDatos($consulta){
        $conn = mysqli_connect('localhost','admin','AdminConsultarq#1');
        if(!$conn) echo 'Error al conectar';

        $base = mysqli_select_db($conn,"consultarq"); //Especificar la conexión con la base Consultarq
        $datos = mysqli_query($conn,$consulta); //Recibir la consulta

        mysqli_close($conn);

        return $datos;
    }

?>