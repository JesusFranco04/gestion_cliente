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