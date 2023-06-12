<?php
    include('conexion_tienda.php');
    $conexion = mysqli_connect($direccion_BBDD, $usuario_BBDD, $contra_BBDD, $nombre_BBDD);

    $cod_prod = $_REQUEST['cod_prod'];

    // Preparar la consulta
    $sql = "DELETE FROM productos WHERE cod_prod = ?";
    $stmt = $conexion->prepare($sql);

    // Vincular el parámetro
    $stmt->bind_param("i", $cod_prod);

    // Ejecutar la consulta
    $resultado = $stmt->execute();

    if ($resultado) {
        header('Location: productos_administrador.php');
        exit();
    } else {
        echo "No se ha eliminado el producto";
    }

    $stmt->close();
    $conexion->close();
?>