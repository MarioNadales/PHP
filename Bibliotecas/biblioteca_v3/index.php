<?php
session_start();
    include_once("TareaControlador.php");  


    //if (isset($_SESSION["idUsuario"])) {
    // Miramos el valor de la variable "action", si existe. Si no, le asignamos una acción por defecto
     if (isset($_REQUEST["action"])) {
         $action = $_REQUEST["action"];
     } else {
         $action = "mostrarListaTareas";  // Acción por defecto
     }
//} else {
    //$action = "mostrarLogin";  
    
//} 
    // Creamos un objeto de tipo Biblioteca y llamamos al método $action()
   $tarea = new TareaControlador();
    $tarea->$action();

    