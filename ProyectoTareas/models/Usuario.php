<?
require_once "Model.php";
class Usuario extends Model {
  private $id;
  private $usuario;
  private $password;

  public function setid($id) {
    $this->id= $id;
  }

  public function getid() {
    return  $this->id;
  }

  public function setUsuario($nombre) {
    $this->usuario= $nombre;
  }

  public function getUsuario() {
    return $this->usuario;
  }

  public function setPassword($contraseña){
    $this->password= $contraseña;
  }

  public function getPassword(){
    return $this->password;
  }
}