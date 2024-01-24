<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  
  $num1=$_GET['numero1'];
  $num2=$_GET['numero2'];
  $num3=$_GET['numero3'];
  $num4=$_GET['numero4'];
  $array = [$num1, $num2, $num3, $num4];

  for ($i=0; $i < 5; $i++) { 
    //Comparar entre ellos 
    echo $array[$i]." ";
  }
  ?>
</body>
</html>