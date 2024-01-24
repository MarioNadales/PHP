<?php

    class Estudiante {

        private $nombre;
        private $edad;
        private $curso;
        private $notas = array();

        public function __construct($nombre , $edad , $curso , $notas){

            $this->nombre = $nombre;
            $this->edad = $edad;
            $this->curso = $curso;
            $this->notas = $notas;
        }

        public function getNombre(){
            echo "Nombre: $this->nombre <br>";
        }
        
        public function getEdad(){
            echo "Edad: $this->edad <br>";
        }
        
        public function getCurso(){
            echo "Curso: $this->curso <br>";
        }
        
        public function getNotas(){
            echo "Notas: ";
            foreach($this->notas as $valor){
                echo $valor . " ";
            }
            echo "<br>";
        }

        public function agregarNota($notaAgregada){

            array_unshift($this->notas , $notaAgregada);
            echo "<h2>Se ha agregado la nota " . $notaAgregada . " a las calificaciones del alumno " . $this->nombre . "</h2>";
        }

        public function obtenerMedia(){

            $aux = 0;
            $media = 0;

            foreach($this->notas as $valor){
                $aux = $aux + $valor;
            }

            $media = $aux/count($this->notas);
            echo "<h2>La media del alumno " . $this->nombre . " es: " . $media . "</h2>";

        }

    }




?>