<?php

try {
    $db = new PDO(
        'mysql:host=data_base;dbname=portfolio;charset=utf8mb4',
        'root'
    );
} catch (PDOException $e) {
    die("Erreur : ".$e->getMessage());
}