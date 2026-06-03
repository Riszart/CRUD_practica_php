<?php
include("../config/conexion.php");
$nombres = $_POST['nombres'];
$carrera = $_POST['carrera'];
$ciclo = $_POST['ciclo'];
$sql = "INSERT INTO estudiantes(nombres,carrera,ciclo)
VALUES('$nombres','$carrera','$ciclo')";
if ($conexion->query($sql)) {
  echo "Estudiante registrado correctamente";
  echo "<a href='../view/formulario.php'>Regresar al formulario</a>";
} else {
  echo "Error al registrar";
}
