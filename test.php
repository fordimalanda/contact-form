<?php
try {
    $pdo = new PDO('mysql:host=localhost;dbname=contact', 'root', '');
    echo "Connexion réussie.";
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}
