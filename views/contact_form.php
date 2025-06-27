<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Contact MVC</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

    <div class="container mt-5">
        <h2 class="text-center text-primary mb-4">📬 Formulaire de contact</h2>

        <?php if (!empty($errors)): ?>
            <div class="alert alert-danger">
                <ul class="mb-0">
                    <?php foreach ($errors as $error): ?>
                        <li><?= $error ?></li>
                    <?php endforeach; ?>
                </ul>
            </div>
        <?php endif; ?>

        <form method="post" action="" class="bg-white p-4 shadow rounded">
            <div class="mb-3">
                <label for="nom" class="form-label">Nom :</label>
                <input type="text" id="nom" name="nom" class="form-control" value="<?= $old['nom'] ?? '' ?>">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email :</label>
                <input type="email" id="email" name="email" class="form-control" value="<?= $old['email'] ?? '' ?>">
            </div>

            <div class="mb-3">
                <label for="message" class="form-label">Message :</label>
                <textarea id="message" name="message" rows="4" class="form-control"><?= $old['message'] ?? '' ?></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>

        <div class="mt-3 text-center">
            <a href="/?action=messages" class="btn btn-outline-secondary">📄 Voir les messages envoyés</a>
        </div>
    </div>

    <!-- Bootstrap JS (optionnel) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
