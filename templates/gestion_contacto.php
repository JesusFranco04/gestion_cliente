<?php 

    session_start();
    if(!isset($_SESSION['usuario'])){
        echo '
        <script>alert("Por favor Identificate");
        window.location = "../templates/login_admin.php";
        </script>;
        ';
      session_destroy();
      die();
      
    }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link
      rel="stylesheet"
      href="../css/Bootstrap/bootstrap.css"
    />
    <link
      rel="stylesheet"
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
    />
    <title>ADMINISTRADOR</title>
    <link rel="stylesheet" href="../css/index.css" />
  </head>
  <style>
    body {
      align-items: center;
      margin-top: 100px;
      justify-content: center;
      background: url(../imagenes/admin.jpg) no-repeat center center fixed;
      background-size: cover;
    }

  </style>
  <body>
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
                  href="../templates/gestion_contacto.php"
                  ><i class='bx bx-phone'></i> Gestion_Contacto</a
                >
              </li>
              <li class="nav-item">
                <a
                  class="nav-link text-white"
                  href="../templates/regis_admin.php"
                  ><i class='bx bx-user'></i> Registro de Administradores</a
                >
              </li>
            </ul>
          </div>
          <div class="offcanvas-footer">
            <form class="d-flex" role="search" action="../BD/cerraradmin.php">
              <button class="btn btn-success w-100" type="submit"
                ><i class='bx bx-exit'></i> Salir</button
              >
            </form>
          </div>
        </div>
      </div>
    </nav>

    <div class="container">
      <h1 class="mt-5 text-center">Tabla de Registro Contactos</h1>
      <div class="mb-5 mt-5">
        <input
          type="text"
          class="form-control"
          id="filtroCliente"
          placeholder="Filtrar Cliente"
          onkeyup="filtrarClientes()"
        />
      </div>

      <?php
      require_once '../BD/contacto.php';
      ?>
    </div>

    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
      function filtrarClientes() {
        var input = document.getElementById("filtroCliente");
        var filter = input.value.toUpperCase();
        var table = document.getElementsByTagName("table")[0];
        var rows = table.getElementsByTagName("tr");

        for (var i = 1; i < rows.length; i++) {
          var cells = rows[i].getElementsByTagName("td");
          var match = false;

          for (var j = 0; j < cells.length; j++) {
            var cell = cells[j];
            if (cell) {
              var value = cell.textContent || cell.innerText;
              if (value.toUpperCase().indexOf(filter) > -1) {
                match = true;
                break;
              }
            }
          }

          if (match) {
            rows[i].style.display = "";
          } else {
            rows[i].style.display = "none";
          }
        }
      }
    </script>

    
  </body>
</html>
