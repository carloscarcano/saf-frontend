<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAF - Nuevo Ticket</title>
    <script type="text/javascript" src="/saf-portal/libs/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/saf-portal/scripts/ticket/nuevo.js"></script>
</head>
<body>
    <h1>Agregar Nuevo Ticket</h1>
    <hr />

    <label>Descripción error:</label><br>
    <input type="text" id="txtDescripcionError" size="20" maxlength="500" />
    <br><br>
    <label>Fecha error (dd/mm/aaaa):</label><br>
    <input type="text" id="txtFechaError" size="20" maxlength="10" />
    <br><br>

    <div id="divMensajes"></div>
    <br><br>
    
    <div id="divBotones">
        <a href="#" id="lnkAceptar">Aceptar</a>
        <a href="#" id="lnkCancelar">Cancelar</a>
    </div>
</body>
</html>
