<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8" />
    <link
      rel="stylesheet"
      href="../css/bootstrap.css"
    />
    <title>Listado de clientes</title>
    <link rel="stylesheet" href="../css/index.css" />
  </head>
  <body class="bg-primary bg-gradient">
    <div class="container">
      <h1 class="mt-5 text-center">Tabla de Registro Clientes</h1>
      <div class="mb-5 mt-5">
        <input
          type="text"
          class="form-control"
          id="filtroCliente"
          placeholder="Filtrar Cliente"
          onkeyup="filtrarClientes()"
        />
      </div>

      <table class="table">
        <thead>
          <tr>
            <th>Nombres</th>
            <th>Apellidos</th>
            <th>Dirección</th>
            <th>Teléfono</th>
            <th>Correo Electrónico</th>
            <th>Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>Adnely</td>
            <td>Alvarado</td>
            <td>Isla trinitaria</td>
            <td>0957623415</td>
            <td>nani@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Carla</td>
            <td>Espinoza</td>
            <td>Guasmo sur</td>
            <td>0987463255</td>
            <td>carlaespi@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Jeimmy</td>
            <td>Romero</td>
            <td>Independencia 1</td>
            <td>0947852365</td>
            <td>jeimmyace@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Isabel</td>
            <td>Mendez</td>
            <td>Suburbio</td>
            <td>0987654389</td>
            <td>isamendez@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Angee</td>
            <td>Soriano</td>
            <td>Estación de la 28</td>
            <td>0973644123</td>
            <td>angeesori@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Dylan</td>
            <td>Molina</td>
            <td>Guasmo sur</td>
            <td>0987634562</td>
            <td>dylanmoli@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Paul</td>
            <td>Mendoza</td>
            <td>Floresta</td>
            <td>0765489328</td>
            <td>paulmendo@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Erick</td>
            <td>Tumbaco</td>
            <td>Doble cancha</td>
            <td>0987643221</td>
            <td>ericktumba@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Luis</td>
            <td>Lopez</td>
            <td>Guasmo central</td>
            <td>0999784687</td>
            <td>luislop@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Moises</td>
            <td>Cortez</td>
            <td>Pradera 1</td>
            <td>0977844623</td>
            <td>moicortez@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Carlos</td>
            <td>Villao</td>
            <td>Guasmo norte</td>
            <td>0988635441</td>
            <td>carlosvilla@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Karen</td>
            <td>Rivas</td>
            <td>Guasmo sur</td>
            <td>0974626647</td>
            <td>kareriva@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Helany</td>
            <td>Navarrete</td>
            <td>Union de bananeros</td>
            <td>0987465235</td>
            <td>helynava@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Meloddy</td>
            <td>Suarez</td>
            <td>Pablo neruda</td>
            <td>0994477335</td>
            <td>melosuarez@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
          <tr>
            <td>Josue</td>
            <td>Chilan</td>
            <td>La Joya</td>
            <td>0986335526</td>
            <td>josuechil@example.com</td>
            <td>
              <button
                type="button"
                class="btn btn-success"
                data-toggle="modal"
                data-target="#modalActualizar"
              >
                Actualizar
              </button>
              <button type="button" class="btn btn-danger">Eliminar</button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>

    <!-- Modal Actualizar -->
    <div
      class="modal fade"
      id="modalActualizar"
      tabindex="-1"
      aria-labelledby="modalActualizarLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content bg-success">
          <div class="modal-header">
            <h5 class="modal-title" id="modalActualizarLabel">
              Actualizar Cliente
            </h5>
            <button
              type="button"
              class="close"
              data-dismiss="modal"
              aria-label="Close"
            >
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body bg-success text-center">
            <form>
              <div class="mb-3">
                <label for="nombres" class="form-label">Nombres</label>
                <input type="text" class="form-control" id="nombres" />
              </div>
              <div class="mb-3">
                <label for="apellidos" class="form-label">Apellidos</label>
                <input type="text" class="form-control" id="apellidos" />
              </div>
              <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" />
              </div>
              <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" />
              </div>
              <div class="mb-3">
                <label for="correo" class="form-label"
                  >Correo Electrónico</label
                >
                <input type="email" class="form-control" id="correo" />
              </div>
            </form>
          </div>
          <div class="modal-footer justify-content-center">
            <button
              type="button"
              class="btn btn-danger"
              data-dismiss="modal"
            >
              Cerrar
            </button>
            <button type="button" class="btn btn-primary">
              Guardar Cambios
            </button>
          </div>
        </div>
      </div>
    </div>

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
