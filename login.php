<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/alertify.css">
    <link rel="stylesheet" href="librerias/alertifyjs/css/themes/default.css">
    <link rel="stylesheet" href="node_modules/bootstrap-icons/font/bootstrap-icons.css">
    <script src="librerias/jquery.min.js"></script>
    <script src="js/form.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.js"></script>
    <script src="librerias/alertifyjs/alertify.js"></script>
</head>
<body>
<div class="container col-md-3 mt-5">
<form action="php/validarlogin.php" method="post">
            <h3>Formulario de registro</h3>
            <input type="text" class="form-control input-sm" name="usuario" placeholder="Ingresa tu usuario">
            <input type="password" class="form-control mt-3" name="contrasena" placeholder="Ingresa tu contraseña">
            <input type="submit" class="btn btn-primary mt-3" id="btn-enviar" value="Ingresar">
            </div>

</form>
</body>
</html>