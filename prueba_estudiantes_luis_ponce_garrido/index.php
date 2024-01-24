<?php

require_once ("Estudiante.php");
require_once ("EstudianteGraduado.php");

$estudiante1 = new Estudiante("Luis" , 20 , "2 DAW" , [6 , 7 , 5 , 4]);

$estudiante2 = new Estudiante("Ramón" , 33 , "2 DAW" , [4 , 9 , 3 , 4]);

$estudiante3 = new EstudianteGraduado("Luis" , 20 , "2 DAW" , [6 , 7 , 5 , 4] , "Doctorado");

$estudiante4 = new EstudianteGraduado("Ramón" , 33 , "2 DAW" , [4 , 9 , 3 , 4] , "Posgrado");

echo "Datos: <br>";

$estudiante1->getNombre();
$estudiante1->getEdad();
$estudiante1->getCurso();
$estudiante1->getNotas();

$estudiante1->agregarNota(8);
$estudiante1->agregarNota(5);
$estudiante1->agregarNota(5);
$estudiante1->obtenerMedia();

echo "<hr>";

echo "Datos: <br>";

$estudiante2->getNombre();
$estudiante2->getEdad();
$estudiante2->getCurso();
$estudiante2->getNotas();

$estudiante2->agregarNota(10);
$estudiante2->agregarNota(2);
$estudiante2->agregarNota(5);
$estudiante2->obtenerMedia();

echo "<hr>";

echo "Datos: <br>";

$estudiante3->getNombre();
$estudiante3->getEdad();
$estudiante3->getCurso();
$estudiante3->getNotas();
$estudiante3->getNivel();

$estudiante3->agregarNota(8);
$estudiante3->agregarNota(5);
$estudiante3->agregarNota(5);
$estudiante3->obtenerMedia();

echo "<hr>";

echo "Datos: <br>";

$estudiante4->getNombre();
$estudiante4->getEdad();
$estudiante4->getCurso();
$estudiante4->getNotas();
$estudiante4->getNivel();

$estudiante4->agregarNota(10);
$estudiante4->agregarNota(2);
$estudiante4->agregarNota(5);
$estudiante4->obtenerMedia();

?>