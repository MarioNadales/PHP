<?php
session_start();

$usuarios = array("usuario1", "usuario2");
$passwords = array("p1", "p1");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["user"];
    $pass = $_POST["pass"];

    $indice = array_search($usuario, $usuarios);

    if ($indice !== false && $pass === $passwords[$indice]) {
        header("Location: logueado.html");
        exit();
    } else {
        echo "Usuario o contraseña incorrectos. Inténtalo de nuevo.";
        echo "<br><a href='login.html'>Volver</a>";
    }
}

?>
