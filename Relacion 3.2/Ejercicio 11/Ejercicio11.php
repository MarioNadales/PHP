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
  
  for ($i=$numero; $i <($numero+5) ; $i++) { 
    
    echo "Cuadrado de ".$i.": " .$i*$i."   Cubo de: ".": ".$i*$i*$i;?><br><?php
  }
  ?>
</body>
</html>