<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del formulario
    $usuario = $_POST["username"];
    $contraseña = $_POST["contraseña"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $date_creation = date("Y-m-d"); // Fecha actual
    $contraseña = hash('sha512', $contraseña);

    // Incluir el archivo de conexión a la base de datos
    require_once 'conexion.php';

    // Consulta SQL para insertar un nuevo usuario
    $sql = "INSERT INTO usuarios (usuario, contraseña, nombre, apellido, telefono, date_creation)
            VALUES ('$usuario', '$contraseña', '$nombre', '$apellido', '$telefono', '$date_creation')";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo '<script>alert("Nuevo usuario insertado correctamente.");</script>';
        echo '<script>location.href = "../templates/login.php";</script>';
        exit;
    } else {
        echo "Error al insertar el usuario: " . $conn->error;
    }

    // Cerrar la conexión (opcional, ya que se cerrará automáticamente al final del script)
    $conn->close();
}
?>




