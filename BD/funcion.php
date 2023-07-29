
<?php

session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del formulario
    $usuario = $_POST["username"];
    $contraseña = $_POST["contraseña"];
    $nombre = $_POST["nombre"];
    $contraseña = hash('sha512', $contraseña);

    // Incluir el archivo de conexión a la base de datos
    require_once 'conexion.php';

    // Consulta SQL para insertar un nuevo usuario
    $sql = "INSERT INTO administradores (usuario, contraseña, nombre, date_creation)
            VALUES ('$usuario', '$contraseña', '$nombre', NOW())";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        $_SESSION['usuario'] = $usuario;
        echo '<script>alert("Administrador insertado correctamente.");</script>';
        echo '<script>location.href = "../templates/administrador.php";</script>';
        exit;
    } else {
        echo "Error al insertar el admin: " . $conn->error;
    }

    // Cerrar la conexión (opcional, ya que se cerrará automáticamente al final del script)
    $conn->close();
}
?>
