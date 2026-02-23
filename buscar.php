<?php
include "conexion.php";

$busqueda = $_GET['busqueda'];

$sql = "SELECT * FROM estudiantes WHERE nombre LIKE '%$busqueda%'";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Resultados de búsqueda</title>

<style>

body{
    font-family: Arial, sans-serif;
    background-color:#f5f1e6;
    margin:0;
    padding:20px;
}

h2{
    color:#5c3a21;
    text-align:center;
}

/* ===== Tabla ===== */

table{
    width:80%;
    margin:20px auto;
    border-collapse: collapse;
    background-color:#fff8ef;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    border-radius:8px;
    overflow:hidden;
}

th{
    background-color:#6b4226;
    color:white;
    padding:12px;
    font-size:18px;
}

td{
    padding:10px;
    text-align:center;
    border-bottom:1px solid #d9c2a3;
}

tr:nth-child(even){
    background-color:#f2e3d5;
}

tr:hover{
    background-color:#e6d2bd;
}

/* Botón volver */

.boton{
    display:block;
    width:200px;
    margin:25px auto;
    text-align:center;
    background-color:#6b4226;
    color:white;
    padding:10px;
    text-decoration:none;
    border-radius:5px;
    font-weight:bold;
}

.boton:hover{
    background-color:#8b5e3c;
}

.mensaje{
    text-align:center;
    font-size:20px;
    color:#5c3a21;
    margin-top:40px;
}

</style>
</head>

<body>

<h2>Resultados de búsqueda</h2>

<?php

if ($result->num_rows > 0) {

    echo "<table>";
    echo "<tr>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Carrera</th>
            <th>Semestre</th>
          </tr>";

    while ($fila = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$fila['nombre']}</td>
                <td>{$fila['apellido']}</td>
                <td>{$fila['carrera']}</td>
                <td>{$fila['semestre']}</td>
              </tr>";
    }

    echo "</table>";

} else {

    echo "<p class='mensaje'>No se encontraron resultados</p>";

}

$conn->close();
?>

<a href="index.html" class="boton">Volver</a>

</body>
</html>