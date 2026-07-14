<?php

require_once __DIR__ . "/../libservidorphp/recibeJson.php";
require_once __DIR__ . "/../libservidorphp/devuelveJson.php";


$json = recibeJson();

$saludoOriginal = isset($json->saludo) ? $json->saludo;



 
$resultado = "{$saludoOriginal}, probando el recibe y devuelve de mi JSON. Saludos a {$nombre}.";

devuelveJson($resultado);