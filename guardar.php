<?php
include "conexion.php";

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$carrera = $_POST['carrera'];
$semestre = $_POST['semestre'];

$sql = "INSERT INTO estudiantes (nombre, apellido, carrera, semestre)
        VALUES ('$nombre', '$apellido', '$carrera', '$semestre')";

if ($conn->query($sql) === TRUE) {
    echo "Registro guardado correctamente";
} else {
    echo "Error: " . $conn->error;
}

$conn->close();
?>