$(document).ready(function() 
{
    $('#lnkAceptar').click(lnkAceptar);
    $('#lnkCancelar').click(lnkCancelar);
});

function lnkAceptar()
{
    event.preventDefault();
    $('#divMensajes').html('Espere...');
    var descripcionError = $('#txtDescripcionError').val();
    var fechaError = $('#txtFechaError').val();

    if (descripcionError == '' || fechaError == '')
    {
        $('#divMensajes').html('Todos los datos son requeridos.');
        return false;
    }

    $('#divBotones').hide();
    
    $.ajax({
		type: 'post',
		url: '/saf-portal/ticket/nuevoguardar',
		dataType: 'json',
		data: { 'descripcionError': descripcionError, 'fechaError': fechaError }
	}).done(function(datos) 
	{
        if (datos.httpCode == 201)
        {
            alert('Se agregó el ticket correctamente, no. asignado: ' + datos.idTicket);
            location.href = '/saf-portal/ticket';
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
