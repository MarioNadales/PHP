<?
require("Persona.php");
$persona = new Persona("Mario", "Nadales", 33);
$persona->saludar();
$persona ->mayorEdad();

  if ($persona->mayorEdad()) {
    echo "es mayor de edad";
  } else {
    echo "es menor de edad";
  }
$persona->devuelveNombre();
?>  