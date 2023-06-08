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
   <!-- Barra de navegación -->
<div class="container-fluid" style="background-color:#D9D2DB;">
<nav class="navbar navbar-expand-lg m-0">
    <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="img/Logo/logo.jpg" alt="logo"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 d-flex justify-content-between">
                <li class="nav-item">
                    <a class="nav-link" href="tratamientos_administrador.php">Tratamientos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tratamientos_administrador.php">Productos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tratamientos_administrador.php">Aparatología</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="login_administradores.php">Cerrar sesión</a>
                </li>
      
            </ul>
        </div>
    </div>
</nav>


<?php

    include('conexion_tienda_PDO.php');
    

    $tratamientos = $base->query("SELECT * FROM tratamientos ORDER BY cod_trat")->fetchAll(PDO::FETCH_OBJ);

    if (isset($_POST['cr'])) {
        // Obtener el último valor de cod_trat
        $ultimoCodTrat = $base->query("SELECT MAX(cod_trat) FROM tratamientos")->fetchColumn();
        $nuevoCodTrat = $ultimoCodTrat + 1;
        
        $nombre = $_POST['nombre'];
        $descripcion = $_POST['descripcion'];
        $precio = $_POST['precio'];
        $cod_tip = $_POST['cod_tip'];

        // Verificar si se ha seleccionado un archivo para subir
    if (isset($_FILES['imagen']) && $_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        // Se ha seleccionado una imagen para subir
        $rutaTemporal = $_FILES['imagen']['tmp_name'];

        // Leer el contenido del archivo
        $contenidoImagen = file_get_contents($rutaTemporal);

        // Codificar la imagen en base64
        $imagenBase64 = base64_encode($contenidoImagen);

    } else {
        // No se ha seleccionado ninguna imagen, puedes establecer un valor predeterminado o mostrar un error
        $imagenBase64 = null;
    }

      
    $sql = "INSERT INTO tratamientos (cod_trat, nombre, descripcion, precio, img, cod_tip) 
    VALUES (:cod, :nom, :descrip, :prec, :image, :ct)";
      
        $resultado = $base->prepare($sql);
        $resultado->execute(array(":cod" => $nuevoCodTrat, 
        ":nom" => $nombre, 
        ":descrip" => $descripcion, 
        ":prec" => $precio, 
        ":image" => $imagenBase64, 
        ":ct" => $cod_tip));
      
        header("Location:tratamientos_administrador.php");
      }
      

?>

<h1 class="text-center mt-3 mb-">TRATAMIENTOS</h1>

<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
    <table width="80%" border="0" align="center">
        <tr >
            <td class="primera_fila">Cod_trat</td>
            <td class="primera_fila">Nombre</td>
            <td class="primera_fila">Descripción</td>
            <td class="primera_fila">Precio</td>
            <td class="primera_fila">IMG</td>
            <td class="primera_fila">Cod_tip</td>

            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
            <td class="sin">&nbsp;</td>
        </tr> 


        <?php foreach($tratamientos as $tto): ?>

<tr>
    <td><?php echo $tto->cod_trat ?></td>
    <td><?php echo $tto->nombre ?></td>
    <td><?php echo $tto->descripcion ?></td>
    <td><?php echo $tto->precio ?></td>
    <td><img src="mostrar_imagen.php?id=<?php echo $tto->cod_trat; ?>" alt="Imagen"></td>

    <td><?php echo $tto->cod_tip ?></td>
    <!--Para que nos redirija a la página de borrar.php y pasarle por URL el id hacemos lo siguiente-->
    <td class="bot"><a href="borrar_tratamiento.php?cod_trat=<?php echo $tto->cod_trat ?>"><input type="button" name="del" id="del" value="Borrar"></a></td>
    <td class='bot'>
        <a href="actualizar_tratamiento.php?cod_trat=<?php echo $tto->cod_trat ?>&nom=<?php echo $tto->nombre ?>&desc=<?php echo $tto->descripcion ?>&prec=<?php echo $tto->precio ?>&img=<?php echo base64_encode($tto->img) ?>&cod_tip=<?php echo $tto->cod_tip ?>"><input type="button" name="up" id="up" value="Actualizar"></a></td>
        
</tr> 

<?php endforeach; ?>



        <tr>
            <td></td>
            <td><input type="text" name="nombre" size="10" class="centrado"></td>
            <td><input type="text" name="descripcion" size="10" class="centrado"></td>
            <td><input type="text" name="precio" size="10" class="centrado"></td>
            <td><input type="file" name="imagen" class="centrado"></td>
            <td><input type="text" name="cod_tip" size="10" class="centrado"></td>
            <td class="bot"><input type="submit" name="cr" id="cr" value="Insertar"></td>
        </tr>
    </table>
</form>

</div>

</div>
<script src="JS/jsIndex.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>


