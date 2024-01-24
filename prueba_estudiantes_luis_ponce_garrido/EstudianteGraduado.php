<?php 

require_once("Estudiante.php");

class EstudianteGraduado extends Estudiante{

    private $nivel;

    public function __construct($nombre , $edad , $curso , $notas ,$nivel){
        parent::__construct($nombre , $edad , $curso , $notas);
        $this->nivel = $nivel;
    }

    public function getNivel(){
        echo "Nivel: $this->nivel";
    }

}






?>