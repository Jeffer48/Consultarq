<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Login.css">
    <link rel="shortcut icon" href="img/logo-consultarq.png">
    <script src="js/usuario.js" defer type="text/javascript"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/Normalize.css">
    <title>Login</title>
</head>

<body>
    <form action="Login.php" method="POST">
        <figure>
            <img id="Logo" src="img/logo-consultarq1.png" alt="Logo de consultarq">
        </figure>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="pass" class="form-control" id="exampleInputPassword1">
        </div>
        <button name="submit" id="submit" type="submit" class="btn btn-primary">Ingresar</button>
    </form>
</body>

</html>

<?php
    include 'conexión.php';

    if(isset($_POST['submit'])){
        $correo = $_POST['email'];
        $contraseña = $_POST['pass'];

        $query = "SELECT email FROM usuarios WHERE email = '$correo' AND pass = '$contraseña';";
        $request = solicitarDatos($query);
        $array = mysqli_fetch_array($request);

        if($array){
            session_start();
            $_SESSION['user'] = $array[0];

            header('Location: Seleccion.php');
        }else{
            echo "<script>window.alert('Datos incorrectos')</script>";
        }
    }
?>