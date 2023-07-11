<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos enviados por el formulario
    $id_cliente = $_POST['id'];

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $apellido = $_POST['apellido'];
    $operadora = $_POST['operadora'];
    $email = $_POST['email'];
    $direccion = $_POST['direccion'];

    // Realizar la actualización en la base de datos utilizando los datos recibidos
    require_once 'conexion.php';

    // Preparar la consulta SQL con marcadores de posición
    $sql = "UPDATE regis_cliente SET nombre = ?, telefono = ?, apellido = ?, operadora = ?, email = ?, direccion = ?, date_creation = NOW() WHERE id_cliente = ? LIMIT 1";

    // Preparar la sentencia
    $stmt = $conn->prepare($sql);

    // Vincular los parámetros con los valores recibidos del formulario
    $stmt->bind_param("ssssssi", $nombre, $telefono, $apellido, $operadora, $email, $direccion, $id_cliente);

    // Ejecutar la sentencia
    if ($stmt->execute()) {
        // Actualización exitosa
        echo '<script>alert("Los datos se actualizaron correctamente.");</script>';
        echo '<script>window.location.href = "../templates/gestion_clientes.php";</script>';
        exit;
    } else {
        // Error al actualizar
        echo '<script>alert("Ocurrió un error al actualizar los datos: ' . $stmt->error . '");</script>';
        echo '<script>window.location.href = "../templates/gestion_clientes.php";</script>';
        exit;
    }

    // Cerrar la sentencia y la conexión
    $stmt->close();
    $conn->close();
} else {
    echo '<script>alert("Método de solicitud no válido.");</script>';
    echo '<script>window.location.href = "../templates/gestion_clientes.php";</script>';
    exit;
}
?>
