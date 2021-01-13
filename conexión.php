<?php
/*
    $dir = "brtlwkmzk2huu3g0hgoj-mysql.services.clever-cloud.com";
    $user = "ubheigpzt47ho6mv";
    $pass = "7fZClODbr5rfrBa1tZDZ";
    $nombreBD = "brtlwkmzk2huu3g0hgoj";
*/
    /*$dir = "localhost";
    $user = "adminCA";
    $pass = "Coms-Cc5.97";
    $nombreBD = "consultarq";*/
/*
    $dir = "localhost";
    $user = "consultarq";
    $pass = "1234";
    $nombreBD = "consultarq";
*/
<<<<<<< HEAD
    $dir = "localhost";
    $user = "consultarq";
    $pass = "1234";
    $nombreBD = "consultarq";

=======
>>>>>>> dca8e5e7b0510f24833b0f5281aa95fa675d603c
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
