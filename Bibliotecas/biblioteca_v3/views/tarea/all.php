<?php
// VISTA PARA LA LISTA DE LIBROS

// Recuperamos la lista de libros
$listaTarea = $data["listaTarea"];

echo "<form action='index.php'>
        <input type='hidden' name='action' value='buscarTarea'>
        <input type='text' name='textoBusqueda'>
        <input type='submit' value='Buscar'>
      </form><br>";

// Ahora, la tabla con los datos de los libros
if (count($listaTarea) == 0) {
  echo "No hay datos";
} else {
  echo "<table border ='1'>";
  foreach ($listaTarea as $fila) {
    echo "<tr>";
    echo "<td>" . $fila->titulo . "</td>";
    echo "<td>" . $fila->descripcion . "</td>";
    echo "<td><a href='index.php?action=formularioModificarTarea&idTarea=" . $fila->idTarea . "'>Modificar</a></td>";
    echo "<td><a href='index.php?action=borrarTarea&idTarea=" . $fila->idTarea . "'>Borrar</a></td>";
    echo "</tr>";
  }
  echo "</table>";
}
echo "<p><a href='index.php?action=formularioInsertarTarea'>Nuevo</a></p>";