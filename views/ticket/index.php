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
    <?php include './libs/header.php'; ?>

    <div class="container">
        <div class="row" style="padding-top: 10px;">
            <div class="col">
                <div id="divMensajes" class="alert alert-warning" role="alert">
                    Espere mientras se carga la página...
                </div>
            </div>
        </div>
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
    ?>
</body>
</html>
