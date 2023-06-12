<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ellas+Bellas</title>
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVpHTPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<body>
   
<div class="container-fluid" style="background-color:#D9D2DB;">
    <nav class="navbar navbar-expand-lg m-0">
        <div class="container-fluid">
            <a class="navbar-brand" href="ellas+bellas.php"><img src="img/Logo/logo.jpg" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav w-100 d-flex justify-content-between">
                    <li class="nav-item">
                        <a class="nav-link" href="tratamientos_administrador.php">Tratamientos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="productos_administrador.php">Productos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aparatos_administrador.php">Aparatología</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login_administradores.php">Cerrar sesión</a>
                    </li>
        
                </ul>
            </div>
        </div>
    </nav>

    <div class="contenedorTabla">
        <a href="formAgregar_aparato.php" class="btn btn-dark mt-5">Agregar aparato</a>
        <hr class="hr">
        <table class="table mt-5">
            <thead class="thead-light">
                <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Descripción</th>
                <th scope="col">IMG</th>
                <th scope="col">Acciones</th>
                </tr>
            </thead>
            <tbody>

            <?php
                include('conexion_tienda.php');
                $conexion=mysqli_connect($direccion_BBDD,$usuario_BBDD,$contra_BBDD,$nombre_BBDD);
                $sql="SELECT * FROM aparatos";
                $resultado=$conexion->query($sql);
                while($fila=$resultado->fetch_assoc()) {?>
                    
                <tr>
                    <th scope="row"><?php $fila['cod_ap'] ?></th>
                    <td><?php echo $fila['nombre'] ?></td>
                    <td style="width:300px"><?php echo $fila['descripcion'] ?></td>
                    <td><img style="width:200px; height:200px" src="data:image/jpg;base64,<?php echo base64_encode($fila['img'])?>" alt="aparato"></td>
                    <td>
                        <a href="formulario_editar_aparato.php?cod_ap=<?php echo $fila['cod_ap']; ?>" class="btn btn-warning">Editar</a>
                        <a href="eliminar_aparato.php?cod_ap=<?php echo $fila['cod_ap']; ?>" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
                
            </tbody>
            <?php } ?>
        </table>
    </div>

</div>

</div>
<script src="JS/jsIndex.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>


