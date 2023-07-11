<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$apellido = $_POST['apellido'];
$operadora = $_POST['operadora'];
$email = $_POST['email'];
$direccion = $_POST['direccion'];


require_once 'conexion.php';
// Crear la consulta SQL para insertar los datos
$sql = "INSERT INTO regis_cliente (nombre, telefono, apellido, operadora, email, direccion, date_creation)
        VALUES ('$nombre', '$telefono', '$apellido', '$operadora', '$email', '$direccion', NOW())";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Cliente registrado correctamente.");</script>';
        echo '<script>location.href = "../templates/register.php";</script>';
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
$sql = "SELECT * FROM regis_cliente";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Crear la estructura de la tabla
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Id_cliente</th>';
    echo '<th>Nombres</th>';
    echo '<th>Telefono</th>';
    echo '<th>Apellidos</th>';
    echo '<th>Operadora</th>';
    echo '<th>Correo Electrónico</th>';
    echo '<th>Dirección</th>';
    echo '<th>Date_Creation</th>';
    echo '<th>Acciones</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Iterar sobre los resultados de la consulta
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id_cliente'] . '</td>';
        echo '<td>' . $row['nombre'] . '</td>';
        echo '<td>' . $row['telefono'] . '</td>';
        echo '<td>' . $row['apellido'] . '</td>';
        echo '<td>' . $row['operadora'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['direccion'] . '</td>';
        echo '<td>' . $row['date_creation'] . '</td>';
        echo '<td>';
        echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalActualizar" data-id="' . $row['id_cliente'] . '"
        data-nombre="' . $row['nombre'] . '"
        data-telefono="' . $row['telefono'] . '"
        data-apellido="' . $row['apellido'] . '"
        data-operadora-index="' . obtenerIndiceOperadora($row['operadora']) . '"
        data-email="' . $row['email'] . '"
        data-direccion="' . $row['direccion'] . '"
        onclick="cargarDatos(' . $row['id_cliente'] . ')"><i class="bx bx-edit"></i></button>';
        echo '<button type="button" class="btn btn-danger"><i class="bx bx-trash"></i></button>';
        echo '</td>';
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









