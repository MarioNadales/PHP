<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $numero=$_GET['numero'];
  $cont=0;
  do {
      $numero=round($numero/10);
      $cont++;
      
  } while ($numero!=0);
  echo "Numero de digitos: ".$cont;
  ?>
</body>
</html>