<?php
include("../config/conexion.php");
$id = $_POST['id'];
$nombres = $_POST['nombres'];
$carrera = $_POST['carrera'];
$ciclo = $_POST['ciclo'];
$sql = "UPDATE estudiantes
SET nombres='$nombres',
carrera='$carrera',
ciclo='$ciclo'
WHERE id='$id'";
if ($conexion->query($sql)) {
  echo "Estudiante actualizado correctamente";
  echo "<a href='../view/formulario.php'>Regresar al formulario</a>";
} else {
  echo "Error al actualizar";
}
