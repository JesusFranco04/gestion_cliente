
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href='../css/boxicons.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/prueba.css">

    <title>Login/Registro</title>
</head>
<body>

<div class="box">
    <div class="container">
        <form method="post" action="../BD/usuarios.php"><br><br><br>
            <div class="top">
                <header>Registrate</header>
            </div><br>
        <div class="input-field">
                    <input type="email" class="input" placeholder="Username" id="username" name="username" required>
                    <i class='bx bx-user' ></i>
                </div>

                <div class="input-field">
                    <input type="Password" class="input" placeholder="Password" id="contraseña" name="contraseña" required>
                    <i class='bx bx-lock-alt'></i>
                    <br>
                <label for="toggleCheckbox" style="color: white;">
                    <input  type="checkbox" id="toggleCheckbox" onclick="togglePasswordVisibility()">
                    Mostrar contraseña
                </label>
                </div><br>

                <div class="input-field">
                    <input type="text" class="input" placeholder="Nombres" id="nombre" name="nombre" required>
                    <i class='bx bx-user' ></i>
                </div>

                <div class="input-field">
                    <input type="text" class="input" placeholder="Apellido" id="apellido" name="apellido" required>
                    <i class='bx bx-user' ></i>
                </div>

                <div class="input-field">
                    <input type="text" class="input" placeholder="Telefono" id="telefono" name="telefono" oninput="validarTelefono(this)" required>
                    <i class='bx bx-phone'></i>
                </div>

                <div class="input-field">   
                    <input type="submit" class="submit" value="Registrar" id="register" name="register">
                </div>
            </div>
        </form>
        
    </div>
    <div class="button-container">
        <a href="../templates/login.php" class="button">Volver</a>
    </div>
</div>        
</body>

<script>
function validarTelefono(input) {
    // Obtener el valor ingresado en el campo de entrada
    var telefono = input.value;

    // Eliminar cualquier carácter que no sea un número
    telefono = telefono.replace(/\D/g, '');

    // Limitar el número de dígitos a 10
    telefono = telefono.slice(0, 10);

    // Actualizar el valor del campo de entrada con los dígitos válidos
    input.value = telefono;
}
</script>
</html>