<?php

try {
    $database = new PDO('mysql:host=localhost;dbname=animal', 'root', '');
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

