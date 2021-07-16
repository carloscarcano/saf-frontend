$(document).ready(function() 
{
    $('#divMensajes').hide();
    $('#lnkNuevo').click(lnkNuevo);
    $('#btnHeaderAceptar').click(btnAceptar);
});

function lnkNuevo()
{
    location.href = "/saf-portal/ticket/nuevo";
}

function btnAceptar()
{
    cmbOpciones = $('#cmbHeaderOpciones').val();
    idTicket = $('#txtHeaderIdTicket').val();

    if (cmbOpciones == 0)
    {
        alert('Faltar seleccionar una opción de la lista');
        return false;
    }

    if (idTicket == '')
    {
        alert('Falta ingresar un número de ticket');
        return false;
    }

    $('#divMensajes').show();
    $('#cmbHeaderOpciones').prop('disabled', true);
    $('#txtHeaderIdTicket').prop('disabled', true);
    $('#btnHeaderAceptar').prop('disabled', true);

    if (cmbOpciones == 1) { location.href = '/saf-portal/ticket/consultar/' + idTicket; }
    if (cmbOpciones == 2) { location.href = '/saf-portal/ticket/modificar/' + idTicket; }
    if (cmbOpciones == 3) { location.href = '/saf-portal/ticket/eliminar/' + idTicket; } 
}
