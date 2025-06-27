<?php
require_once 'core/Database.php';

class Contact {
    private $nom;
    private $email;
    private $message;

    public function __construct($nom, $email, $message) {
        $this->nom = trim($nom);
        $this->email = trim($email);
        $this->message = trim($message);
    }

    public function validate() {
        $errors = [];

        if (empty($this->nom)) {
            $errors[] = "Le nom est requis.";
        }

        if (empty($this->email) || !filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Email invalide.";
        }

        if (empty($this->message)) {
            $errors[] = "Le message ne peut pas être vide.";
        }

        return $errors;
    }

    public function save() {
        $pdo = Database::getConnection();
        $stmt = $pdo->prepare("INSERT INTO contacts (nom, email, message) VALUES (?, ?, ?)");
        $stmt->execute([$this->nom, $this->email, $this->message]);
    }

    public static function getAll() {
    $pdo = Database::getConnection();
    $stmt = $pdo->query("SELECT * FROM contacts ORDER BY created_at DESC");
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


    public function getNom() { return htmlspecialchars($this->nom); }
    public function getEmail() { return htmlspecialchars($this->email); }
    public function getMessage() { return htmlspecialchars($this->message); }
}
