<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAF - Nuevo Ticket</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/saf-portal/libs/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/saf-portal/scripts/ticket/nuevo.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include './libs/header.php'; ?>

    <div class="container" style="padding-top: 40px;">
        <div class="row">
            <div class="col-6"">
                <h2>Agregar Nuevo Ticket</h2>
                <hr />
            </div>
        </div>

        <form>
            <div class="col-4" style="padding-top: 20px;">
                <label for="txtDescripcionError" class="form-label">Descripción error:</label>
                <input id="txtDescripcionError" type="text" maxlength="500" class="form-control" />
            </div>
            <div class="col-4" style="padding-top: 20px;">
                <label for="txtFechaError" class="form-label">Fecha del error:</label>
                <input id="txtFechaError" type="date" class="form-control" />
            </div>
            <div class="col-4" style="padding-top: 30px;">
                <div id="divBotones">
                    <a href="#" id="lnkAceptar" class="btn btn-primary">Aceptar</a>
                    <a href="#" id="lnkCancelar" class="btn btn-danger">Cancelar</a>
                </div>
            </div>
            <div class="col-4" style="padding-top: 20px;">
                <div id="divMensajes"></div>
            </div>
        </form>
    </div>
</body>
</html>
