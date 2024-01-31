<?php

// MODELO DE LIBROS

include_once "model.php";

class Tarea extends Model
{

    // Constructor. Especifica el nombre de la tabla de la base de datos
    public function __construct()
    {
        $this->table = "tarea";
        $this->idColumn = "id";
        parent::__construct();
    }

    // Devuelve el último id asignado en la tabla de tareas
    public function getMaxId()
    {
        $result = $this->db->dataQuery("SELECT MAX(id) AS ultimoIdTarea FROM tarea");
        return $result[0]->ultimoIdTarea;
    }

    // Inserta una tarea. Devuelve 1 si tiene éxito o 0 si falla.
    public function insert($titulo, $descripcion)
    {      
        return $this->db->dataManipulation("INSERT INTO tarea (titulo,descripcion) VALUES ('$titulo','$descripcion')");
    }

    // Actualiza un libro (todo menos sus autores). Devuelve 1 si tiene éxito y 0 en caso de fallo.
    public function update($idTarea ,$titulo, $descripcion)//,$idUsuario)
    {
        $ok = $this->db->dataManipulation("UPDATE tarea SET
                                titulo = '$titulo',
                                descripcion = '$descripcion'
                                WHERE id = '$idTarea'");
        return $ok;
    }

    public function tareasDeUsuario($id) {
        $record = $this->db->dataQuery(" SELECT tarea.*
    FROM usuarios_tarea
    INNER JOIN tarea ON usuarios_tarea.tarea = tarea.id
    WHERE usuarios_tarea.usuario = $id
    ");
    return $record;
    }
}