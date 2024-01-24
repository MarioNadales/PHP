<?
class Triangulo {
  private $base;
  private $altura;

  public function __construct($base=5, $altura=10) {
    $this->base = $base;
    $this->altura = $altura;
  }
  function area() {
    echo "Triangulo ".($this->base*$this->altura)/2;
  }
}
?>