<?php

$Nombre = $categoria = $tel = $email =$msg = '';
$correo    = 'alejandraponcearellano15@gmail.com';
$asunto    = 'Solicitud de proyecto';
$mensaje = '';

$errores = array('nombreError'=>'', 'categoriaError'=>'', 'telError'=>'', 'emailError'=>'', 'msgError'=>'');

if(isset($_POST['submit'])){
    
    if(empty($_POST['Nombre'])){
            $errores['nombreError'] = 'El nombre es requerido';
        }else{
            $Nombre = $_POST['Nombre'];
            //Acepta espacios acentos y eñes
            if(!preg_match('/^([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)(\s*[a-zA-ZZñÑáéíóúÁÉÍÓÚ\s]*)*$/',$Nombre)){
                $errores['nombreError'] = "El nombre $Nombre no es válido";
            }else{
			  $mensaje = $mensaje.'Nombre: '.$Nombre."\n";
		  }
        }
    
    if(empty($_POST['categoria'])){
            $errores['categoriaError'] = 'La categoria es requerida';
        }else{
            $categoria = $_POST['categoria'];
            
            if(!preg_match('/^([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)(\s*[a-zA-ZZñÑáéíóúÁÉÍÓÚ\s]*)*$/',$categoria)){
                $errores['categoriaError'] = "La categoría $categoria no es válido";
            }else{
			  $mensaje = $mensaje.'Categoría: '.$categoria."\n";
		  }
        }
    
    if(empty($_POST['tel'])){
            $errores['telError'] = 'El número de teléfono es requerido';
        }else{
            $tel = $_POST['tel'];
            // Me base en esta página para esta expresión https://es.stackoverflow.com/questions/188505/expresión-regular-para-números-telefónicos
            if(!preg_match('/^(\(\+?\d{2,3}\)[\*|\s|\-|\.]?(([\d][\*|\s|\-|\.]?){6})(([\d][\s|\-|\.]?){2})?|(\+?[\d][\s|\-|\.]?){8}(([\d][\s|\-|\.]?){2}(([\d][\s|\-|\.]?){2})?)?)$/',$tel)){
                $errores['telError'] = "El numero de teléfono $tel no es válido";
            }else{
			  $mensaje = $mensaje.'Teléfono: '.$tel."\n";
		  }
        }
    
    if(empty($_POST['email'])){
            $errores['emailError'] = 'El correo es requerido';
        }else{
            $email = $_POST['email'];
            
            if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errores['emailError'] = 'Escribe un correo válido';
            } else{
			  $mensaje = $mensaje.'Email: '.$email."\n";
		  }
        }
    
   if(empty($_POST['msg'])){
            $errores['msgError'] = 'El mensaje es requerido';
        }else{
            $msg = $_POST['msg'];
       
            $mensaje = $mensaje.'Mensaje: '.$msg."\n"
            ;
    }
    if(!empty($_POST['Nombre']) && !empty($_POST['categoria']) && !empty($_POST['tel'])
    && !empty($_POST['email']) && !empty($_POST['msg'])){
        if(preg_match('/^([a-zA-ZñÑáéíóúÁÉÍÓÚ\s]+)(\s*[a-zA-ZZñÑáéíóúÁÉÍÓÚ\s]*)*$/',$categoria) &&
         preg_match('/^(\(\+?\d{2,3}\)[\*|\s|\-|\.]?(([\d][\*|\s|\-|\.]?){6})(([\d][\s|\-|\.]?){2})?|(\+?[\d][\s|\-|\.]?){8}(([\d][\s|\-|\.]?){2}(([\d][\s|\-|\.]?){2})?)?)$/',$tel)
         && filter_var($email, FILTER_VALIDATE_EMAIL)){
            //echo 'este es el mensaje  '.$mensaje;
            mail($correo,$asunto,$mensaje); 
        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Consultarq</title>
    <link rel="shortcut icon" href="img/logo-consultarq.png">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/styleContacto.css" type="text/css">
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
    <script src="js/scriptContacto.js" defer type="text/javascript"></script>
    <meta name="viewport" content="width=devicewidth,initial-scale=1">
</head>

<body>
    <?php include 'header.php' ?>
    
    <script>
        (function (){
            let dir = document.getElementById("contacto");

            dir.className = "nav-item active";
        })();
    </script>

    <main>
        <section class="texto">
            <h1 id="titulo">CONTÁCTANOS</h1>
            <p>En CONSULTARQ nos interesas, por favor llena el siguiente formulario <br> y te atenderemos lo más pronto posible.</p>
        </section>
        <form action="contacto.php" method="post">
            <ul class="form">
                <li><input type="text" id="name" name="Nombre" placeholder="Nombre" value="<?php echo htmlspecialchars($Nombre); ?>">
                <div class="red-text"><?php echo $errores['nombreError']; ?></div>
                </li>
                <li><input type="text" id="categoria" name="categoria" placeholder="Categoria" value="<?php echo htmlspecialchars($categoria); ?>">
                <div class="red-text"><?php echo $errores['categoriaError']; ?></div>
                </li>
                <li><input type="number" id="tel" name="tel" placeholder="Teléfono" value="<?php echo htmlspecialchars($tel); ?>">
                <div class="red-text"><?php echo $errores['telError']; ?></div>
                </li>
                <li><input type="email" id="email" name="email" placeholder="E-mail" value="<?php echo htmlspecialchars($email); ?>">
                <div class="red-text"><?php echo $errores['emailError']; ?></div>
                </li>
                <li class="msg"><textarea id="msg" name="msg" placeholder="Mensaje" style="height: 100%" value="<?php echo htmlspecialchars($msg); ?>"></textarea>
                <div class="red-text"><?php echo $errores['msgError']; ?></div>
                </li>
                <li class="submitLi"><input type="submit" name="submit" value="enviar" class="boton"></li>
            </ul>
        </form>
    </main>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>

<?php
    include 'conexión.php';
    include 'php/contadorMes.php';

    function contador(){
        $queryObtener = "SELECT contador FROM visitas WHERE pagina = 'contacto';";
        $respuesta = solicitarDatos($queryObtener);
        $vistas = mysqli_fetch_array($respuesta);
        $contador = $vistas[0] + 1;

        $queryGuardar = "UPDATE visitas SET contador = '$contador' WHERE pagina = 'contacto';";
        guardarDatos($queryGuardar);
        contadorContacto();
    }
     contador();
    /*echo "Eres el visitante: ".$visitante;*/
?>
