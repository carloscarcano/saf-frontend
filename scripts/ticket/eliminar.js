$(document).ready(function() 
{
    $('#lnkEliminar').click(lnkEliminar);
    $('#lnkCancelar').click(lnkCancelar);
});

function lnkEliminar()
{
    event.preventDefault();

    $('#divMensajes').html('');
    var idTicket = $('#lblTicket').html();

    $.ajax({
		type: 'post',
		url: '/saf-portal/ticket/eliminaraceptar',
		dataType: 'json',
		data: { 'idTicket': idTicket }
	}).done(function(datos) 
	{
        if (datos.httpCode == 200)
        {
            alert('El ticket se eliminó correctamente');
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
