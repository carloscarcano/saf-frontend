<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAF - Consultar Ticket</title>
</head>
<body>
    <h1>Consultar Ticket</h1>
    <hr />
    <?php 
        echo 'IdTicket: ' . $this->viewData('idTicket');
        echo '<br>';
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
    <a href="/saf-portal/ticket">regresar</a>
</body>
</html>
