<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<?php 
  echo "Multiplos de 5: ";
  $num=0;
  do {
    echo $num.", ";
    $num=$num+5;
  } while ($num <= 100);
  ?>
</body>
</html>