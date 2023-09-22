<!doctype html>
<html lang="en">

<head>
  <title>Sistema de Tickets</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<style>
body {
background: #000428;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #004e92, #000428);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #004e92, #000428); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

}
</style>
<body>
  <header>
  <?php include("../../../Includes/header_admin.php"); ?>
    </header>
    
    <main>
      <div class="container h-100" style="padding-top: 1rem;">
        <div class="row justify-content-center align-item-center h-100">
          <div class="col-12 col-sm-12 col-md-3 mb-3">
            <div class="card ">
                <div class="card-body">
                    <form action="./function/insert.php" method="post">
                        <div class="mb-3">
                          <label class="form-label ">Tipo de Nivel</label>
                          <input name="nombre" type="text" class="form-control bg-info" >
                        </div>
                    <form>
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
                      <th scope="col">Nivel</th>
                      
                      <th scope="col"></th>
                      <th scope="col"></th>
                    </tr>
                </thead>
                  <tbody>
                      <?php
                      require("../../../Includes/db.php");

                      $query = "SELECT * FROM nivel";

                      $ejecutar = mysqli_query($connection, $query);

                      $contador = 1;

                      while($fila = mysqli_fetch_array($ejecutar)){

                      ?>
                       <tr>
                                            <td scope="row"><?php echo $contador;?></td>
                                            <td scope="row"><?php echo $fila['nombre_nivel'];?></td>
                                            
                                            <td scope="row"><a href="./View/editar.php?id=<?php echo $fila['id_nivel'];?>">Editar</a></td>
                                            <td scope="row"><a href="./function/delete.php?id=<?php echo $fila['id_nivel'];?>">Eliminar</a></td>
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
      <?php
    include("../../../Includes/footer.php");
    ?>
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