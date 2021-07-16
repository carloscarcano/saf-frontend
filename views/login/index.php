<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SAF - Login</title>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="/saf-portal/libs/jquery-3.6.0.min.js"></script>
    <script type="text/javascript" src="/saf-portal/scripts/login/index.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <main class="login-form"  style="padding-top: 4.5rem;">
        <div class="cotainer">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h3>UNIR</h3>
                            <h4>Sistema de Administración de Fallas</h4>
                            <p>Por: Juan Carlos Carcaño González</p>
                        </div>
                        <div class="card-body">
                            <form class="my-form" action="" method="">
                                <div class="form-group row">
                                    <label for="email_address" class="col-md-4 col-form-label text-md-right">Usuario</label>
                                    <div class="col-md-6">
                                        <input type="text" id="txtUsuario" class="form-control" required autofocus>
                                    </div>
                                </div>

                                <div class="form-group row" style="padding-top: 14px;">
                                    <label for="password" class="col-md-4 col-form-label text-md-right">Contraseña</label>
                                    <div class="col-md-6">
                                        <input type="password" id="txtPassword" class="form-control" required>
                                    </div>
                                </div>

                                <div class="form-group row" style="padding-top: 14px;">
                                    <label class="col-md-4 col-form-label text-md-right"></label>
                                    <div class="col-md-6">
                                        <button id="btnAceptar" type="button" class="btn btn-primary">
                                            Iniciar Sesión
                                        </button>
                                    </div>
                                </div>

                                <div class="form-group row" style="padding-top: 14px; color: red;">
                                    <label class="col-md-4 col-form-label text-md-right"></label>
                                    <div class="col-md-6">
                                        <div id="divMensajes"></div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>
</html>
