<h1>Status</h1>

<?php
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "http://saf-api-rest.azurewebsites.net/api/v1/status");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
$httpCodeResponse = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);
$responseJSON = json_decode($response, true);

var_dump($responseJSON);
var_dump($responseJSON['activo']);
var_dump($responseJSON['mensaje']);

echo 'http status code: ' . $httpCodeResponse;
?>


<h1>GET Ticket</h1>

<?php
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "http://saf-api-rest.azurewebsites.net/api/v1/ticket/3");
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
$httpCodeResponse = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);
$responseJSON = json_decode($response, true);

var_dump($responseJSON);
echo 'descripción => ' . $responseJSON['descripcionError'];
echo '<br/>';
echo 'http status code: ' . $httpCodeResponse;
?>


<h1>POST Ticket</h1>

<?php

$datos = array(
	"idUsuario" => "1",
	"descripcionError" => "el error",
	"fechaError" => "12/07/2021");
	
$curl = curl_init();

curl_setopt($curl, CURLOPT_URL, "http://saf-api-rest.azurewebsites.net/api/v1/ticket");
curl_setopt($curl, CURLOPT_POST, 1);
curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($datos));
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($curl);
$httpCodeResponse = curl_getinfo($curl, CURLINFO_HTTP_CODE);

curl_close($curl);
$responseJSON = json_decode($response, true);


var_dump($responseJSON);
echo 'http status code: ' . $httpCodeResponse;

if ($httpCodeResponse == 201)
{
	echo 'descripción => ' . $responseJSON['descripcionError'];
	echo '<br/>';
}
?>

