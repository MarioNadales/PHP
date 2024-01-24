<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php 

  $arrays = array( 
    "Primera" => array(),
    "Segunda" => array(),
    "Tercera" => array(),
    "Cuarta" => array(),
    "Quinta" => array(),
    "Sexta" => array(),

  );

  echo "<table border 2><tr><th>Lunes</th><th>Martes</th><th>Miercoles</th><th>Jueves</th><th>Viernes</th></tr>";
  //Primera Hora
  $arrays["Primera"][0]="JavaScript";
  $arrays["Primera"][1]="JavaScript";
  $arrays["Primera"][2]="PHP";
  $arrays["Primera"][3]="PHP";
  $arrays["Primera"][4]="PHP";
  $arrays["Primera"][5]="Diseño";
  //Segunda Hora
  $arrays["Segunda"][0]="JavaScript";
  $arrays["Segunda"][1]="JavaScript";
  $arrays["Segunda"][2]="PHP";
  $arrays["Segunda"][3]="PHP";
  $arrays["Segunda"][4]="Empresa";
  $arrays["Segunda"][5]="Diseño";
  //Tercera Hora
  $arrays["Tercera"][0]="JavaScript";
  $arrays["Tercera"][1]="JavaScript";
  $arrays["Tercera"][2]="JavaScript";
  $arrays["Tercera"][3]="PHP";
  $arrays["Tercera"][4]="Empresa";
  $arrays["Tercera"][5]="Diseño";
  //Cuarta Hora
  $arrays["Cuarta"][0]="Servidor";
  $arrays["Cuarta"][1]="JavaScript";
  $arrays["Cuarta"][2]="Empresa";
  $arrays["Cuarta"][3]="Diseño";
  $arrays["Cuarta"][4]="Python";
  $arrays["Cuarta"][4]="Python";
  //Quinta Hora
  $arrays["Quinta"][0]="PHP";
  $arrays["Quinta"][1]="Servidor";
  $arrays["Quinta"][2]="JavaScript";
  $arrays["Quinta"][3]="Empresa";
  $arrays["Quinta"][4]="Diseño";
  $arrays["Quinta"][5]="Python";
  //Sexta Hora
  $arrays["Sexta"][0]="PHP";
  $arrays["Sexta"][1]="Servidor";
  $arrays["Sexta"][2]="Empresa";
  $arrays["Sexta"][3]="Empresa";
  $arrays["Sexta"][4]="Diseño";
  $arrays["Sexta"][5]="Python";
  
  
  
      echo "<tr><td>".$arrays["Primera"][0]."</td><td>".$arrays["Primera"][1]."</td><td>".$arrays["Primera"][2]."</td><td>".$arrays["Primera"][3]."</td><td>".$arrays["Primera"][4]."</td></tr>";
      echo "<tr><td>".$arrays["Segunda"][0]."</td><td>".$arrays["Segunda"][1]."</td><td>".$arrays["Segunda"][2]."</td><td>".$arrays["Segunda"][3]."</td><td>".$arrays["Segunda"][4]."</td></tr>";
      echo "<tr><td>".$arrays["Tercera"][0]."</td><td>".$arrays["Tercera"][1]."</td><td>".$arrays["Tercera"][2]."</td><td>".$arrays["Tercera"][3]."</td><td>".$arrays["Tercera"][4]."</td></tr>";
      echo "<tr><td>".$arrays["Cuarta"][0]."</td><td>".$arrays["Cuarta"][1]."</td><td>".$arrays["Cuarta"][2]."</td><td>".$arrays["Cuarta"][3]."</td><td>".$arrays["Cuarta"][4]."</td></tr>";
      echo "<tr><td>".$arrays["Quinta"][0]."</td><td>".$arrays["Quinta"][1]."</td><td>".$arrays["Quinta"][2]."</td><td>".$arrays["Quinta"][3]."</td><td>".$arrays["Quinta"][4]."</td></tr>";
      echo "<tr><td>".$arrays["Sexta"][0]."</td><td>".$arrays["Sexta"][1]."</td><td>".$arrays["Sexta"][2]."</td><td>".$arrays["Sexta"][3]."</td><td>".$arrays["Sexta"][4]."</td></tr>";
    
  
  echo "</table>";
  ?>
</body>
</html>