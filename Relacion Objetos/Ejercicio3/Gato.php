<?
require_once "Mamifero.php";
class Gato extends Mamifero{
  public function arañar(){
    echo $this->nombre.": araña<br>";
  }
}
?>