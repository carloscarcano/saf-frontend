<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAF - Login</title>
    <script type="text/javascript" src="/saf-portal/libs/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/saf-portal/scripts/login/index.js"></script>
</head>
<body>
    <h1>Sistema de Administración de Fallas</h1>
    <h2>Versión 1.0</h1>

    <form>
        <label>Usuario</label>
        <input id="txtUsuario" type="text" size="20" maxlength="10" />
        <label>Contraseña</label>
        <input id="txtPassword" type="password" size="20" maxlength="10" />
        <input id="btnAceptar" type="button" value="Aceptar" />
    </form>

    <br><br>
    <div id="divMensajes"></div>
</body>
</html>
