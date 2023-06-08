<?php  
//Código capaz de destruir o cerrar la sesión abierta
//Reanudar sesión abierta
session_start();

//Cerrar la sesión
session_destroy();

//Redirigimos automáticamente a la página del login
header("location:login_administradores.php");

?>