<?
// require_once "Usuario.php";

class conexionDB
{

  private $conn; // Aquí guardaremos la conexión con la base de datos

  /**
   * Abre la conexión con la base de datos
   * @return 0 si la conexión se realiza con normalidad y -1 en caso de error
   */
  function __construct()
  {
    try {
      $host = "db";
      $dbUsername = "root";
      $dbPassword = "test";
      $dbName = "tareas";
    
      $this->conn = new PDO("mysql:host=$host;dbname=$dbName", $dbUsername, $dbPassword);
      $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
      } catch (PDOException $e) {
      echo "Error de conexion: " . $e->getMessage();
    }
  }
  /**
   * Cierra la conexión con la base de datos
   */
  function close()
  {
    if ($this->conn) $this->conn->close();
  }

  /**
   * Lanza una consulta (SELECT) contra la base de datos.
   * ¡Ojo! Este método solo funcionará con sentencias SELECT.
   * @param $sql El código de la consulta que se quiere lanzar
   * @return Un array bidimensional con los resultados de la consulta (estará vacío si la consulta no devolvió nada)
   */
  function dataQuery($sql)
  {
    $res = $this->conn->query($sql);
    // Ahora vamos a convertir el resultado en un array convencional de PHP antes de devolverlo
    $resArray = array();
    while ($fila = $res->fetch_object()) {
      $resArray[] = $fila;
    }
    return $resArray;
  }

  /**
   * Lanza una sentencia de manipulación de datos contra la base de datos.
   * ¡Ojo! Este método solo funcionará con sentencias INSERT, UPDATE, DELETE y similares.
   * @param $sql El código de la consulta que se quiere lanzar
   * @return El número de filas insertadas, modificadas o borradas por la sentencia SQL (0 si no produjo ningún efecto).
   */
  function dataManipulation($sql)
  {
    $this->conn->query($sql);
    return $this->conn->affected_rows;
  }
  
  public function dataQueryConParametros($query, $params = array()) {
    try {
        $stmt = $this->conn->prepare($query);
        $stmt->execute($params);
        $resArray=array();
        while ($fila = $stmt->fetch()) {
            $resArray[] = $fila;
        }
        return $resArray;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

}
?>