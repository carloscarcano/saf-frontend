$(document).ready(function() 
{
    $('#lnkAceptar').click(lnkAceptar);
    $('#lnkCancelar').click(lnkCancelar);

    // var hoy = new Date().toLocaleDateString().split('/');
    // $('#txtFechaError').val(hoy[2] + '-' + (hoy[1].length == 1 ? '0' + hoy[1] : hoy[1]) + '-' + hoy[0]);
});

function lnkAceptar()
{
    event.preventDefault();
    $('#divMensajes').html('Espere...');

    
    var descripcionError = $('#txtDescripcionError').val();
    var fechaErrorAMD = $('#txtFechaError').val();

    if (descripcionError == '' || fechaErrorAMD == '')
    {
        $('#divMensajes').html('Todos los datos son requeridos.');
        return false;
    }

    var fechaSplit = fechaErrorAMD.split('-');
    var fechaError = fechaSplit[2] + '/' + fechaSplit[1] + '/' + fechaSplit[0];

    var idTicket = $('#txtIdTicket').val();
    var idEstadoTicket = $('#cmbEstadoTicket').val();

    $('#divBotones').hide();

    $.ajax({
		type: 'post',
		url: '/saf-portal/ticket/modificarguardar',
		dataType: 'json',
		data: { 'idTicket': idTicket, 'descripcionError': descripcionError, 'fechaError': fechaError, 'idEstadoTicket': idEstadoTicket }
	}).done(function(datos) 
	{
        if (datos.httpCode == 200)
        {
            alert('El ticket se actualizó correctamente');
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
