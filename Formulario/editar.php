<?php
require("./connection/connection.php");
$id = $_GET['id'];
$query = "SELECT * FROM usuarios WHERE id_usuarios = '$id'";
$ejecutar = mysqli_query($connection, $query);
$fila = mysqli_fetch_assoc($ejecutar);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Control de Usuarios</title>
    <!-- Bootstrap CSS v5.3.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Custom CSS -->
    <!--<link rel="stylesheet" href="css/styles.css"> -->
</head>
<style>
body {
    background: #159957;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #155799, #159957);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #155799, #159957); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    
}
</style>
<body>
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
                <div class="col-12 col-sm-12 col-md-12 mb-12">
                    <div class="card">
                        <div class="card-body">
                        <?php
                        require("./connection/connection.php");
                        $id = $_GET['id'];
                        $query = "SELECT * FROM usuarios WHERE id_usuarios = '$id'";
                        $ejecutar = mysqli_query($connection, $query);
                        $fila = mysqli_fetch_assoc($ejecutar);
                        ?>
                            <form action="./function/update.php?id=<?php echo $fila['id_usuarios'];?>" method="post">
                                <div class="mb-3 card text-bg-info">
                                    <label class="card-header" style ="text-align:center; font-weight: bold;">Editar Datos</label>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Nombre Completo</label>
                                    <input name="nombres" type="text" class="form-control bg-info" value="<?php echo $fila['nombres'];?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Correo</label>
                                    <input name="correo" type="email" class="form-control bg-info" value="<?php echo $fila['correo'];?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Telefono</label>
                                    <input name="telefono" type="number" class="form-control bg-info" value="<?php echo $fila['telefono'];?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Asunto</label>
                                    <input name="asunto" type="text" class="form-control bg-info" value="<?php echo $fila['asunto'];?>">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Mensaje</label>
                                    <textarea name="mensaje" class="form-control bg-info" style="height: 100px"><?php echo $fila['mensaje'];?></textarea>
                                </div>
                                <button type="submit" class="btn btn-success">Guardar</button>
                                <a class="btn btn-warning" href="./index.php">Cancelar</a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Bootstrap-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>