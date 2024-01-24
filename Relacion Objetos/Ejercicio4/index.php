<?
  require "Cuadrado.php";
  require "Rectangulo.php";
  require "Triangulo.php";

  $cuadrado=new Cuadrado("4");
  $rectangulo=new Rectangulo("3","5");
  $triangulo=new Triangulo("5","4");

  $cuadrado->area();
  echo "<br>";
  $rectangulo->area();
  echo "<br>";
  $triangulo->area();
  echo "<br>";
?>