// Obtener los datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$operadora = $_POST['operadora'];
$email = $_POST['correo'];
$direccion = $_POST['direccion'];
$telefono = $_POST['telefono'];

// Crear la consulta SQL para insertar los datos
$sql = "INSERT INTO regis_cliente (nombre, apellido, operadora, email, direccion, telefono, date_creation)
        VALUES ('$nombre', '$apellido', '$operadora', '$email', '$direccion', '$telefono', NOW())";

// Ejecutar la consulta
if ($conn->query($sql) === TRUE) {
    echo '<script>alert("Nuevo usuario insertado correctamente.");</script>';
        echo '<script>location.href = "../templates/register.php";</script>';
        exit;
} else {
    echo "Error al insertar el registro: " . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>