

<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SAF Versión 1.0</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a id="lnkNuevo" class="nav-link" aria-current="page" href="#">Nuevo</a>
                </li>
            </ul>
            <form class="d-flex" style="margin-right: 40px;">
                <select id="cmbHeaderOpciones" class="form-select">
                    <option value="0" selected>Seleccione...</option>
                    <option value="1">Consultar</option>
                    <option value="2">Modificar</option>
                    <option value="3">Eliminar</option>
                </select>
                &nbsp;
                <input id="txtHeaderIdTicket" class="form-control me-2" type="search" maxlength="3" placeholder="No. Ticket" aria-label="Search">
                <button id="btnHeaderAceptar" type="button" class="btn btn-outline-success">Aceptar</button>
            </form>

            <form class="d-flex">
                <a href="#" class="nav-link disabled"><?php echo session::obtenerSesion()['usuarioNombre']; ?></a>
                <a href="/saf-portal/login/salir" class="nav-link">Cerrar Sesión</a>
            </form>
        </div>
    </div>
</nav>