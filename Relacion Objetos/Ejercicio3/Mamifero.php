<?
require_once "Animal.php";
class Mamifero extends Animal{
  function amamantar() {
    echo $this->nombre.": amamanta<br>";
  }
}
?>