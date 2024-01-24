<?
require_once "Estudiante.php";

$est1 = new Estudiante("Carlos", "33", "6º");
$est2 = new Estudiante("Miguel", "31", "6º");

$est1->AgregarNota(10);
$est1->AgregarNota(7);
//$est1->getNotas();
$est1->calcularMedia();