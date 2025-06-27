<?php
require_once 'core/Controller.php';
require_once 'core/Database.php';
require_once 'controllers/ContactController.php';
require_once 'models/Contact.php';
require_once 'helpers.php'; // si tu as créé une fonction time_elapsed_string()

$controller = new ContactController();

if (isset($_GET['action']) && $_GET['action'] === 'messages') {
    $controller->showMessages();
} else {
    $controller->handleRequest();
}
