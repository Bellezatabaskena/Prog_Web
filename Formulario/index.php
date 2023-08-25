<!--Sistema control de usuarios
1. Nombre
2. Email
3. Numero Telefonico
4. Asunto
5. Mensaje
-->

<!doctype html>
<html lang="en">

<head>
  <title>Control de Usuarios</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
body {
    background: #159957;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #155799, #159957);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #155799, #159957); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    
}
</style>
<body>
  <header>
    <!-- place navbar here -->
    </header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">Control de Usuarios</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
              <a class="nav-link" href="#">Perla Mendo López</a>
              <a class="nav-link" href="#">5to ISCo</a>
              <a class="nav-link" href="#">Programación Web</a>
            </div>
          </div>
        </div>
      </nav>
    <main>
      <div class="container h-100" style="padding-top: 1rem;">
        <div class="row justify-content-center align-item-center h-100">
          <div class="col-12 col-sm-12 col-md-3 mb-3">
            <div class="card ">
                <div class="card-body">
                    <form action="./function/insert.php" method="post">
                        <div class="mb-3">
                          <label class="form-label">Nombre Completo</label>
                          <input name="nombres" type="text" class="form-control bg-info" >
                        </div>
                    <form>
                          <div class="mb-3">
                            <label class="form-label">Correo Electronico</label>
                            <input name="correo" type="email" class="form-control bg-info">
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Telefono</label>
                            <input name="telefono" type="number" class="form-control bg-info">
                          </div>
                          <div class="mb-3">
                          <label class="form-label">Asunto</label>
                          <input name="asunto" type="text" class="form-control bg-info" >
                        </div>
                        <div class="mb-3">
                          <label class="form-label">Mensaje</label>
                          <textarea name="mensaje" class="form-control bg-info" style="height: 100px"></textarea>
                        </div>
                          <button type="submit" class="btn btn-primary">Enviar</button>
                    </form>
                </div>
              </div>
            </div>
          <div class="col-12 col-sm-12 col-md-9 mb-9">
            <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-light table-striped table-bordered">
                  <thead class="table-info">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre</th>
                      <th scope="col">Correo</th>
                      <th scope="col">Telefono</th>
                      <th scope="col">Asunto</th>
                      <th scope="col">Mensaje</th>
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                </thead>
                  <tbody>
                      <?php
                      require("./connection/connection.php");

                      $query = "SELECT * FROM usuarios";

                      $ejecutar = mysqli_query($connection, $query);

                      $contador = 1;

                      while($fila = mysqli_fetch_array($ejecutar)){

                      ?>
                       <tr>
                                            <td scope="row"><?php echo $contador;?></td>
                                            <td scope="row"><?php echo $fila['nombres'];?></td>
                                            <td scope="row"><?php echo $fila['correo'];?></td>
                                            <td scope="row"><?php echo $fila['telefono'];?></td>
                                            <td scope="row"><?php echo $fila['asunto'];?></td>
                                            <td scope="row"><?php echo $fila['mensaje'];?></td>
                                            <td scope="row"><a href="./editar.php?id=<?php echo $fila['id_usuarios'];?>">Editar</a></td>
                                            <td scope="row"><a href="./function/delete.php?id=<?php echo $fila['id_usuarios'];?>">Eliminar</a></td>
                                        </tr>
                    <?php
                  $contador++; }?>
                  </tbody>
                </table>
              </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer>
    <!-- place footer here -->
    </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>




