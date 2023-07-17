<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$cedula = $_POST['cedula'];
$nomape = $_POST['nomape'];
$telefono = $_POST['telefono'];
$operadora = $_POST['operadora'];
$descripcion = $_POST['descripcion'];


require_once 'conexion.php';
// Crear la consulta SQL para insertar los datos
$sql = "INSERT INTO contacto (cedula, nomape, telefono, operadora, descripcion, date_creation)
        VALUES ('$cedula', '$nomape', '$telefono', '$operadora', '$descripcion', NOW())";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Contacto registrado exitosamente.");</script>';
        echo '<script>location.href = "../templates/about.php";</script>';
        exit;
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();

}
?>




<?php
require_once 'conexion.php';

// Realizar la consulta SQL para obtener los datos de la tabla
$sql = "SELECT * FROM contacto";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Crear la estructura de la tabla
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Id</th>';
    echo '<th>Cedula</th>';
    echo '<th>Nombres y Apellidos</th>';
    echo '<th>Telefono</th>';
    echo '<th>Operadora</th>';
    echo '<th>Descripcion</th>';
    echo '<th>Date_Creation</th>';

    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Iterar sobre los resultados de la consulta
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['cedula'] . '</td>';
        echo '<td>' . $row['nomape'] . '</td>';
        echo '<td>' . $row['telefono'] . '</td>';
        echo '<td>' . $row['operadora'] . '</td>';
        echo '<td>' . $row['descripcion'] . '</td>';
        echo '<td>' . $row['date_creation'] . '</td>';
        

        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'No se encontraron registros.';
}

function obtenerIndiceOperadora($operadora) {
    $opciones = array("claro", "movistar", "tuenti", "cnt");
    return array_search($operadora, $opciones);
}

// Cerrar la conexión
$conn->close();
?>