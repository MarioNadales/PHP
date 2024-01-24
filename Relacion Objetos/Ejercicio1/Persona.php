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
//Setters y Getters
  public function setNombre($nombreEntrada){
    $this ->nombre=$nombreEntrada;
  }
  public function setApellidos($apellidosEntrada){
    $this ->apellidos=$apellidosEntrada;
  } 
  public function setEdad($edadEntrada){
    $this ->edad=$edadEntrada;
  } 
  public function getNombre(){
    return $this ->nombre;
  }
  public function getApellidos(){
    return $this ->apellidos;
  } 
  public function getEdad(){
    return $this ->edad;
  }
//Funciones
  function saludar(){
    echo "Hola<br>";
  }

  function mayorEdad(){
    return $this->edad >= 18;
    }
  
  function devuelveNombre(){
    echo "<br>".$this->nombre." " .$this->apellidos;
  }
}

?>