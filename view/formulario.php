<?php
$id = isset($_GET['id']) ? $_GET['id'] : "";
$nombres = isset($_GET['nombres']) ? $_GET['nombres'] : "";
$carrera = isset($_GET['carrera']) ? $_GET['carrera'] : "";
$ciclo = isset($_GET['ciclo']) ? $_GET['ciclo'] : "";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>


<body>
  <h2>Gestión de Productos</h2>
  <form method="POST">
    ID:
    <input type="number" name="id" value="<?php echo $id; ?>">
    Nombres:
    <input type="text" name="nombres" value="<?php echo $nombres; ?>">
    Carrera:
    <input type="text" name="carrera" value="<?php echo $carrera; ?>">
    Ciclo:
    <input type="number" name="ciclo" value="<?php echo $ciclo; ?>">
    <button formaction="../api/create.php">
      Crear
    </button>
    <button formaction="../api/read.php">
      Buscar
    </button>
    <button formaction="../api/update.php">
      Actualizar
    </button>
    <button formaction="../api/delete.php">
      Eliminar
    </button>
  </form>
  <?php
  include("../config/conexion.php");
  if ($conexion) {
    echo "<p>LISTADO DE DATOS</p>";
    $sql = "SELECT * FROM estudiantes";
    $result1 = $conexion->query($sql);
    if ($result1->num_rows > 0) {
      echo "<table border='1' width='500px' cellspacing='0' cellpadding='5'>";
      echo "<tr>
        <td>ID</td>
        <td>NOMBRES</td>
        <td>CARRERA</td>
        <td>CICLO</td>
        </tr>";
      while ($row = $result1->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombres"] . "</td>";
        echo "<td>" . $row["carrera"] . "</td>";
        echo "<td>" . $row["ciclo"] . "</td>";
        echo "</tr>";
      }
      echo "</table>";
    }
  }
  ?>
</body>

</html>