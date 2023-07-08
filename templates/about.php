<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <title>Inicio</title>
    <link rel="stylesheet" href="../css/index.css">
    
</head>
<body class="fondo">
        <?php
        include_once('navbar.php');
        ?>
        <section id="contacto" class="section-contacto">
            <div class="container text-white">
              <h2 class="section-title text-white text-center mt-3">Contáctanos</h2>
              <div class="row justify-content-center">
                <div class="col-md-6 bg-secondary bg-gradient text-center">
                  <form action="../BD/contacto.php" method="POST">
                  <div class="form-group mt-3">
                      <label for="cedula" class="text-white">Cedula</label>
                      <input type="tel" class="form-control" id="cedula" name="cedula" placeholder="Ingresa su cedula">
                    </div>
                    <div class="form-group mt-3">
                      <label for="nomape" class="text-white">Nombres y Apellidos</label>
                      <input type="text" class="form-control" id="nomape" name="nomape" placeholder="Ingresa tu nombres y apellidos">
                    </div>
                    
                    <div class="row">
                      <div class="col-md-6">
                        <div class="form-group mt-3">
                          <label for="telefono" class="text-white">Teléfono</label>
                          <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ingresa su número de teléfono">
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="form-group mt-3">
                          <label for="operadora" class="text-white">Operadora</label>
                          <select class="form-control" id="operadora" name="operadora">
                          <option value="">Seleccionar Operadora</option>
                            <option value="claro" id="operadora" name="operadora">Claro</option>
                            <option value="movistar" id="operadora" name="operadora">Movistar</option>
                            <!-- Agrega más opciones de operadoras aquí si es necesario -->
                          </select>
                        </div>
                      </div>
                    </div>
                      
                    <div class="form-group">
                      <label for="descripcion" class="text-white">Descripcion</label>
                      <textarea class="form-control" id="descripcion" name="descripcion" rows="5" placeholder="Escribe tu mensaje de su consulta"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary mt-2 w-50">Enviar</button>
                  </form><br>
                </div>
              </div>
            </div>
          </section>
           <br><br>




        <?php
        include_once('footer.php');
        ?>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
      </body>
</html>