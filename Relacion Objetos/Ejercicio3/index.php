<?

require_once "Gato.php";
require_once "Perro.php";


$gato=new Gato("Paco");
$perro= new Perro("Leon");

$gato->arañar();
$gato->amamantar();
$perro->ladra();
?>