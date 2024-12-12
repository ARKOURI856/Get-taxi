<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('assets/style/bootstrap.min.css'); ?>">
    <style>
        /* Ensure body takes full height */
        body, html {
            height: 100%;
            margin: 0;
            display: flex;
            flex-direction: column;
        }

        /* Main content container */
        .content {
            flex: 1; /* Push footer to the bottom */
        }

        .card {
            border: none; /* Remove border */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add shadow */
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transition */
        }

        .card:hover {
            transform: translateY(-10px); /* Slight lift on hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Stronger shadow */
        }

        .card-body {
            background-color: #fffbe8; /* Subtle yellow */
            border-radius: 5px; /* Rounded corners */
        }

        .card-title {
            color: #ef9f34; /* Match navbar color */
            font-weight: bold;
        }

        footer {
            background-color: #ef9f34; 
            color: white;
        }
    </style>
    <title>Get Taxi</title>
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg" style="background-color: #ef9f34;">
    <div class="container-fluid">
      <a class="navbar-brand" href="/dashboard_chauff">Get Taxi</a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
          <li class="nav-item"><a class="nav-link text-white" href="/about">About</a></li>
          </li>
         
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle text-white"
              href="#"
              id="navbarDropdown"
              role="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
            <?= esc($nom); ?>
            </a>
            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
              
              <li>
                <a
                  class="dropdown-item"
                  href="<?= base_url('/se_connecter_chaff'); ?>"
                >Déconnexion</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Main Content -->
  <div class="content container mt-5">
    <h1 class="mb-4 text-center">Accépter votre client</h1>
    <div class="row">
      <?php foreach ($commandes as $commande): ?>
        <div class="col-md-4 mb-4">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Client: <?= $commande['nom'] . ' ' . $commande['prenom']; ?></h5>
      <p class="card-text">
        <strong>Email:</strong> <?= $commande['email']; ?><br>
        <strong>Départ:</strong> <?= $commande['depart']; ?><br>
        <strong>Arrivée:</strong> <?= $commande['arrive']; ?><br>
        <strong>Date:</strong> <?= $commande['date']; ?><br>
        <strong>Nombre de Places:</strong> <?= $commande['nbrplaces']; ?><br>
      </p>
      <!-- Ajouter le bouton "Accepter" -->
      <div class="text-center mt-3">
      <a href="/commande_accepter" class="btn btn-success">Accepter</a>
          
       
      </div>
    </div>
  </div>
</div>

      <?php endforeach; ?>
    </div>
  </div>

  <!-- Footer -->
  <footer class="text-center py-3">
    <p class="mb-0">&copy; <?= date('Y'); ?> KARKOURI Ayoub. All rights reserved.</p>
  </footer>

  <script src="<?= base_url('assets/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>