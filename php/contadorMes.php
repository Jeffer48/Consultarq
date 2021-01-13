<?php
  function contadorInicio(){
        $queryObtener = "SELECT inicio FROM vistasmes WHERE id = (
            SELECT id FROM vistasmes order by id desc LIMIT 1);";
        $respuesta = solicitarDatos($queryObtener);
        $vistas = mysqli_fetch_array($respuesta);
        $contador = $vistas[0] + 1;

        $queryGuardar = "UPDATE vistasmes SET inicio ='$contador' WHERE id = (
            SELECT id FROM vistasmes order by id desc LIMIT 1);";
        guardarDatos($queryGuardar);
        buscarFecha();
    }

  function contadorContacto(){
        $queryObtener = "SELECT contacto FROM vistasmes WHERE id = (
            SELECT id FROM vistasmes order by id desc LIMIT 1);";
        $respuesta = solicitarDatos($queryObtener);
        $vistas = mysqli_fetch_array($respuesta);
        $contador = $vistas[0] + 1;

        $queryGuardar = "UPDATE vistasmes SET contacto ='$contador' WHERE id = (
            SELECT id FROM vistasmes order by id desc LIMIT 1);";
        guardarDatos($queryGuardar);
        buscarFecha();
}

   function contadorFaqs(){
        $queryObtener = "SELECT faqs FROM vistasmes WHERE id = (
            SELECT id FROM vistasmes order by id desc LIMIT 1);";
        $respuesta = solicitarDatos($queryObtener);
        $vistas = mysqli_fetch_array($respuesta);
        $contador = $vistas[0] + 1;

        $queryGuardar = "UPDATE vistasmes SET faqs ='$contador' WHERE id = (
            SELECT id FROM vistasmes order by id desc LIMIT 1);";
        guardarDatos($queryGuardar);
        buscarFecha();
}

    function contadorNServicios(){
        $queryObtener = "SELECT nservicios FROM vistasmes WHERE id = (
            SELECT id FROM vistasmes order by id desc LIMIT 1);";
        $respuesta = solicitarDatos($queryObtener);
        $vistas = mysqli_fetch_array($respuesta);
        $contador = $vistas[0] + 1;

        $queryGuardar = "UPDATE vistasmes SET nservicios ='$contador' WHERE id = (
            SELECT id FROM vistasmes order by id desc LIMIT 1);";
        guardarDatos($queryGuardar);
        buscarFecha();
    }

    function contadorNExpertos(){
        $queryObtener = "SELECT nexpertos FROM vistasmes WHERE id = (
            SELECT id FROM vistasmes order by id desc LIMIT 1);";
        $respuesta = solicitarDatos($queryObtener);
        $vistas = mysqli_fetch_array($respuesta);
        $contador = $vistas[0] + 1;

        $queryGuardar = "UPDATE vistasmes SET nexpertos ='$contador' WHERE id = (
            SELECT id FROM vistasmes order by id desc LIMIT 1);";
        guardarDatos($queryGuardar);
        buscarFecha();
    }

    function contadorSNosotros(){
        $queryObtener = "SELECT snosotros FROM vistasmes WHERE id = (
            SELECT id FROM vistasmes order by id desc LIMIT 1);";
        $respuesta = solicitarDatos($queryObtener);
        $vistas = mysqli_fetch_array($respuesta);
        $contador = $vistas[0] + 1;

        $queryGuardar = "UPDATE vistasmes SET snosotros ='$contador' WHERE id = (
            SELECT id FROM vistasmes order by id desc LIMIT 1);";
        guardarDatos($queryGuardar);
        buscarFecha();
    }

    function buscarFecha(){
        $queryObtener = "SELECT fecha FROM vistasmes WHERE id = (
            SELECT id FROM vistasmes order by id desc LIMIT 1);";
        $respuesta = solicitarDatos($queryObtener);
        $vistas = mysqli_fetch_array($respuesta);
        $mes = substr($vistas[0], 5,2);
        $mesactual = date("m");
        if($mes != $mesactual){
            $queryGuardar = "INSERT INTO `vistasmes`(`inicio`, `faqs`, `nservicios`, `snosotros`, `contacto`, `nexpertos`) VALUES (0,0,0,0,0,0);";
            guardarDatos($queryGuardar);
        }

    }

    
?>