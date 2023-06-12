<?php
    include('conexion_tienda.php');
    $conexion = mysqli_connect($direccion_BBDD, $usuario_BBDD, $contra_BBDD, $nombre_BBDD);

    $cod_ap = $_REQUEST['cod_ap'];

    $sql = "DELETE FROM aparatos WHERE cod_ap = ?";
    $stmt = $conexion->prepare($sql);

    $stmt->bind_param("i", $cod_ap);

    $resultado = $stmt->execute();

    if ($resultado) {
        header('Location: aparatos_administrador.php');
        exit();
    } else {
        echo "No se ha eliminado el aparato";
    }

    $stmt->close();
    $conexion->close();
?>