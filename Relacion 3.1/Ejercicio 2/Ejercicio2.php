<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $hora=$_GET['hora'];
  if ($hora>=6 && $hora<=12) {
    echo "Buenos dias";
  } elseif ($hora>=13 && $hora<=20) {
    echo "Buenas tardes";
  } elseif ($hora>=21 && $hora<=5) {
    echo "Buenas noches";
    }
  ?>
</body>
</html>