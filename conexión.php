<?php
/*
    $dir = "brtlwkmzk2huu3g0hgoj-mysql.services.clever-cloud.com";
    $user = "ubheigpzt47ho6mv";
    $pass = "7fZClODbr5rfrBa1tZDZ";
    $nombreBD = "brtlwkmzk2huu3g0hgoj";
*/
    $dir = "localhost";
<<<<<<< HEAD
    $user = "Consultarq";
    $pass = "1234";
=======
<<<<<<< HEAD
    $user = "consultarq";
    $pass = "1234";
=======
    $user = "admin";
    $pass = "AdminConsultarq#1";
>>>>>>> 81cfdce5931ac6ecb06dadf193bbfdc96051f51d
>>>>>>> 3eabb6a17697563a5bd95d0d4d11f6cef678334c
    $nombreBD = "consultarq";

    function solicitarDatos($consulta){
        global $dir, $user, $pass, $nombreBD;

        $conn = mysqli_connect($dir,$user,$pass);
        if(!$conn) echo 'Error al conectar';
        else{
            $base = mysqli_select_db($conn,$nombreBD); //Especificar la conexión con la base Consultarq
            $datos = mysqli_query($conn,$consulta); //Recibir la consulta

            mysqli_close($conn);
            return $datos;
        }
    }

    function guardarDatos($consulta){
        global $dir, $user, $pass, $nombreBD;

        $conn = mysqli_connect($dir,$user,$pass);
        $base = mysqli_select_db($conn,$nombreBD);
        
        mysqli_query($conn,$consulta);
        mysqli_close($conn);
    }

?>
