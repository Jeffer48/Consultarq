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

    <main>
        <section class="texto">
            <h1 id="titulo">CONTÁCTANOS</h1>
            <p>En CONSULTARQ nos interesas, por favor llena el siguiente formulario <br> y te atenderemos lo más pronto posible.</p>
        </section>
        <form action="" method="post">
            <ul class="form">
                <li><input type="text" id="name" name="Nombre" placeholder="Nombre"></li>
                <li><input type="text" id="categoria" name="categoria" placeholder="Categoria"></li>
                <li><input type="number" id="tel" name="tel" placeholder="Teléfono"></li>
                <li><input type="email" id="email" name="email" placeholder="E-mail"></li>
                <li class="msg"><textarea id="msg" name="msg" placeholder="Mensaje" style="height: 100%"></textarea></li>
                <li class="submitLi"><input type="submit" name="submit" value="enviar" class="boton"></li>
            </ul>
        </form>
    </main>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>

</html>