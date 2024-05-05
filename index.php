<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <title>cine</title>
</head>

<body>
  <nav class="navbar bg-dark border-bottom border-body" data-bs-theme="dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">Navbar</a>
    </div>
  </nav>

  <div class="containerr">
    <div class="boton-encabezado">
      <button class="btn btn-outline-success" data-bs-target="#exampleModal" data-bs-toggle="modal">Agregar Pelicula</button>
    </div>
    <div class="contenedor">
      <h1>Cine</h1>
      <table id="tabla-conteiner" class="table table-bordered table-hover dataTable dtr-inline">
        <thead>
          <tr>
            <th class="sorting sorting_asc">#</th>
            <th class="sorting">Nombre</th>
            <th class="sorting">Estreno</th>
            <th class="sorting">Director</th>
            <th class="sorting">estudio</th>
            <th class="sorting">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <tr class="even">
            <td class="sorting_1 dtr-control">Gecko</td>
            <td>Mozilla 1.0</td>
            <td>Win 95+ / OSX.1+</td>
            <td>1</td>
            <td>A</td>
            <td>
              <div class="btn-group">
                <button type="button" class="btn btn-warning">Action</button>
                <button type="button" class="btn btn-warning dropdown-toggle dropdown-toggle-split" data-bs-toggle="dropdown" aria-expanded="false">
                  <span class="visually-hidden">Toggle Dropdown</span>
                </button>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" id="btnEditar">Editar</a></li>
                  <li><a class="dropdown-item" id="btnEliminar">eliminar</a></li>
                </ul>
              </div>
            </td>
          </tr>
        </tbody>
        <tfoot>

        </tfoot>
      </table>
    </div>
  </div>
  <script src="./jquery.js"> </script>
  <script src="./script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>

</html>


<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Agregar Pelicula</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label class="form-label">Nombre de la pelicula</label>
            <input type="email" class="form-control" id="nombrePelicula">
          </div>
          <div class="mb-3">
            <label class="form-label">Estreno</label>
            <input type="text" class="form-control" id="estrenoPel">
          </div>
          <div class="mb-3 ">
            <label class="form-label">Director</label>
            <input type="text" class="form-control" id="director">
          </div>
          <div class="mb-3 ">
            <label class="form-label">estudio</label>
            <input type="text" class="form-control" id="estudio">
          </div>

        </form>
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" >Cerrar</button>
        <button type="button" class="btn btn-primary" id="guardarDatos">Guardar</button>
      </div>
    </div>
  </div>
</div>