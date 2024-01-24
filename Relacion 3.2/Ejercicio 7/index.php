<?php
$combinacion = "1234"; // Combinación de la caja fuerte

if (isset($_POST["intentos"])) {
    $intentos = $_POST["intentos"];
    $codigo = $_POST["codigo"];

    if ($codigo === $combinacion) {
        echo "La caja fuerte se ha abierto satisfactoriamente.";
    } else {
        $intentos--;
        if ($intentos > 0) {
            echo "Lo siento, esa no es la combinación. Te quedan $intentos intentos.";
        } else {
            echo "Has agotado tus intentos. La caja fuerte permanece cerrada.";
        }
    }
} else {
    $intentos = 4;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Caja Fuerte</title>
</head>
<body>
    <h2>Control de Acceso a la Caja Fuerte</h2>
    <form method="post">
        <label>Introduce la combinación de 4 cifras: </label>
        <input type="text" name="codigo">
        <input type="hidden" name="intentos" value="<?= $intentos ?>">
        <input type="submit" value="Abrir Caja Fuerte">
    </form>
</body>
</html>