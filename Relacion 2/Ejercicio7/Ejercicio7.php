<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  Resultado de la factura: <?php $resultado=($_GET['base'] * 0.21)?>
  <?php echo $resultado + $_GET['base']  ?>
</body>
</html>