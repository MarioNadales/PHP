<?
class Persona{
  private $nombre;
  private $apellidos;
  private $edad;

  public function __construct($nombre, $apellidos, $edad) {
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->edad = $edad;
}

  function saludar(){
    echo "Hola<br>";
  }
  public function __toString() {
    return $this->nombre."<br>" .$this->apellidos . "<br>" .$this->edad ."<br>";
}

}

?>