
<!DOCTYPE html>
<html>
<head>
    <title>Serie de Fibonacci</title>
</head>
<body>
    <form method="post">
        <label>Introduce un valor para n: </label>
        <input type="text" name="n">
        <input type="submit" value="Calcular">
    </form>

    <?php
if (isset($_POST["n"])) {
    $n = $_POST["n"];
    $fibonacci = array();

    // Primeros dos términos
    $fibonacci[0] = 0;
    $fibonacci[1] = 1;

    // Calcular los siguientes términos de la serie
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    // Mostrar la serie de Fibonacci
    echo "Los primeros $n términos de la serie de Fibonacci son: ";
    for ($i = 0; $i < $n; $i++) {
        echo $fibonacci[$i];
        if ($i < $n - 1) {
            echo ", ";
        }
    }
}
?>
</body>
</html>
