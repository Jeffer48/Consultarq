<?php

    function solicitarDatos($consulta){
        $dir = "localhost";
        $user = "Consultarq";
        $pass = "123";

        $conn = mysqli_connect($dir,$user,$pass);
        if(!$conn) echo 'Error al conectar';

        $nombreBD = "consultarq";

        $base = mysqli_select_db($conn,$nombreBD); //Especificar la conexión con la base Consultarq
        $datos = mysqli_query($conn,$consulta); //Recibir la consulta

        mysqli_close($conn);
        /*$dir = "brtlwkmzk2huu3g0hgoj-mysql.services.clever-cloud.com";
        $user = "ubheigpzt47ho6mv";
        $pass = "7fZClODbr5rfrBa1tZDZ";

        $dir = "localhost";
        $user = "admin";
        $pass = "AdminConsultarq#1";

        $conn = mysqli_connect($dir,$user,$pass);
        if(!$conn) echo 'Error al conectar';

        $nombreBD = "brtlwkmzk2huu3g0hgoj";
        $nombreBD = "consultarq";

        $base = mysqli_select_db($conn,$nombreBD); //Especificar la conexión con la base Consultarq
        $datos = mysqli_query($conn,$consulta); //Recibir la consulta

        mysqli_close($conn);*/

        return $datos;
    }

    function guardarDatos($consulta){
        $dir = "localhost";
        $user = "Consultarq";
        $pass = "123";
        $nombreBD = "consultarq";

        $conn = mysqli_connect($dir,$user,$pass);
        $base = mysqli_select_db($conn,$nombreBD);
        mysqli_query($conn,$consulta);
        mysqli_close($conn);
    }

?>