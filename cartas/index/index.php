<?php
session_start();

function repartirCartas() {
    $_SESSION['cartaJugador1'] = rand(1, 10);
    $_SESSION['cartaJugador2'] = rand(1, 10);
    $_SESSION['paloJugador2'] = rand(0, 3);
    $_SESSION['paloJugador1'] = rand(0, 3);

    if ($_SESSION['cartaJugador1'] > $_SESSION['cartaJugador2']) {

        $_SESSION['resultado'] = "¡Jugador A gana!";
    } else if ($_SESSION['cartaJugador1'] < $_SESSION['cartaJugador2']) {
      
      $_SESSION['resultado'] = "¡Jugador B gana!";
    } else {
        $_SESSION['resultado'] = "¡Empate!";
    }
}

if (isset($_POST['boton1'])) {
    repartirCartas();

}
$palos = array("c", "d", "p", "t");
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Juego cartas</title>
</head>
<body>
    <p>Pulsa aqui para iniciar el juego</p>
    <form method="post">
        <button type="submit" name="boton1">Iniciar</button>
    </form>

    <?php
    echo "<p>Jugador A: {$_SESSION['cartaJugador1']}<br><img src='../{$palos[$_SESSION['paloJugador1']]}{$_SESSION['cartaJugador1']}.svg' width='100'></p>";
    echo "<p>Jugador B: {$_SESSION['cartaJugador2']}<br><img src='../{$palos[$_SESSION['paloJugador2']]}{$_SESSION['cartaJugador2']}.svg' width='100'></p>";
    echo "<h2>{$_SESSION['resultado']}</h2>";
    ?>

</body>
</html>
