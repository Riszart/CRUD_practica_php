<?php
include("../config/conexion.php");
$id = $_POST['id'];
$sql = "DELETE FROM estudiantes
WHERE id='$id'";
if ($conexion->query($sql)) {
  echo "Estudiante eliminado correctamente";
  echo "<a href='../view/formulario.php'>Regresar al formulario</a>";
} else {
  echo "Error al eliminar";
}
