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