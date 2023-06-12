<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar tratamiento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVpHTPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <style>

    </style>
</head>
<body>

    <?php
        include('conexion_tienda.php');
        $cod_prod=$_REQUEST['cod_prod'];
        $conexion=mysqli_connect($direccion_BBDD,$usuario_BBDD,$contra_BBDD,$nombre_BBDD);
        $sql="SELECT * FROM productos WHERE cod_prod=$cod_prod";
        $resultado=$conexion->query($sql);

        $fila = $resultado -> fetch_assoc();

    ?>

    <div class="container mt-5">
        <h1 class="text-center">ACTUALIZAR PRODUCTO</h1>
        <form class="formularioInsertar pt-5" action="editar_producto.php?idEditar=<?php echo $fila['cod_prod'] ?>" method="POST" enctype="multipart/form-data">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre:</label>
                <input type="text" class="form-control" name="nombre" value="<?php echo $fila['nombre'] ?>" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Descripción:</label>
                <textarea class="form-control" name="descripcion" placeholder="Descripción"><?php echo $fila['descripcion'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Precio:</label>
                <input type="text" class="form-control" name="precio" value="<?php echo $fila['precio'] ?>" placeholder="Precio">
            </div>

            <td><img style="width:200px" src="data:image/jpg;base64,<?php echo base64_encode($fila['img'])?>" alt="producto"></td>

            <div class="form-group">
                <label for="exampleInputPassword1">IMG:</label>
                <input type="file" class="form-control" name="img" placeholder="IMG">
            </div>
            
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="productos_administrador.php" class="btn btn-info">Volver</a>
        </form>
    </div>



<script src="JS/jsIndex.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>