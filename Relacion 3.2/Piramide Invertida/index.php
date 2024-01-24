<!DOCTYPE html>
  <html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>ejercicio 18</title>
    </head>
    <body>
      <form method = "post">
        <label for = "altura">altura: <input type = "number" name = "altura"/></label>
        <label for = "imagen">selecciona una imagen:</label>
        <input type = "submit" value = "submit" />
      </form>

      <?
        if (isset($_POST["altura"])) {
          $altura = $_POST["altura"];

          for ($i = 1; $i <= $altura; $i++) {
            // Imprimir espacios en blanco
            for ($espacio = 1; $espacio < $i; $espacio++) {
                echo "&nbsp;&nbsp;";
            }
            
            // Imprimir asteriscos
            for ($j = 1; $j <= 2 * ($altura - $i) + 1; $j++) {
                echo "*";
            }
            echo "<br />";
        }
        
    }
  
      ?>
    </body>
  </html>