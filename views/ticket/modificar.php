<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAF - Modificar Ticket</title>
    <script type="text/javascript" src="/saf-portal/libs/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/saf-portal/scripts/ticket/modificar.js"></script>
</head>
<body>
    <h1>Modificar Ticket</h1>
    <hr />

    <label>No. Ticket:</label><br>
    <label id="lblTicket"><?php echo $this->viewData('idTicket'); ?></label><br>
    <label>Descripción error:</label><br>
    <input type="text" id="txtDescripcionError" size="40" maxlength="500" value="<?php echo $this->viewData('descripcionError'); ?>" /><br>
    <label>Fecha error (dd/mm/aaaa):</label><br>
    <input type="text" id="txtFechaError" size="20" maxlength="10" value="<?php echo $this->viewData('fechaError'); ?>" /><br>
    <label>Fecha ticket (dd/mm/aaaa):</label><br>
    <label><?php echo $this->viewData('fechaTicket'); ?></label><br>
    <label>Estado:</label>
    <select id="cmbEstadoTicket">
        <option value="1" <?php echo $this->viewData('idEstadoTicket') == 1 ? 'selected="selected"' : ''; ?>>PENDIENTE</option>
        <option value="2" <?php echo $this->viewData('idEstadoTicket') == 2 ? 'selected="selected"' : ''; ?>>EN PROCESO</option>
        <option value="3" <?php echo $this->viewData('idEstadoTicket') == 3 ? 'selected="selected"' : ''; ?>>ATENDIDO</option>
        <option value="4" <?php echo $this->viewData('idEstadoTicket') == 4 ? 'selected="selected"' : ''; ?>>DESCARTADO</option>
    </select>
    <br><br>

    <?php echo $this->viewData('idEstadoTicket'); ?>
    <br>
    <a href="#" id="lnkAceptar">Aceptar</a>
    <a href="#" id="lnkCancelar">Cancelar</a>
</body>
</html>
