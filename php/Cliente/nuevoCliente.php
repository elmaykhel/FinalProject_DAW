<?php 
header("Access-Control-Allow-Origin: *");
header('Content-Type: text/html; charset-utf-8');
require_once('../Cliente.php');

$cliente = new Cliente();

$var = $cliente->nuevoCliente($_REQUEST["nombre"], $_REQUEST["apellidos"], $_REQUEST["dni"], $_REQUEST["correo"], $_REQUEST["telefono"]);
?>