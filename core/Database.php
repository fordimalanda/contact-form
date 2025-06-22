<?php
class Database {
    private static $pdo;

    public static function getConnection() {
        if (!self::$pdo) {
            $host = 'localhost';
            $db = 'contact';
            $user = 'root';
            $pass = ''; // Remplace par ton mot de passe root si différent
            $dsn = "mysql:host=$host;dbname=$db;charset=utf8mb4";

            try {
                self::$pdo = new PDO($dsn, $user, $pass);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            } catch (PDOException $e) {
                die("Erreur de connexion à la base de données : " . $e->getMessage());
            }
        }

        return self::$pdo;
    }
}
