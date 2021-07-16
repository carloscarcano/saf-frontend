<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAF - Principal</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/saf-portal/libs/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/saf-portal/scripts/ticket/index.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1>Menú Principal</h1>
        <h4><?php echo session::obtenerSesion()['usuarioNombre']; ?></h4>
        <a href="/saf-portal/login/salir">Cerrar Sesión</a>
        <hr />
        <input type="text" id="txtIdTicket" size="4" />

        <a href="#" id="lnkNuevo">Nuevo</a>
        <a href="#" id="lnkConsultar">Consultar</a>
        <a href="#" id="lnkModificar">Modificar</a>
        <a href="#" id="lnkEliminar">Eliminar</a>
        
        <br><br>
        <div id="divMensajes"></div>
    </div>

    <?php
        /*
        $hashedCarlos = password_hash('carlos', PASSWORD_DEFAULT, ['cost' => 10]);
        $hashedDiana = password_hash('diana', PASSWORD_DEFAULT, ['cost' => 10]);
        $hashedMario = password_hash('mario', PASSWORD_DEFAULT, ['cost' => 10]);
        
        echo 'hashed carlos: ' . $hashedCarlos . '<br><br>';
        echo 'hashed diana: ' . $hashedDiana . '<br><br>';
        echo 'hashed mario: ' . $hashedMario . '<br><br>';
        */

        /*$comparacion = password_verify($input, $hashedPassword);
        if ($comparacion)
            echo 'iguales';
        else
            echo 'diferentes';*/
    ?>
</body>
</html>
