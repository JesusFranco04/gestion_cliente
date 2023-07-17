<?php

    

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Datos del formulario
    $usuario = $_POST["username"];
    $contraseña = $_POST["contraseña"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $contraseña = hash('sha512', $contraseña);

    // Incluir el archivo de conexión a la base de datos
    require_once 'conexion.php';

    // Consulta SQL para insertar un nuevo usuario
    $sql = "INSERT INTO usuarios (usuario, contraseña, nombre, apellido, telefono, date_creation)
            VALUES ('$usuario', '$contraseña', '$nombre', '$apellido', '$telefono', NOW())";

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        $_SESSION['usuario'] = $usuario;
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


<?php
require_once 'conexion.php';

// Define tu clave de encriptación

// Realizar la consulta SQL para obtener los datos de la tabla
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Crear la estructura de la tabla
    echo '<table class="table">';
    echo '<thead>';
    echo '<tr>';
    echo '<th>Id_usuarios</th>';
    echo '<th>Correo Electronico</th>';
    echo '<th>Nombres</th>';
    echo '<th>Apellidos</th>';
    echo '<th>Telefono</th>';
    echo '<th>Date_Creation</th>';
    echo '<th>Acciones</th>';
    echo '</tr>';
    echo '</thead>';
    echo '<tbody>';

    // Iterar sobre los resultados de la consulta
    while ($row = $result->fetch_assoc()) {
        echo '<tr>';
        echo '<td>' . $row['id_usur'] . '</td>';
        echo '<td>' . $row['usuario'] . '</td>';
        echo '<td>' . $row['nombre'] . '</td>';
        echo '<td>' . $row['apellido'] . '</td>';
        echo '<td>' . $row['telefono'] . '</td>';
        echo '<td>' . $row['date_creation'] . '</td>';
        echo '<td>';
        echo '<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalActualizar" data-id="' . $row['id_usur'] . '"
        data-username="' . $row['usuario'] . '"
        data-nombre="' . $row['nombre'] . '"
        data-apellido="' . $row['apellido'] . '"
        data-telefono="' . $row['telefono'] . '"
        onclick="cargarDatos(' . $row['id_usur'] . ')"><i class="bx bx-edit"></i></button>';
        echo '<form id="formEliminar_' . $row['id_usur'] . '" method="POST" action="../BD/delete_usu.php">';
        echo '<input type="hidden" name="id_usur" value="' . $row['id_usur'] . '">';
        echo '<button type="button" class="btn btn-danger" onclick="eliminarUsuario(' . $row['id_usur'] . ')"><i class="bx bx-trash"></i></button>';
        echo '</form>';

        echo '</td>';
        echo '</tr>';
    }

    echo '</tbody>';
    echo '</table>';
} else {
    echo 'No se encontraron registros.';
}

// Cerrar la conexión
$conn->close();
?>


<script>
function eliminarUsuario(idUsuario) {
  if (confirm("¿Estás seguro de que deseas eliminar este usuario?")) {
    var formId = 'formEliminar_' + idUsuario;
    var form = document.getElementById(formId);
    
    // Crear una nueva solicitud AJAX
    var xhr = new XMLHttpRequest();
    
    // URL del archivo PHP que procesará el formulario
    var url = form.getAttribute('action');
    
    // Datos a enviar en la solicitud POST (el ID del usuario)
    var params = 'id_usur=' + idUsuario;

    
    // Configurar la solicitud
    xhr.open('POST', url, true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    
    // Manejar la respuesta de la solicitud
    xhr.onreadystatechange = function() {
      if (xhr.readyState == 4 && xhr.status == 200) {
        // Mostrar la respuesta en la consola
        console.log(xhr.responseText);
        
        // Actualizar la página o realizar otras acciones necesarias
        location.reload();
      }
    };
    
    // Enviar la solicitud
    xhr.send(params);
  }
}
</script>













