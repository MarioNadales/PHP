<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  $nota1=$_GET['nota1'];
  $nota2=$_GET['nota2'];
  $nota3=$_GET['nota3'];
  if ($nota1<0 || $nota2<0 || $nota3<0) { 
    echo "Introduce valores positivos";
  }else {
    $suma=$nota1+$nota2+$nota3;
    echo "Media: ".$resultado=$suma/3;
  }
  ?>
</body>
</html>