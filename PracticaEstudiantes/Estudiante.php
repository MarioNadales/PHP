<?
class Estudiante{
  //Atributos
  private $nombre;
  private $edad;
  private $curso;
  public $notas=array();

  //Constructor
  public function __construct($nombre, $edad, $curso){
  echo " Nombre: ".$this->nombre=$nombre;
  echo " Edad: ".$this->edad=$edad;
  echo " Curso: ".$this->curso=$curso."<br>";
  $this->notas=array();
}
private $notasCount=0;
public function AgregarNota($notaIntroducida){
  
  for ($i=0; $i<= $this->notasCount ;$i++) {
    $this->notas[$i]=$notaIntroducida;
    
  }
  echo $this->notas[0];
}
public function getNotas(){
  for ($i=0; $i < $this->notasCount; $i++) { 
    echo $this->notas[$i];
  }
}
function calcularMedia(){
  $MediaNotas=0;
  $totalArray=count($this->notas);
  $MediaNotas=array_sum($this->notas)/$totalArray;
  echo $MediaNotas;

}
}