<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link rel="stylesheet" href="../css/Bootstrap/bootstrap.css" />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    />
    <title>Listado de clientes</title>
    <link rel="stylesheet" href="../css/index.css" />
  </head>
  <style>
    body {
      align-items: center;
      justify-content: center;
      background: url(../imagenes/admin.jpg) no-repeat center center fixed;
      background-size: cover;
      display: flex; /* Establece el contenedor principal como flexbox */
        height: 100vh; /* Establece el alto del contenedor principal al 100% del viewport */
      }

      .content {
       
        text-align: center; /* Centra el contenido horizontalmente */
        margin-top: auto; /* Mueve el contenido hacia la parte superior */
        margin-bottom: auto; /* Mueve el contenido hacia la parte inferior */
      }
    </style>
  <body>
    <div class="content">
      <h1 style="font-size: 100px;color:black;font-weight: bold;">Bienvenido Admin</h1>
    </div>
    <nav class="navbar navbar-dark bg-primary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand">ADMINISTRADOR <i class='bx bx-user'></i></a>
        <button
          class="navbar-toggler bg-dark"
          type="button"
          data-bs-toggle="offcanvas"
          data-bs-target="#offcanvasDarkNavbar"
          aria-controls="offcanvasDarkNavbar"
          aria-label="Toggle navigation"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="offcanvas offcanvas-end text-bg-dark bg-primary"
          tabindex="-1"
          id="offcanvasDarkNavbar"
          aria-labelledby="offcanvasDarkNavbarLabel"
        >
          <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel"
              >Tablas de datos y registros</h5
            >
            <button
              type="button"
              class="btn-close btn-close-white"
              data-bs-dismiss="offcanvas"
              aria-label="Close"
            ></button>
          </div>
          <div class="offcanvas-body">
            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
              <li class="nav-item">
                <a
                  class="nav-link text-white"
                  href="../templates/gestion_clientes.php"
                  ><i class='bx bx-user'></i> Gestion_Clientes</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link text-white"
                  href="../templates/gestion_usuario.php"
                  ><i class='bx bx-user'></i> Gestion_Usuarios</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link text-white"
                  href="../templates/gestion_llamadas.php"
                  ><i class='bx bx-phone'></i> Gestion_Llamadas</a
                >
              </li>
            </ul>
          </div>
          <div class="offcanvas-footer">
            <form class="d-flex" role="search">
              <button class="btn btn-success w-100" type="submit"
                ><i class='bx bx-exit'></i> Salir</button
              >
            </form>
          </div>
        </div>
      </div>
    </nav>


    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
  </body>
</html>

