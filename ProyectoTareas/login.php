<?
session_start();
require_once "./models/Usuario.php";
require_once "conexionDB.php";

if (isset($_POST["usuario"]) && isset($_POST["password"])) {
  $usuario=$_POST["usuario"];
  $password=hash('sha512', $_POST['password']);
  $conn = new conexionDB();

try {
  $statement = $conn->dataQueryConParametros('SELECT * FROM usuarios WHERE usuario = :usuario AND password = :password', array(
    ":usuario" => $usuario,
    ":password" => $password
));

  $fila = $statement;
  
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