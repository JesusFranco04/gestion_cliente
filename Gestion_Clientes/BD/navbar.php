<?php
// Ejecutar consulta SQL
$sql = "SELECT nombre FROM usuarios WHERE id = 1"; // Cambia "1" por el ID del usuario que deseas obtener

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Obtener el nombre del usuario
    $row = $result->fetch_assoc();
    $nombreUsuario = $row["nombre"];
} else {
    $nombreUsuario = "Usuario no encontrado";
}

// Cerrar la conexión
$conn->close();
?>
