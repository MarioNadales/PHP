<?
session_start();
include "conexionDB.php";

if (isset($_POST["usuario"]) && isset($_POST["password"])) {
  $usuario=$_POST["usuario"];
  $password=hash('sha512', $_POST['password']);

try {
  $statement = $conn->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password');
  $statement ->execute(array(
    ":usuario"=> $usuario,
    ":password"=> $password
    ));
    
  $fila = $statement->fetch_object("Usuario");
  
    if ($fila) {
      $_SESSION['usuario']=$usuario;
      $_SESSION['user_id'] = $fila['id'];
      header("Location: tareas.php");
      exit();
    } else {
      echo "No has introducido las credenciales correctamente";
      
    }
    }
  catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
  }
  
} 
require("./view/login.view.php");
?>