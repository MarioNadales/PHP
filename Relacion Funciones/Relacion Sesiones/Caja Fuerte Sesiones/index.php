<?
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Juego del número secreto</title>
  </head>
  <body>

	<?php
	
        // Primero, comprobamos su ya existe la variable "numero" en la URL.
        // Si no existe, significa que el usuario tiene que escribir un número: tenemos que mostrarle el formulario.
        // Si ya existe, significa que el usuario ha escrito algún número y tenemos que comprobar si coincide con el aleatorio.
        if (!isset($_REQUEST['numero'])) {
            // La variable "numero" NO existe. Vamos a pedirle que lo escriba en un formulario
            // ¿Y el número aleatorio? Si aún no existe, significa que es LA PRIMERA ejecución y aún tenemos que elegirlo.
            // En cambio, si ya existe, tendremos que recuperarlo para seguir usando el mismo aleatorio y no uno nuevo cada vez.
            if (!isset($_SESSION['combinacion'])) {
				$_SESSION['intentos'] = 4;
				$_SESSION['combinacion'] = 1234;
			} 
			echo "<form action='index.php' method='get'>
				Adivina la combinacion de la caja fuerte:
				<input type='text' name='numero'><br>
				
				<br>				
				<input type='submit'>
				</form>";
		} else {
            // La variable "numero" existe. Eso indica que el usuario escribió un número en el formulario.
            // Vamos a recuperar ese número y a compararlo con el aleatorio.
			$n = $_REQUEST['numero'];
			$combinacion = $_SESSION['combinacion'];
			$intentos=$_SESSION['intentos']--;
			
			echo "Tu número es: $n<br>";
			

			if ($n != $_SESSION['combinacion']) {
				echo " ";
			if ($intentos<=0) {
				echo "lo siento te quedaste sin intentos";
				session_destroy();
				
		} else {
			echo " incorrecto te quedan $intentos intentos";
			
		}
			}
			else {
				echo "Felicidades la caja fuerte se a abierto";
				session_destroy();
				
			}
			
            // Volvemos a llamar a este mismo programa, pasándole como variables de URL el aleatorio
            // y el número de intentos, para seguir jugando con el mismo número secreto.
			echo "<br><a href='index.php'>Sigue jugando...</a>";
            
		}

	?>