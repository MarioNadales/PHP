<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  echo '<table border=1><tr><th>Numero</th><th>X</th><th>Resultado</th></tr>';
  $numero=$_GET['numero'];
  for ($i=0; $i<=10 ; $i++) { 
    $resultado=$numero*$i;
    echo '<tr><td>'.$numero.'</td><td>'.$i.'</td><td>'.$resultado.'</td></tr>';
  }
  echo '</table>';
  ?>
  
</body>
</html>