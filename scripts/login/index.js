$(document).ready(function() 
{
    $('#btnAceptar').click(btnAceptar);
});

function btnAceptar()
{
    $('#divMensajes').html('');

    var usr = $('#txtUsuario').val();
    var pwd = $('#txtPassword').val();

    if (usr == '' || pwd == '')
    {
        $('#divMensajes').html('El nombre de usuario y contraseña son requeridos.');
        return false;
    }

    $.ajax({
		type: 'post',
		url: '/saf-portal/login/validar',
		dataType: 'json',
		data: { 'usr': usr, 'pwd': pwd }
	}).done(function(datos) 
	{
        if (datos.acceso)
        {
            location.href = "/saf-portal/ticket";
        }
        else
        {
            $('#divMensajes').html(datos.mensaje);
        }
	}).fail(function(jqXHR, textStatus, errorThrown) 
	{
		alert('ocurrió un error: ' + textStatus);
	});
}
