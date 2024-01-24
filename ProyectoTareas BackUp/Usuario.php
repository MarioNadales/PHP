<?
class Usuario {
  private $id;
  private $usuario;
  private $password;

  public function setUsuario($id) {
    $this->id= $id;
  }

  public function setUsuario() {
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