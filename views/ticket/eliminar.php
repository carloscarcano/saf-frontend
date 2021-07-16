<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAF - Eliminar Ticket</title>
    <script type="text/javascript" src="/saf-portal/libs/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/saf-portal/scripts/ticket/eliminar.js"></script>
</head>
<body>
    <h1>Eliminar Ticket</h1>
    <hr />

    <label>No. Ticket:</label>&nbsp;<label id="lblTicket"><?php echo $this->viewData('idTicket'); ?></label><br>

    <?php 
        echo 'Descripción del error: ' . $this->viewData('descripcionError');
        echo '<br>';
        echo 'Fecha del error: ' . $this->viewData('fechaError');
        echo '<br>';
        echo 'Fecha del ticket: ' . $this->viewData('fechaTicket');
        echo '<br>';
        echo 'id estado ticket: ' . $this->viewData('idEstadoTicket');
        echo '<br>';
        echo 'estado ticket: ' . $this->viewData('estadoTicket');
    ?>

    <br>
    <a href="#" id="lnkEliminar">Eliminar</a>
    <a href="#" id="lnkCancelar">Cancelar</a>
</body>
</html>
