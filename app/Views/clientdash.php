<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style/bootstrap.min.css'); ?>">
    <title>Get Taxi</title>
    <style>
        html, body {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        img {
            transition: transform 0.2s ease-in-out;
        }

        img:hover {
            transform: scale(1.1);
        }

        footer {
            margin-top: auto;
            background-color: #ef9f34;
            color: white;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #ef9f34;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/dashboard">
                
                Get Taxi
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link text-white" href="/about">About</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="/etat_commande">Commande</a></li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <?= esc($nom); ?>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                          
                            <li><a class="dropdown-item" href="<?= base_url('/se_connecter'); ?>">Déconnexion</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Form -->
            <div class="col-lg-6 mb-4">
                <h2 class="mb-4 text-center">Bonjour <?= esc($nom); ?></h2>
                <form class="bg-white p-4 rounded shadow" action="<?= base_url('/commande'); ?>" method="post">
                    <?php if (session()->getFlashdata('error')): ?>
                        <div class="alert alert-danger"><?= session()->getFlashdata('error'); ?></div>
                    <?php endif; ?>

                    <div class="mb-3">
                        <label for="depart" class="form-label">Votre départ</label>
                        <input type="text" class="form-control" id="depart" name="depart" value="<?= old('depart') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="arrive" class="form-label">Votre arrivée</label>
                        <input type="text" class="form-control" id="arrive" name="arrive" value="<?= old('arrive') ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="nbrplaces" class="form-label">Nombre de places</label>
                        <input type="number" class="form-control" id="nbrplaces" name="nbrplaces" min="1" max="3" value="<?= old('nbrplaces') ?>" required>
                    </div>
                    <input type="hidden" name="id_client" value="<?= session('id_client'); ?>">

                    <button type="submit" class="btn btn-primary w-100">Envoyer</button>
                </form>
            </div>

            <!-- Image -->
            <div class="col-lg-6 text-center">
                <img src="<?= base_url('assets/img/3670710.png'); ?>" class="img-fluid" alt="Taxi Illustration" style="max-height: 400px;">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3">
        <p class="mb-0">&copy; <?= date('Y'); ?> KARKOURI Ayoub. Tous droits réservés.</p>
    </footer>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
