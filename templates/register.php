
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <title>Registro clientes</title>
  <link rel="stylesheet" href="../css/bootstrap.css">
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
        <form>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group text-white text-center">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombre" required>
              </div>
              <div class="form-group text-white text-center">
                <label for="direccion">Dirección:</label>
                <input type="text" class="form-control" id="direccion" placeholder="Ingrese la dirección" required>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group text-white text-center">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" placeholder="Ingrese el apellido" required>
              </div>
              <div class="form-group text-white text-center">
                <label for="telefono">Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" placeholder="Ingrese el teléfono" required>
              </div>
            </div>
            <div class="col-md-12">
              <div class="form-group text-white text-center">
                <label for="direccion">Correo Electronico:</label>
                <input type="email" class="form-control" id="direccion" placeholder="Ingrese su correo" required>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button type="submit" class="btn bg-success w-75 text-white">Guardar</button>
          </div>
        </form>
        <div class="text-center"><br>
          <a href="../templates/login.html">
            <button type="submit" class="btn btn-danger w-75">Regresar</button>
          </a>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
