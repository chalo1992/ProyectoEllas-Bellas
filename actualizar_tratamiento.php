<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>

<h1>ACTUALIZAR</h1>

<?php

include('conexion_tienda_PDO.php');

if(!isset($_POST['bot_actualizar'])){
  $cod_trat = $_GET['cod_trat'];
  $nombre = $_GET['nom'] ?? '';
  $descripcion = $_GET['desc'];
  $precio = $_GET['prec'] ?? '';
  $img = base64_decode($_GET['img']);
  $cod_tip = $_GET['cod_tip'];

} else {
  $cod_trat = $_POST['cod_trat'];
  $nombre = $_POST['nom'];
  $descripcion = $_POST['desc'];
  $precio = $_POST['prec'];
  $cod_tip = $_POST['cod_tip'];

  // Verificar si se ha subido una nueva imagen
  if ($_FILES['imagen']['tmp_name'] !== '') {
    $img = $_FILES['imagen']['name'];
    $img_temp = $_FILES['imagen']['tmp_name'];
    move_uploaded_file($img_temp, "img/FOTOS" . $img);
  } else {
    $img = $_POST['imagen_actual']; // Obtener la imagen actual del formulario
  }

  $sql = "UPDATE tratamientos SET nombre=:nomTrat, descripcion=:descrip, precio=:prec, img=:imag, cod_tip=:ct WHERE cod_trat=:c_trat";

  $resultado = $base->prepare($sql);

  $resultado->execute(array(":c_trat" => $cod_trat, ":nomTrat" => $nombre, ":descrip" => $descripcion, ":prec" => $precio, ":imag" => $img, ":ct" => $cod_tip));

  // Eliminar la imagen actual si hay una nueva imagen
  if ($_FILES['imagen']['tmp_name'] !== '' && $img !== $_POST['imagen_actual']) {
    $rutaImagenActual = "img/FOTOS" . $_POST['imagen_actual'];
    if (file_exists($rutaImagenActual)) {
      unlink($rutaImagenActual);
    }
  }

  header("Location:tratamientos_administrador.php");
}
?>

<p>
 
</p>
<p>&nbsp;</p>

<form name="form1" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
  <table width="25%" border="0" align="center">
    <tr>
      <td></td>
      <td><label for="cod_trat"></label>
      <input type="hidden" name="cod_trat" id="cod_trat" value="<?php echo $cod_trat ?>"></td>
    </tr>
    <tr>
      <td>Nombre</td>
      <td><label for="nom"></label>
      <input type="text" name="nom" id="nom" value="<?php echo $nombre ?>"></td>
    </tr>
    <tr>
      <td>Descripción</td>
      <td><label for="desc"></label>
      <input type="text" name="desc" id="desc" value="<?php echo $descripcion ?>"></td>
    </tr>
    <tr>
      <td>Precio</td>
      <td><label for="precio"></label>
      <input type="text" name="prec" id="prec" value="<?php echo $precio ?>"></td>
    </tr>
    <tr>
      <td>IMG</td>
      <td><label for="img"></label>
      <input type="file" name="imagen" class="centrado"></td>
    </tr>
    <tr>
      <td>Cod_tip</td>
      <td><label for="cod_tip"></label>
      <input type="text" name="cod_tip" id="cod_tip" value="<?php echo $cod_tip ?>"></td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" name="bot_actualizar" id="bot_actualizar" value="Actualizar"></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>
