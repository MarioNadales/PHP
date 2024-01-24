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
  $val1=$_GET['val1'];
  $val2=$_GET['val2'];
  
  echo "Primer array: ";
  
  for ($i=0; $i<100; $i++) {
    $array[$i]=rand(0,100);
    echo $array[$i]."  ";
  }
  
echo "<br> Segundo array: ";
  
  for ($i=0; $i < 100; $i++) { 
    if ($array[$i]==$val1) {
      echo $array[$i]=$val2." ";
    } else {
      echo $array[$i]." ";
    }
  }

?> 
</body>
</html>