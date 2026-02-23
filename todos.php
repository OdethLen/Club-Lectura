<?php
include "conexion.php";

$sql = "SELECT * FROM estudiantes";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Todos los registros</title>

<style>
body{
    font-family: Arial, sans-serif;
    background-color:#f5f1e6;
    margin:0;
    padding:30px;
}

h2{
    color:#5c3a21;
    text-align:center;
}

.tabla-contenedor{
    max-width:900px;
    margin:30px auto;
    background-color:#fff8ef;
    padding:20px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,0.15);
}

table{
    width:100%;
    border-collapse:collapse;
}

th{
    background-color:#6b4226;
    color:white;
    padding:12px;
}

td{
    padding:10px;
    border-bottom:1px solid #d9c2a3;
    text-align:center;
}

tr:hover{
    background-color:#f0e1d2;
}

.boton{
    display:inline-block;
    margin:10px 5px;
    padding:10px 20px;
    background-color:#6b4226;
    color:white;
    text-decoration:none;
    border-radius:5px;
}

.boton:hover{
    background-color:#8b5e3c;
}
</style>
</head>

<body>

<div class="tabla-contenedor">

<h2>Registro de los miembros del club</h2>

<a href="exportar_xml.php" class="boton">Exportar a XML</a>
<a href="index.html" class="boton">Volver</a>

<table>
<tr>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Carrera</th>
    <th>Semestre</th>
</tr>

<?php
if ($result->num_rows > 0) {
    while ($fila = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$fila['nombre']}</td>
                <td>{$fila['apellido']}</td>
                <td>{$fila['carrera']}</td>
                <td>{$fila['semestre']}</td>
              </tr>";
    }
} else {
    echo "<tr><td colspan='4'>No hay registros</td></tr>";
}
?>

</table>

</div>

</body>
</html>

<?php
$conn->close();
?>