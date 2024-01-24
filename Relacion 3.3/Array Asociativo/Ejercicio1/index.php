<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    $arrays = array( 
      "numero" => array(),
      "cuadrado" => array(),
      "cubo" => array(),
    );
    for ($i=0; $i < 20; $i++) { 
      $arrays["numero"][$i]=rand(0,100);
      $arrays["cuadrado"][$i]=$arrays["numero"][$i]* $arrays["numero"][$i];
      $arrays["cubo"][$i]=$arrays["numero"][$i]* $arrays["numero"][$i]*$arrays["numero"][$i];
      
      echo $arrays["numero"][$i]." ";
      echo $arrays["cuadrado"][$i]." ";
      echo $arrays["cubo"][$i]." <br>";
    }
  ?>
</body>
</html>