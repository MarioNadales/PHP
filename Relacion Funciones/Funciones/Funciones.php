<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 
  function esCapicua($num) {
    $capicua=false;
    if (strval($num)==strval(strrev($num))) {
      $capicua=true;
    } return $capicua;
  }
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
  function sigPrimo($num) {
    
    for ($i=$num+1; $i >$num ; $i++) { 
      if (esPrimo($i)) {
        return $i;
    }
  }
}
  function potencia($base, $expo) {
    return pow($base, $expo);
  }

  function digitos($num) {
    return strlen(strval($num)); 
  }

  function voltear($num) {
    return strrev(strval($num));
  }

  function digitoN($num, $n) {
    $num_str = (string)$num;
    if ($n >= 0 && $n < strlen($num_str)) { // se comprueba que el n sea válido
      $digito = $num_str[$n];
      return (int)$digito;
    } else {
      return -1; // esto indica que la posición está fuera de los límites
    }
  }
  function posicionDeDigito($num, $digito) {
    $num_str = (string)$num;
    $posicion = -1;
    for ($i = 0; $i < strlen($num_str); $i++) {
      if ($num_str[$i] == $digito) {
        $posicion = $i;
        break;
      }
    }
    return $posicion;
  }
  function quitarPorDetras($num, $n) {
    $num_str = (string)$num;
    $num_str = substr($num_str, 0, -$n);
    return (int)$num_str;
  }
  function quitarPorDelante($num, $n) {
    $num_str = (string)$num;
    $num_str = substr($num_str, $n);
    return (int)$num_str;
  }
  function pegarPorDetras($num, $n) {
    return (int)($num . $n); // se tratan como strings en su paréntesis y se convierten a int depués
  }

  function pegarPorDelante($num, $n) {
    return (int)($n . $num);
  }

  function trozoDeNumero($num, $posicionInicial, $posicionFinal) {
    $num_str = (string)$num;
    $trozo = substr($num_str, $posicionInicial, $posicionFinal);
    return (int)$trozo;
  }

  function juntaNumeros($num1, $num2) {
    return (int)($num1 . $num2);
  }
?>
  
</body>
</html>