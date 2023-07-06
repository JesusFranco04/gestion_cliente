<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/prueba.css">
    
    <link href='../css/boxicons.css' rel='stylesheet'>

    <title>Login</title>

</head>
<body>
   <div class="box">
    <div class="container">

        <div class="top">
            <header>Login</header>
        </div>
        <form method="post" action="../BD/iniciar.php">
           
            <div class="input-field">
                <input type="email" class="input" placeholder="Username" id="username" name="username" required>
                <i class='bx bx-user' ></i>
            </div>

            <div class="input-field">
                <input type="Password" class="input" placeholder="Password" id="contraseña" name="contraseña" required>
                <i class='bx bx-lock-alt'></i>
            </div>

            <div class="input-field">
                <input type="submit" class="submit" value="Iniciar Sesion" id="inicio" name="inicio">
            </div>
            
        </form>
        <div class="input-field"><br>
                <a href="../templates/registro.php">
                    <input type="submit" class="submit" value="Registrate" id="register" name="register">
                </a>
            </div>
    </div>
   </div>  
</body>
</html>