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
                  <form>
                    <div class="form-group mt-3">
                      <label for="nombre" class="text-white">Nombre</label>
                      <input type="text" class="form-control" id="nombre" placeholder="Ingresa tu nombre">
                    </div>
                    <div class="form-group">
                      <label for="correo" class="text-white">Correo Electrónico</label>
                      <input type="email" class="form-control" id="correo" placeholder="Ingresa tu correo electrónico">
                    </div>
                    <div class="form-group mt-3">
                      <label for="telefono" class="text-white">Telefono</label>
                      <input type="tel" class="form-control" id="telefono" placeholder="Ingresa su numero de telefono">
                    </div>
                    <div class="form-group">
                      <label for="mensaje" class="text-white">Mensaje</label>
                      <textarea class="form-control" id="mensaje" rows="5" placeholder="Escribe tu mensaje"></textarea>
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