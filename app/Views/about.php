<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style/bootstrap.min.css'); ?>">
    <title>About - Get Taxi</title>
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
                    <li class="nav-item"><a class="nav-link text-white" href="/dashboard">Home</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container my-5">
        <div class="row align-items-center">
            <!-- Paragraph -->
            <div class="col-lg-6 mb-4">
                <h1 class="mb-4 text-center">About Get Taxi</h1>
                <h4 class="bg-white p-4 rounded shadow">
                Get Taxi est une conception réalisation d’une application web pour la demande de taxis. 
                    Il s’agit de mettre en place un système pour permettre à un client de rechercher un taxi de façon conviviale, facile et fiable.
                    Cette application a été développée par Ahmed Lahmaine et Ayoub Karkouri.
    </h4>
            </div>

            <!-- Image -->
            <div class="col-lg-6 text-center">
                <img src="<?= base_url('assets/img/3670710.png'); ?>" class="img-fluid" alt="Taxi Illustration" style="max-height: 400px;">
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3">
        <p class="mb-0">&copy; <?= date('Y'); ?>Ayoub Karkouri. Tous droits réservés.</p>
    </footer>

    <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>
