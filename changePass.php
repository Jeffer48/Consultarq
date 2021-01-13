<?php
    session_start();

    if(!$_SESSION['user']){
        echo "<script>window.alert('Inicie sesión primero')</script>";

        echo "<script> 
        window.location.replace('Login.php'); 
        </script>";
    }

    include 'conexión.php';

    $oldPass = "";
    $contraseña = "";
    $newPass = "";
    $mensaje = "";

    if(isset($_POST['submit'])){
        $correo = $_SESSION['user'];
        $oldPass = $_POST['oldPass'];
        $contraseña = $_POST['pass'];
        $newPass = $_POST['confirm'];

        $query = "SELECT email FROM usuarios WHERE email = '$correo' AND pass = '$oldPass';";
        $request = solicitarDatos($query);
        $array = mysqli_fetch_array($request);

        if($array){
            if($contraseña == $newPass){
                if($contraseña != ""){
                    $query = "UPDATE usuarios SET pass = '$contraseña' WHERE email = '$correo' AND pass = '$oldPass';";

                    guardarDatos($query);

                    echo "<script>window.alert('Contraseña actualizada')</script>";

                    echo "<script> 
                    window.location.replace('Seleccion.php'); 
                    </script>";
                }else{
                    $mensaje = "Todos los campos deben ser completados";
                }
            }else{
                $mensaje = "Las contraseñas no coinciden";
            }
        }else{
            $mensaje = "Datos incorrectos";
        }
    }
?>

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
    <title>Cambiar contraseña</title>
</head>

<body>
    <form action="changePass.php" method="POST">
        <figure>
            <img id="Logo" src="img/logo-consultarq1.png" alt="Logo de consultarq">
        </figure>
        <div class="mb-3">
            <label for="Pass" class="form-label">Contraseña actual</label>
            <input type="Password" name="oldPass" class="form-control" id="oldPass" value=<?php echo "'$oldPass'"; ?>>
        </div>
        <div class="mb-3">
            <label for="newPass" class="form-label">Nueva contraseña</label>
            <input type="password" name="pass" class="form-control" id="newPass" value=<?php echo "'$contraseña'"; ?>>
        </div>
        <div class="mb-3">
            <label for="confirmPass" class="form-label">Confirmar contraseña</label>
            <input type="password" name="confirm" class="form-control" id="confirmPass" value=<?php echo "'$newPass'"; ?>>
        </div>
        <p style="color: red; text-align: center;"><?php echo $mensaje ?></p>
        <button name="submit" id="submit" type="submit" class="btn btn-primary">Cambiar</button>
    </form>
</body>

</html>