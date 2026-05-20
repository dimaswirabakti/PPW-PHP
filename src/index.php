<?php

try {
    $pdo = new PDO(
        "mysql:host=127.0.0.1;port=3306;dbname=app",
        "root",
        "root"
    );

    echo "Connected to MySQL!";
} catch (PDOException $e) {
    echo $e->getMessage();
}