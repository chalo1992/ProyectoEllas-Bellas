<?php



try {
    
    $base = new PDO("mysql:host=localhost; dbname=centro_estetica", "root", "");
    $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM administradores WHERE username = :login AND password = :pass";

    $resultado = $base->prepare($sql);

    $login = htmlentities(addslashes($_POST['username']));
    $password = htmlentities(addslashes($_POST['password']));

    $resultado->bindValue(":login", $login);
    $resultado->bindValue(":pass", $password);

    $resultado->execute();

    $numero_registro = $resultado->rowCount();

    if ($numero_registro != 0) {
        session_start();
        $_SESSION['usuario'] = $_POST['username'];
        header("location:administradores.php");
    } else {
        header("location:login_administradores.php");
        echo "Hola";
    }
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}


?>