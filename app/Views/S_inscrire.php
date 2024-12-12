<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="<?= base_url('assets/style/S_inscrire.css'); ?>">
    <title>Get Taxi</title>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg" style="background-color: #ef9f34;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/">Get Taxi</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link text-white" href="/about">About</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" data-bs-toggle="dropdown">Se connecter</a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="<?= base_url('/S_inscrire'); ?>">S'inscrire</a></li>
                            <li><a class="dropdown-item" href="<?= base_url('/se_connecter'); ?>">Se connecter</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5 text-center">
        <img src="<?= base_url('assets/img/taxi.png'); ?>" class="img mb-4" alt="Taxi Image">
        <form action="<?= site_url('/dashbord') ?>" method="post" class="bg-white p-4 rounded shadow">
            <h2 class="mb-4">Inscription</h2>
            <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" required>
            </div>
            <div class="mb-3">
                <label for="prenom" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Adresse Email</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="telephone" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="telephone" name="telephone" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="btn btn-primary w-100">Soumettre</button>
            <p class="mt-3">
            Déjà enregistré ? <a href="<?= base_url('/se_connecter'); ?>" class="text-decoration-none">Se connecter</a>
           </p>
        </form>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-auto py-3" style="background-color: #ef9f34;">
        <p class="mb-0 text-white">&copy; <?= date('Y'); ?> KARKOURI Ayoub. All rights reserved.</p>
    </footer>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
