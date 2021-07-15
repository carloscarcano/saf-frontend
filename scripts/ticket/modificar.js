$(document).ready(function() 
{
    $('#lnkAceptar').click(lnkAceptar);
    $('#lnkCancelar').click(lnkCancelar);
});

function lnkAceptar()
{
    event.preventDefault();

    $('#divMensajes').html('');
    var idTicket = $('#lblTicket').html();
    var descripcionError = $('#txtDescripcionError').val();
    var fechaError = $('#txtFechaError').val();
    var idEstadoTicket = $('#cmbEstadoTicket').val();

    $.ajax({
		type: 'post',
		url: '/saf-portal/ticket/modificarguardar',
		dataType: 'json',
		data: { 'idTicket': idTicket, 'descripcionError': descripcionError, 'fechaError': fechaError, 'idEstadoTicket': idEstadoTicket }
	}).done(function(datos) 
	{
        if (datos.httpCode == 200)
        {
            location.href = "/saf-portal/ticket";
        }
        else
        {
            $('#divMensajes').html(datos.mensaje + ' (' + datos.httpCode + ')');
        }
	}).fail(function(jqXHR, textStatus, errorThrown) 
	{
		alert('ocurrió un error: ' + textStatus);
	});
}

function lnkCancelar()
{
    location.href = '/saf-portal/ticket';
}
