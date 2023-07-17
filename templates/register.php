<?php 

    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
        <script>alert("Por favor debes inicar sesion");
        window.location = "../templates/login.php";
        </script>;
        ';
      session_destroy();
      die();
      
    }

?>


<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Registro clientes</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/index.css">
  <link rel="stylesheet" href="funcion.php">
</head>
<body class="fondo">
  <?php
  include_once('navbar.php');
  ?>
  <div class="container">
  <h1 class="text-center mt-5 text-white">Registro de Cliente</h1>
  <div class="row">
    <div class="col-md-8 offset-md-2">
      <form action="../BD/regis_cliente.php" method="POST">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group text-white text-center">
              <label for="nombre">Nombres:</label>
              <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese el nombres" required>
            </div>
            <div class="form-group text-white text-center">
              <label for="telefono">Telefono:</label>
              <input type="tel" class="form-control" id="telefono" name="telefono" oninput="validarTelefono(this)" placeholder="Ingrese su telefono" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group text-white text-center">
              <label for="apellido">Apellidos:</label>
              <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingrese el apellidos" required>
            </div>
            <div class="form-group text-white text-center">
              <label for="operadora">Operadora:</label>
              <select class="form-control" id="operadora" name="operadora" required>
                <option value="">Seleccionar</option>
                <option value="claro" id="operadora" name="operadora">Claro</option>
                <option value="movistar" id="operadora" name="operadora">Movistar</option>
                <option value="tuenti" id="operadora" name="operadora">tuenti</option>
                <option value="cnt" id="operadora" name="operadora">cnt</option>

              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group text-white text-center">
              <label for="email">Correo Electrónico:</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="Ingrese su correo" required>
            </div>
            <div class="form-group text-white text-center">
              <label for="direccion">Direccion:</label>
              <input type="text" class="form-control" id="direccion" name="direccion" placeholder="Ingrese su direccion" required>
            </div>
          </div>
        </div>
        <div class="text-center">
          <button type="submit" class="btn bg-success w-75 text-white">Guardar</button>
        </div>
      </form>
    </div>
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
