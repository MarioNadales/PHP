<?
  class Usuario_tarea extends Model {

    public function __construct() {
      $this->table = "usuarios_tarea";
      $this->idColumn = "tarea";
      parent::__construct();
  }

  public function insertUsuarios_tarea($idTarea, $idUsuario)
    {      
        return $this->db->dataManipulation("INSERT INTO ".$this->table." (tarea, usuario) VALUES ('$idTarea','$idUsuario')");
    }
}