<?php

    include('conexion_tienda.php');
    $conexion=mysqli_connect($direccion_BBDD,$usuario_BBDD,$contra_BBDD,$nombre_BBDD);

    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $precio=$_POST['precio'];
    $img=addslashes(file_get_contents($_FILES['img']['tmp_name']));
    $cod_tip=$_POST['cod_tip'];

    $sql="INSERT INTO tratamientos (nombre,descripcion,precio,img,cod_tip) VALUES ('$nombre','$descripcion','$precio',
    '$img','$cod_tip')";

    $resultado=$conexion->query($sql);

    if($resultado){
        header('Location:tratamientos_administrador.php');
    }else{
        echo "No se insertaron los datos";
    }


?>