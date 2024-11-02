<?php

header('Content-Type: application/json');

require_once 'modelosRespuestas/agregarRespuesta.php';
require_once 'modelosRequest/agregarRequest.php';
require_once '../../modelo/ejecutivoDeCuentas.php';

//se obtiene el body
$json = file_get_contents('php://input',true);
// Convertir el body en un objeto
$req = json_decode($json);

$resp= new AgregarRespuesta();

$ej = new EjecutivoDeCuentas();
$ej->Id = 1;
$ej->Descripcion = "string";
$ej->Usuario = "Anónimo";

$resp->EjecutivoDeCuentas = $ej;



echo json_encode ($resp);