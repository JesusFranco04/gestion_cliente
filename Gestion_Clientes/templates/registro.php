
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
                </div>

                <div class="input-field">
                    <input type="text" class="input" placeholder="Nombres" id="nombre" name="nombre" required>
                    <i class='bx bx-user' ></i>
                </div>

                <div class="input-field">
                    <input type="text" class="input" placeholder="Apellido" id="apellido" name="apellido" required>
                    <i class='bx bx-user' ></i>
                </div>

                <div class="input-field">
                    <input type="tel" class="input" placeholder="Telefono" id="telefono" name="telefono" required>
                    <i class='bx bx-phone' ></i>
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
</html>