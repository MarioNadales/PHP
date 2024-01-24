<?
class Rectangulo {
  private $lado1;
  private $lado2;

  public function __construct($lado1=5, $lado2=10) {
    $this->lado1 = $lado1;
    $this->lado2 = $lado2;
  }
  function area() {
    echo "Rectangulo ".$this->lado1*$this->lado2;
  }
}
?>