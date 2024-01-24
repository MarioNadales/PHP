<!DOCTYPE html>
  <html lang = "en">
    <head>
      <meta charset = "utf-8" />
      <meta name = "viewport" content = "width = device-width, initial-scale = 1.0" />
      <title>ejercicio 20</title>
    </head>
    <body>
      <form method = "post">
        <label for = "altura">altura: <input type = "number" name = "altura"/></label> <!-- he puesto un máximo ya que si es muy alta la imagen no se ve bien -->
        <label for = "imagen">selecciona una imagen:</label>
        <input type = "submit" value = "submit" />
      </form>

      <?
        if (isset($_POST["altura"])) {
          $altura = $_POST["altura"];

          for ($i = 1; $i <= $altura; $i++) {
            for ($j = 1; $j <= $altura - $i; $j++) {
              echo "&nbsp;"; // se generan los espacios correspondientes
            }

            // ! no funciona correctamente
            for ($j = 1; $j <= $i; $j++) {
              if ($i == 1 || $i == $altura || $j == 1 || $j == $i) {
                echo "*";
              } else {
                echo "&nbsp;&nbsp;";
              }
            }
            echo "<br />";
          }
        }
      ?>
    </body>
  </html>