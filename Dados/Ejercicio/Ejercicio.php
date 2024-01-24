<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $dado=rand(1,6);
  $dado2=rand(1,6);

    <br>Suma de los dados:  echo $dado + $dado2; ?> <br><?php
    echo "<img src='../img/".$dado.".svg'/>";
    echo "<img src='../img/".$dado2.".svg'/>";
  ?>
</body>
</html>