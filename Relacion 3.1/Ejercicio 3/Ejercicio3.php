<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
  $dia=$_GET['dia'];
  switch ($dia) {
    case 0:
      echo "Introduce un numero que no sea 0";
    break;

    case 1:
      echo "Lunes";
    break;

    case 2:
      echo "Martes";
    break;

    case 3:
      echo "Miercoles";
    break;

    case 4:
      echo "Jueves";
    break;

    case 5:
      echo "Viernes";
    break;

    case 6:
      echo "Sabado";
    break;

    case 7:
      echo "Domingo";
    break;

    default:
      echo "Introduce un numero entre 1-7";
      break;
  }
  ?>
</body>
</html>