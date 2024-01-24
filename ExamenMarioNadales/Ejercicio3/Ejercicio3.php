<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
Introduce un numero entre 1 y 1000
<form method="post">
        <input type="number" name="num"/>
        <input type="submit" value="submit"/>
      </form>

  <?php 
  
    if (isset($_POST["num"])) {

    
    $numero= $_POST["num"];

      if ($numero<1 || $numero>1000) {
        echo "Lo siento debes introducir un numero entre 1 y 1000";
        $numero="";
      }elseif ($numero>1 && $numero<1000) {
        for ($i=1; $i<$numero; $i++) {
          if (esPrimo($i)==true) {
            echo $i." ";
      }
    }
  }
}
    //Funcion Primos
  function esPrimo($num) {
      $primo=true;
      for ($i=2; $i < $num; $i++) { 
        if ($num % $i==0) {
        $primo=false;
        }
      }
        if ($num==0 || $num==1) {
          $primo=false;
        }
      return $primo;
    }
  ?>
</body>
</html>