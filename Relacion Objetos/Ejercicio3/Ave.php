<?
require_once "Animal.php";
class Ave extends Animal{

  function vuela(){
    echo $this->nombre." esta volando<br>";
  }
}
?>