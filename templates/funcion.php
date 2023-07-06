
<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Información de usuarios
    $usuarios = array(
        array('username' => 'jesus', 'password' => '123456'),
        array('username' => 'angie', 'password' => '123456'),
        array('username' => 'nicolle', 'password' => '123456'),
        array('username' => 'moises', 'password' => '123456')
    
    );

    $usuarioEncontrado = false;

    foreach ($usuarios as $usuario) {
        if ($username === $usuario['username'] && $password === $usuario['password']) {
            $usuarioEncontrado = true;
            break;
        }
    }

    if ($usuarioEncontrado) {
        header('Location: index.php');
        exit();
    } else {
        echo '<script>alert("Usuario o contraseña incorrectos"); window.location.href = "login.php";</script>';
    }
}
?>
