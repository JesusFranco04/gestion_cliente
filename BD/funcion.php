<?php

session_start(); // Iniciar sesión

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del formulario
    $usuario = $_POST["username"];
    $contraseña = $_POST["contraseña"];
    $contraseña = hash('sha512', $contraseña);

    // Correos y contraseñas quemados
    $correos_quemados = array("admin@gmail.com", "admin1@gmail.com");
    $contraseña_quemada = "admin2023";

    if (in_array($usuario, $correos_quemados) && $contraseña == hash('sha512', $contraseña_quemada)) {
        // Credenciales válidas, iniciar sesión
        $_SESSION['usuario'] = $usuario;
        header("Location: ../templates/administrador.php"); 
        exit;
    } else {
        echo '<script>alert("Admin incorrecto!"); window.location.href = "../templates/administrador.php";</script>';
    }
}
?>

