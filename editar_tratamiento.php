<?php

    error_reporting(1);

    include('conexion_tienda.php');
    $conexion=mysqli_connect($direccion_BBDD,$usuario_BBDD,$contra_BBDD,$nombre_BBDD);

    $cod_trat=$_REQUEST['idEditar'];

    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];
    if (isset($_FILES['img']['tmp_name']) && !empty($_FILES['img']['tmp_name'])) {
        $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    } else {
        echo "No hay imagen";
    }
    $cod_tip=$_POST['cod_tip'];

    $sql="UPDATE tratamientos SET nombre='$nombre',descripcion='$descripcion',precio='$precio',img='$img',cod_tip='$cod_tip'
    WHERE cod_trat='$cod_trat'";

    $resultado=$conexion->query($sql);

    if($resultado){
        header('Location:tratamientos_administrador.php');
    }else{
        echo "Tratamiento no actualizado";
    }

?>