<?php
require_once 'conexion.php';

if (isset($_POST['id_cliente'])) {
    // Obtener el ID del usuario enviado desde el formulario
    $idUsuario = $_POST['id_cliente'];
    
    // Sentencia SQL para eliminar el usuario
    $sql = "DELETE FROM regis_cliente WHERE id_cliente = $idUsuario";
    
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("El cliente ha sido eliminado correctamente!"); window.location.href = "../templates/gestion_clientes.php";</script>';
    } else {
        echo "Error al eliminar el usuario: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>
