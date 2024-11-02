<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarRespuesta.php';
require_once '../../modelo/ejecutivoDeCuentas.php';

$resp= new ConsultarRespuesta();

$ej = new EjecutivoDeCuentas();
$ej->Id = $_GET['id'];
$ej->Descripcion = "Ejecutivo 1";
$ej->Usuario = "comercial";

$resp->EjecutivoDeCuenta = $ej;

echo json_encode ($resp);