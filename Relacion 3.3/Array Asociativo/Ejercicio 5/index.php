<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  $array=[];
  
  for ($i=0; $i < 8; $i++) { 
    $array[$i]= rand(0,10);
    if ($array[$i]%2==0) {
      echo " <div style=red>".$array[$i]." </div>";
    } else {
      echo " <div style=yellow>".$array[$i]." </div>";
    }
  }
  ?>
</body>
</html>