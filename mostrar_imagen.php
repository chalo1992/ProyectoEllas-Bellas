<?php
include('conexion_tienda_PDO.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Obtener los datos de la imagen según el ID
    $statement = $base->prepare("SELECT img FROM tratamientos WHERE cod_trat = :id");
    $statement->execute(array(':id' => $id));

    // Verificar si se encontró la imagen en la base de datos
    if($statement->rowCount() > 0) {
        $row = $statement->fetch(PDO::FETCH_ASSOC);
        $imagenBase64 = $row['img'];

        // Obtener la extensión de archivo a partir del base64
        $extension = '';
        $pos = strpos($imagenBase64, '/');
        if ($pos !== false) {
            $extension = substr($imagenBase64, $pos + 1, strpos($imagenBase64, ';') - $pos - 1);
        }

        // Establecer la cabecera correspondiente al tipo de imagen
        $contentType = 'image/jpeg'; // Tipo de imagen predeterminado
        if ($extension === 'png') {
            $contentType = 'image/png';
        } elseif ($extension === 'jpg') {
            $contentType = 'image/jpg';
        }

        header("Content-Type: $contentType");
        echo base64_decode($imagenBase64);
    }
}
?>
