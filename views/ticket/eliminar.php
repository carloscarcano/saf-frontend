<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAF - Eliminar Ticket</title>
    <script type="text/javascript" src="/saf-portal/libs/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/saf-portal/scripts/ticket/eliminar.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <?php include './libs/header.php'; ?>

    <div class="container" style="padding-top: 40px;">
        <div class="row">
            <div class="col-6"">
                <h2>Eliminar Ticket</h2>
                <hr />
            </div>
        </div>

        <form>
            <div class="col-4" style="padding-top: 16px;">
                <label for="txtIdTicket" class="form-label">No. Ticket:</label>
                <input id="txtIdTicket" type="text" class="form-control" value="<?php echo $this->viewData('idTicket'); ?>" disabled />
            </div>
            <?php if ($this->viewData('descripcionError') == ''): ?>
                <div class="col-6" style="padding-top: 20px;">
                    <div class="alert alert-warning" role="alert">
                        No se encontró el ticket.
                    </div>
                </div>
                <div class="col-4" style="padding-top: 30px;">
                    <div id="divBotones">
                        <a href="/saf-portal/ticket" class="btn btn-primary">Aceptar</a>
                    </div>
                </div>
            <?php else: ?>
                <div class="col-4" style="padding-top: 16px;">
                    <label for="txtDescripcionError" class="form-label">Descripción error:</label>
                    <input id="txtDescripcionError" type="text" class="form-control" value="<?php echo $this->viewData('descripcionError'); ?>" disabled />
                </div>
                <div class="col-4" style="padding-top: 16px;">
                    <label for="txtFechaError" class="form-label">Fecha del error:</label>
                    <input id="txtFechaError" type="text" class="form-control" value="<?php echo $this->viewData('fechaError'); ?>" disabled />
                </div>
                <div class="col-4" style="padding-top: 16px;">
                    <label for="txtFechaTicket" class="form-label">Fecha de registro:</label>
                    <input id="txtFechaTicket" type="text" class="form-control" value="<?php echo $this->viewData('fechaTicket'); ?>" disabled />
                </div>
                <div class="col-4" style="padding-top: 16px;">
                    <label for="txtEstadoTicket" class="form-label">Estado:</label>
                    <input id="txtEstadoTicket" type="text" class="form-control" value="<?php echo $this->viewData('estadoTicket'); ?>" disabled />
                </div>
                <div class="col-4" style="padding-top: 26px;">
                    <div id="divBotones">
                        <a href="#" id="lnkEliminar" class="btn btn-primary">Eliminar</a>
                        <a href="#" id="lnkCancelar" class="btn btn-danger">Cancelar</a>
                    </div>
                    <div class="col-4" style="padding-top: 20px;">
                        <div id="divMensajes"></div>
                    </div>
                </div>
            <?php endif ?>
        </form>
    </div>
</body>
</html>
