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
 <!-- ========== Bootstrap Icons ========== -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
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
      <div class="container mt-3">
        <div class="badge text-dark bg-primary mb-3"><h1>Tickets</h1></div>
        <div class="row justify-content-center align-item-center h-100">
          <div class="col-12 col-sm-12 col-md-12 mb-9">
          <div class="card">
              <div class="card-body">
                <div class="table-responsive">
                <table class="table table-light table-striped table-bordered">
                  <thead class="table-info">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nombre de Cliente</th>
                      <th scope="col">Administradores</th>
                      <th scope="col">Areas</th>
                      <th scope="col">Nivel</th>
                      <th scope="col">Estatus</th>
                      <th scope="col">Fecha de Creacion</th>
                      <th scope="col">Fecha de Cierre</th>
                      <th scope="col"></th>
                      
                    </tr>
                </thead>
                  <tbody>
                      <?php
                      require("../../../Includes/db.php");

                      $query = "SELECT nombre_cliente, nombre_administrador, nombre_area, nombre_nivel, nombre_estatus, fecha_creacion, fecha_cerrado FROM ticket INNER JOIN cliente ON ticket.id_cliente = cliente.id_cliente INNER JOIN administrador ON ticket.id_administrador = administrador.id_administrador INNER JOIN area ON ticket.id_area = area.id_area INNER JOIN nivel ON ticket.id_nivel = nivel.id_nivel INNER JOIN estatus ON ticket.id_estatus = estatus.id_estatus";

                      $ejecutar = mysqli_query($connection, $query);

                      $contador = 1;

                      while($fila = mysqli_fetch_array($ejecutar)){

                      ?>
                       <tr>
                                            <td ><?php echo $contador;?></td>
                                            <td ><?php echo $fila['nombre_cliente'];?></td>
                                            <td ><?php echo $fila['nombre_administrador'];?></td>
                                            <td ><?php echo $fila['nombre_area'];?></td>
                                            <td>
                                             <?php
                                             if ($fila[ 'nombre_nivel' ] == 'Urgente') {
                                               echo '<span class="badge bg-danger text-light">';
                                               echo $fila[ 'nombre_nivel' ] . "</span>";
                                             } elseif ($fila[ 'nombre_nivel' ] == 'Alto') {
                                               echo '<span class="badge bg-warning text-dark">';
                                               echo $fila[ 'nombre_nivel' ] . "</span>";
                                             } elseif ($fila[ 'nombre_nivel' ] == 'Medio') {
                                               echo '<span class="badge bg-info text-light">';
                                               echo $fila[ 'nombre_nivel' ] . "</span>";
                                             } elseif ($fila[ 'nombre_nivel' ] == 'Bajo') {
                                               echo '<span class="badge bg-success text-light">';
                                               echo $fila[ 'nombre_nivel' ] . "</span>";
                                             }
                                             ?>
                                            </td>
                                            <td>
                                              <?php
                                                if ($fila[ 'nombre_estatus' ] == 'Cerrado') {
                                                 echo '<span class="badge bg-success text-light">';
                                                 echo $fila[ 'nombre_estatus' ] . "</span>";
                                                } elseif ($fila[ 'nombre_estatus' ] == 'Pausado') {
                                                 echo '<span class="badge bg-secondary text-dark">';
                                                 echo $fila[ 'nombre_estatus' ] . "</span>";
                                                } elseif ($fila[ 'nombre_estatus' ] == 'Proceso') {
                                                  echo '<span class="badge bg-primary text-light">';
                                                  echo $fila[ 'nombre_estatus' ] . "</span>";
                                                } elseif ($fila[ 'nombre_estatus' ] == 'Abierto') {
                                                  echo '<span class="badge bg-warning text-dark">';
                                                  echo $fila[ 'nombre_estatus' ] . "</span>";
                                                }
                                              ?>
                                            </td>
                                            
                                            <td ><?php echo $fila['fecha_creacion'];?></td>
                                            <td ><?php echo $fila['fecha_cerrado'];?></td>
                                            
                                            <td><a href="./view/update.php"><i 
                                            class="bi bi-eye-fill text-primary"></i></a></td>
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