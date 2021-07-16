<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAF - Consultar Ticket</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">      
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
    </div>
</body>
</html>
