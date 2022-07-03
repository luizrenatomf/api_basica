<?php

define('API_BASE', 'http://localhost/API/api/?option=');

echo '<h3>APLICAÇÃO</h3><hr>';

//$resultado = api_request('status');
//$resultado = api_request('random&min=10&max=100');
$resultado = api_request('hash');


echo '<pre>';
print_r($resultado);

function api_request($option)
{
    $client = curl_init(API_BASE . $option);
    curl_setopt($client, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($client);
    return json_decode($response, true);
}