<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/consultarTodosRespuesta.php';
require_once '../../modelo/ejecutivoDeCuentas.php';

$resp= new ConsultarTodosRespuesta();

$ej1 = new EjecutivoDeCuentas();
$ej1->Id = 1;
$ej1->Descripcion = "Ejecutivo 1";
$ej1->Usuario = "comercial";

$ej2 = new EjecutivoDeCuentas();
$ej2->Id = 2;
$ej2->Descripcion = "Ejecutivo zona sur";
$ej2->Usuario = "Javkin";

$resp->ListEjecutivosDeCuentas[] = $ej1;
$resp->ListEjecutivosDeCuentas[] = $ej2;


echo json_encode ($resp);