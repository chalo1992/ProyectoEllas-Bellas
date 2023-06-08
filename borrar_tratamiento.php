<?php

    include('conexion_tienda_PDO.php');
    $cod_trat = $_GET["cod_trat"];

    $stmt = $base->prepare("DELETE FROM tratamientos WHERE cod_trat = :cod_trat");
    $stmt->bindValue(':cod_trat', $cod_trat, PDO::PARAM_INT);
    $stmt->execute();

    header("Location:tratamientos_administrador.php");

?>