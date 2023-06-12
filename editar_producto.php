<?php

    error_reporting(1);

    include('conexion_tienda.php');
    $conexion=mysqli_connect($direccion_BBDD,$usuario_BBDD,$contra_BBDD,$nombre_BBDD);

    $cod_prod=$_REQUEST['idEditar'];

    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];
    if (isset($_FILES['img']['tmp_name']) && !empty($_FILES['img']['tmp_name'])) {
        $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    } else {
        echo "No hay imagen";
    }

    $sql="UPDATE productos SET nombre='$nombre',descripcion='$descripcion',precio='$precio',img='$img'
    WHERE cod_prod='$cod_prod'";

    $resultado=$conexion->query($sql);

    if($resultado){
        header('Location:productos_administrador.php');
    }else{
        echo "Producto no actualizado";
    }

?>