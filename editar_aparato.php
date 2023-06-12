<?php

    error_reporting(1);

    include('conexion_tienda.php');
    $conexion=mysqli_connect($direccion_BBDD,$usuario_BBDD,$contra_BBDD,$nombre_BBDD);

    $cod_ap=$_REQUEST['idEditar'];
    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];

    if (isset($_FILES['img']['tmp_name']) && !empty($_FILES['img']['tmp_name'])) {
        $img = addslashes(file_get_contents($_FILES['img']['tmp_name']));
    } else {
        echo "No hay imagen";
    }

    $sql="UPDATE aparatos SET nombre='$nombre',descripcion='$descripcion',img='$img'
    WHERE cod_ap='$cod_ap'";

    $resultado=$conexion->query($sql);

    if($resultado){
        header('Location:aparatos_administrador.php');
    }else{
        echo "Aparato no actualizado";
    }

?>