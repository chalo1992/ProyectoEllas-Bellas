<?php

    try {
        $base = new PDO('mysql:host=localhost;dbname=centro_estetica', 'root', '');
        $base->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $base->exec("SET NAMES utf8");
    } catch (Exception $e) {
        die('Error: ' . $e->getMessage());
        echo 'Línea de error' . $e->getLine();
    }

?>