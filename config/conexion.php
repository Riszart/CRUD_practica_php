<?php
$conexion = new mysqli(
  "localhost",
  "root",
  "",
  "academico"
);
if ($conexion->connect_error) {
  echo "Error de conexión";
}
