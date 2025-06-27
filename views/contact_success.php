<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Message envoyé</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <div class="alert alert-success text-center shadow-sm">
            <h2 class="text-success">✅ Merci pour votre message !</h2>
        </div>

        <div class="card shadow rounded">
            <div class="card-body">
                <p><strong>👤 Nom :</strong> <?= htmlspecialchars($contact->getNom()) ?></p>
                <p><strong>📧 Email :</strong> <?= htmlspecialchars($contact->getEmail()) ?></p>
                <p><strong>💬 Message :</strong><br><?= nl2br($contact->getMessage()) ?></p>
            </div>
        </div>

        <div class="mt-4 text-center">
            <a href="/" class="btn btn-outline-primary">↩️ Retour à l’accueil</a>
            <a href="/?action=messages" class="btn btn-secondary">📄 Voir tous les messages</a>
        </div>
    </div>

    <!-- Bootstrap JS (facultatif) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
