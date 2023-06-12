<?php

    include('conexion_tienda.php');
    $conexion=mysqli_connect($direccion_BBDD,$usuario_BBDD,$contra_BBDD,$nombre_BBDD);

    $nombre=$_POST['nombre'];
    $descripcion=$_POST['descripcion'];
    $img=addslashes(file_get_contents($_FILES['img']['tmp_name']));
    

    $sql="INSERT INTO aparatos (nombre,descripcion,img) VALUES ('$nombre','$descripcion','$img')";

    $resultado=$conexion->query($sql);

    if($resultado){
        header('Location:aparatos_administrador.php');
    }else{
        echo "No se insertaron el aparato";
    }


?>