<?php
    include('conexion_tienda.php');
    $conexion = mysqli_connect($direccion_BBDD, $usuario_BBDD, $contra_BBDD, $nombre_BBDD);

    $cod_trat = $_REQUEST['cod_trat'];

    // Preparar la consulta
    $sql = "DELETE FROM tratamientos WHERE cod_trat = ?";
    $stmt = $conexion->prepare($sql);

    // Vincular el parámetro
    $stmt->bind_param("i", $cod_trat);

    // Ejecutar la consulta
    $resultado = $stmt->execute();

    if ($resultado) {
        header('Location: tratamientos_administrador.php');
        exit();
    } else {
        echo "No se ha eliminado el tratamiento";
    }

    $stmt->close();
    $conexion->close();
?>
