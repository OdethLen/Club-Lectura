<?php
include "conexion.php";

header("Content-Type: text/xml");
header("Content-Disposition: attachment; filename=estudiantes.xml");

echo "<?xml version='1.0' encoding='UTF-8'?>";
echo "<estudiantes>";

$sql = "SELECT * FROM estudiantes";
$result = $conn->query($sql);

while ($fila = $result->fetch_assoc()) {

    echo "<estudiante>";
    echo "<nombre>{$fila['nombre']}</nombre>";
    echo "<apellido>{$fila['apellido']}</apellido>";
    echo "<carrera>{$fila['carrera']}</carrera>";
    echo "<semestre>{$fila['semestre']}</semestre>";
    echo "</estudiante>";

}

echo "</estudiantes>";

$conn->close();
?>