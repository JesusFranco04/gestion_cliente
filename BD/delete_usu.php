<?php
require_once 'conexion.php';

if (isset($_POST['id_usur'])) {
    // Obtener el ID del usuario enviado desde el formulario
    $idUsuario = $_POST['id_usur'];
    
    // Sentencia SQL para eliminar el usuario
    $sql = "DELETE FROM usuarios WHERE id_usur = $idUsuario";
    
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("El cliente ha sido eliminado correctamente!"); window.location.href = "../templates/gestion_usuario.php";</script>';
    } else {
        echo "Error al eliminar el usuario: " . $conn->error;
    }
}

// Cerrar la conexión
$conn->close();
?>