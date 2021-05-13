<?php 
header("Access-Control-Allow-Origin: *");
header('Content-Type: text/html; charset-utf-8');
require_once('../Cliente.php');

$client = new Cliente ();
$clientes = $client->informacionCliente($_REQUEST['nombre'], $_REQUEST['apellidos']);
echo json_encode($clientes);
?>