<?php
require_once 'core/Controller.php';
require_once 'models/Contact.php';

class ContactController extends Controller {

    public function handleRequest() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {

            $contact = new Contact(
                $_POST['nom'] ?? '',
                $_POST['email'] ?? '',
                $_POST['message'] ?? ''
            );

            $errors = $contact->validate();

            if (empty($errors)) {
                $contact->save(); // Enregistre dans la base de données
                $this->render('contact_success', ['contact' => $contact]);
            } else {
                $this->render('contact_form', [
                    'errors' => $errors,
                    'old' => $_POST
                ]);
            }

        } else {
            // Affiche le formulaire initial
            $this->render('contact_form');
        }
    }

    public function showMessages() {
    $messages = Contact::getAll();
    $this->render('contact_list', ['messages' => $messages]);
}

}
