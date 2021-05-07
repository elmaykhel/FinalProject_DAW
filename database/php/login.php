<?php
header("Access-Control-Allow-Origin: *");
header('Content-Type: text/html; charset-utf-8');
require_once('./Empleado.php');

$empleado = new Empleado();
$response = $empleado->doLogin($_REQUEST["username"], $_REQUEST["password"]);
echo $response;
?>