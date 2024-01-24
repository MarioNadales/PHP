<?
include_once "conexionDB.php";

class Model {
  protected $table;    // Aquí guardaremos el nombre de la tabla a la que estamos accediendo
  protected $idColumn; // Aquí guardaremos el nombre de la columna que contiene el id (por defecto, "id")
  protected $conn;       // Y aquí la capa de abstracción de datos

  public function __construct()  {
    $this->conn = new conexionDB();
  }

  public function getAll() {
  
    $list = $this->conn->dataQuery("SELECT * FROM ".$this->table);
  
    return $list;
  }

  public function get($id) {
    $record = $this->conn->dataQuery("SELECT * FROM ".$this->table." WHERE ".$this->idColumn."= $id");
    return $record;
  } 

  public function delete($id) {
    $result = $this->conn->dataManipulation("DELETE FROM ".$this->table." WHERE ".$this->idColumn." = $id");
    return $result;
}
}