<?php
    $server = 'localhost';
    $username = 'root';
    $password = '9376';
    $database = 'testLogin';

    try {
        $conn = new PDO("mysql:host=$server;dbname=$database;", $username, $password);
    } catch (PDOException $e) {
        die('Conexion failed: ' . $e->getMessage());
    }

?>