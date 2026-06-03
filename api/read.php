<?php
include("../config/conexion.php");
$id = $_POST['id'];
$sql = "SELECT * FROM estudiantes WHERE id='$id'";
$resultado = $conexion->query($sql);
if ($fila = $resultado->fetch_assoc()) {
  header("Location: ../view/formulario.php?id=" . $fila['id'] . "&nombres=" . urlencode($fila['nombres']) . "&carrera=" . urlencode($fila['carrera']) . "&ciclo=" . urlencode($fila['ciclo']));
} else {
  echo "Estudiante no encontrado";
}
