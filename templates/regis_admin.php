
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href='../css/boxicons.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/prueba.css">

    <title>Registro_Admin</title>
</head>
<body>

<div class="box">
    <div class="container">
        <form method="post" action="../BD/funcion.php"><br><br><br>
            <div class="top">
                <header>Registra el Usuario admin</header>
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
                    <input type="text" class="input" placeholder="Nombre y apellido" id="nombre" name="nombre" required>
                    <i class='bx bx-user' ></i>
                </div>
                <div class="input-field">   
                    <input type="submit" class="submit" value="Registrar Admin" id="register" name="register">
                </div>
            </div>
        </form>
        
    </div>
    <div class="button-container">
        <a href="../templates/administrador.php" class="button">Volver</a>
    </div>
</div>        
</body>


<script>// Obtener referencias a los elementos HTML
function togglePasswordVisibility() {
    const passwordInput = document.getElementById("contraseña");
    const toggleCheckbox = document.getElementById("toggleCheckbox");

    if (toggleCheckbox.checked) {
        passwordInput.type = "text";
    } else {
        passwordInput.type = "password";
    }
}

</script>


</html>