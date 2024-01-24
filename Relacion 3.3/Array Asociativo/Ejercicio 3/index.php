<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $arrayNumeros=[];
  $arrayNuevo=[];
  
  for ($i=0; $i < 15; $i++) { 
    $arrayNumeros[$i]=rand(1,20);
    echo $arrayNumeros[$i]." ";
  }
  echo "<br>";
  $arrayNuevo[14]=$arrayNumeros[0];

  for ($i=0; $i < 14; $i++) {
    $arrayNuevo[$i]=$arrayNumeros[$i+1];
    
  }
  for ($i=0; $i <15; $i++) { 
    
    echo $arrayNuevo[$i]." ";
  }
  
  ?>
</body>
</html>