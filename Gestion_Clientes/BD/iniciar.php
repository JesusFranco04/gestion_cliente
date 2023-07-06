<?php

session_start(); // Iniciar sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del formulario
    $usuario = $_POST["username"];
    $contraseña = $_POST["contraseña"];
    $contraseña = hash('sha512', $contraseña);

    // Incluir el archivo de conexión a la base de datos
    require_once 'conexion.php';

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND contraseña = '$contraseña'";

    // Ejecutar la consulta
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        // Credenciales válidas, iniciar sesión
        $_SESSION['usuario'] = $usuario;
        header("Location: ../templates/index.php"); // Redireccionar al panel de control
        exit;
    } else {
        echo '<script>alert("Usuario o Contraseña incorrectas!"); window.location.href = "../templates/login.php";</script>';
        
        
    }

    // Cerrar la conexión (opcional, ya que se cerrará automáticamente al final del script)
    $conn->close();
}
?>
