<?php

    function solicitarDatos($consulta){
        $dir = "brtlwkmzk2huu3g0hgoj-mysql.services.clever-cloud.com";
        $user = "ubheigpzt47ho6mv";
        $pass = "7fZClODbr5rfrBa1tZDZ";

        $conn = mysqli_connect($dir,$user,$pass);
        if(!$conn) echo 'Error al conectar';

        $nombreBD = "brtlwkmzk2huu3g0hgoj";

        $base = mysqli_select_db($conn,$nombreBD); //Especificar la conexión con la base Consultarq
        $datos = mysqli_query($conn,$consulta); //Recibir la consulta

        mysqli_close($conn);

        return $datos;
    }

?>