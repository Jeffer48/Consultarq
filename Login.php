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
    <form action="Seleccion.php" method="POST" enctype="text/plain">
        <figure>
            <img id="Logo" src="img/logo-consultarq1.png" alt="Logo de consultarq">
        </figure>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1">
        </div>
        <button id="submit" type="submit" class="btn btn-primary">Submit</button>
    </form>
</body>

</html>