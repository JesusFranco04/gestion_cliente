<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos enviados por el formulario
    $id_usur = $_POST['id'];
    $usuario = $_POST['username'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $telefono = $_POST['telefono'];

    // Realizar la actualización en la base de datos utilizando los datos recibidos
    require_once 'conexion.php';

    // Preparar la consulta SQL con marcadores de posición
    $sql = "UPDATE usuarios SET usuario = ?, nombre = ?, apellido = ?, telefono = ?, date_creation = NOW() WHERE id_usur = ? LIMIT 1";

    // Preparar la sentencia
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros con los valores recibidos del formulario
    $stmt->bind_param("ssssi", $usuario, $nombre, $apellido, $telefono, $id_usur);

    // Ejecutar la sentencia
    if ($stmt->execute()) {
        // Actualización exitosa
        echo '<script>alert("Los datos se actualizaron correctamente.");</script>';
        echo '<script>window.location.href = "../templates/gestion_usuario.php";</script>';
        exit;
    } else {
        // Error al actualizar
        echo '<script>alert("Ocurrió un error al actualizar los datos: ' . $stmt->error . '");</script>';
        echo '<script>window.location.href = "../templates/gestion_usuario.php";</script>';
        exit;
    }

    // Cerrar la sentencia y la conexión
    $stmt->close();
    $conn->close();
} else {
    echo '<script>alert("Método de solicitud no válido.");</script>';
    echo '<script>window.location.href = "../templates/gestion_usuario.php";</script>';
    exit;
}

?>
