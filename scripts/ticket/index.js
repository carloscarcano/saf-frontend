$(document).ready(function() 
{
    $('#lnkNuevo').click(lnkNuevo);
    $('#lnkConsultar').click(lnkConsultar);
    $('#lnkModificar').click(lnkModificar);
    $('#lnkEliminar').click(lnkEliminar);
});

function lnkNuevo()
{
    location.href = "/saf-portal/ticket/nuevo";
}

function lnkConsultar()
{
    $('#divMensajes').html('');
    var idTicket = $('#txtIdTicket').val();

    if (idTicket == '')
        $('#divMensajes').html('Falta ingresar el número de ticket que quiere consultar.');
    else
        location.href = '/saf-portal/ticket/consultar/' + idTicket;
}

function lnkModificar()
{
    $('#divMensajes').html('');
    var idTicket = $('#txtIdTicket').val();

    if (idTicket == '')
        $('#divMensajes').html('Falta ingresar el número de ticket que quiere modificar.');
    else
        location.href = '/saf-portal/ticket/modificar/' + idTicket;
}

function lnkEliminar()
{
    $('#divMensajes').html('');
    var idTicket = $('#txtIdTicket').val();

    if (idTicket == '')
        $('#divMensajes').html('Falta ingresar el número de ticket que quiere eliminar.');
    else
        location.href = '/saf-portal/ticket/eliminar/' + idTicket;
}
