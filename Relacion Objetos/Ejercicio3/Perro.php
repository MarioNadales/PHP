<?
require_once "Mamifero.php";
class Perro extends Mamifero{
  public function ladra() {
    echo $this->nombre. ": guau guau<br>";
  }
}
?>