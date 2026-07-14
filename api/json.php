<?php

require_once __DIR__ . "/../libservidorphp/recibeJson.php";
require_once __DIR__ . "/../libservidorphp/devuelveJson.php";


$json = recibeJson();

$saludoOriginal = isset($json->saludo) ? $json->saludo : "Hola";

$nombreCompleto = "Luis Santiago Garcia Xochihua";

 
$resultado = "{$saludoOriginal}, probando el recibe y devuelve de mi JSON. Saludos a {$nombreCompleto}.";

devuelveJson($resultado);