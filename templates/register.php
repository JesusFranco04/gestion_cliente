
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
      <form>
        <div class="row">
          <div class="col-md-6">
            <div class="form-group text-white text-center">
              <label for="nombre">Nombres:</label>
              <input type="text" class="form-control" id="nombre" placeholder="Ingrese el nombres" required>
            </div>
            <div class="form-group text-white text-center">
              <label for="telefono">Telefono:</label>
              <input type="tel" class="form-control" id="telefono" placeholder="Ingrese su telefono" required>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group text-white text-center">
              <label for="apellido">Apellidos:</label>
              <input type="text" class="form-control" id="apellido" placeholder="Ingrese el apellidos" required>
            </div>
            <div class="form-group text-white text-center">
              <label for="operadora">Operadora:</label>
              <select class="form-control" id="operadora">
                <option value="">Seleccionar</option>
                <option value="claro">Claro</option>
                <option value="movistar">Movistar</option>
                <option value="claro">Claro</option>
                <option value="movistar">Movistar</option>
                <option value="claro">Claro</option>
                <option value="movistar">Movistar</option>
              </select>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group text-white text-center">
              <label for="email">Correo Electrónico:</label>
              <input type="email" class="form-control" id="email" placeholder="Ingrese su correo" required>
            </div>
            <div class="form-group text-white text-center">
              <label for="direccion">Direccion:</label>
              <input type="text" class="form-control" id="direccion" placeholder="Ingrese su direccion" required>
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
