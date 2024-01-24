<?
class Cuadrado {
  private $lado1;

  public function __construct($lado1=5) {
    $this->lado1 = $lado1;
  }
  function area() {
    echo "Cuadrado ".$this->lado1*$this->lado1;
  }
}
?>