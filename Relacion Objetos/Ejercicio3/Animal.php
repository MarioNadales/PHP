<?
abstract class Animal {
  public $nombre;

  public function __construct($nombre) {
    $this->nombre=$nombre;
  }
  public function comer() {
    echo $this->nombre." Comiendo<br>";
  }
}
?>