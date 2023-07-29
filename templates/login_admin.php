
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/prueba.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css">
    <link href='../css/boxicons.css' rel='stylesheet'>

    <title>Administrador</title>

</head>
<body>
     
   <div class="box" style="margin-top: 75px;">
    <div class="container">

        <div class="top">
            <header>Administrador</header>
        </div>
        <form method="post" action="../BD/login_admin.php">
           
            <div class="input-field">
                <input type="email" class="input" placeholder="Username" id="username" name="username" required>
                <i class='bx bx-user' ></i>
            </div>

            <div class="input-field">
                <input type="password" class="input" placeholder="Password" id="contraseña" name="contraseña" required>
                <i class="bx bx-lock-alt"></i><br>
                <label for="toggleCheckbox" style="color: white;">
                    <input  type="checkbox" id="toggleCheckbox" onclick="togglePasswordVisibility()">
                    Mostrar contraseña
                </label>
            </div>
            <br>

            <div class="input-field">
                <input type="submit" class="submit" value="Iniciar" id="inicio" name="inicio">
            </div>
            
        </form>
        <div class="input-field"><br>
                <a href="../templates/login.php">
                    <input type="submit" class="submit" value="Regresar" id="regresar" name="regresar">
                </a>
            </div>
      
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

