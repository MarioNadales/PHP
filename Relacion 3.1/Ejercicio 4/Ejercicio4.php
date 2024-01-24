<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php $horas=$_GET['horas'];
  if ($horas<=40) {
    $cobro=$horas*12;
  } elseif ($horas>40) {
    $horasextras=$horas-40;
    $cobro=$horasextras*16+480;
  }
  echo $cobro;
  ?>
</body>
</html>