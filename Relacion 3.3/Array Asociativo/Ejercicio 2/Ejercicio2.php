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
  

  $arrayGlobal = array (
    "array" => array()
  );
  $arrayGlobal["array"] = [$num1, $num2, $num3, $num4];

  $ValorMIN=$arrayGlobal["array"][0];
  $ValorMAX=$arrayGlobal["array"][0];

  for ($i=0; $i <= 3; $i++) { 
    if ($arrayGlobal["array"][$i]>$ValorMAX) {
      $ValorMAX=$arrayGlobal["array"][$i];
    } elseif ($arrayGlobal["array"][$i]<$ValorMIN) {
      $ValorMIN=$arrayGlobal["array"][$i];
    }
  }
  
    for ($i=0; $i <= 3; $i++) {
      echo $arrayGlobal["array"][$i]." "; 
      if ($arrayGlobal["array"][$i]==$ValorMAX){
        echo " Maximo";
      } elseif ($arrayGlobal["array"][$i]==$ValorMIN) {
        echo " Minimo";
      }
      echo "<br>";
    }
  ?>
</body>
</html>